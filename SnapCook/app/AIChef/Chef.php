<?php

namespace App\AIChef;

use Anthropic;
use Illuminate\Support\Facades\DB;

class Chef
{

    public function GetRecipe(string $imagePath)
    {
        try {
            $imageData = file_get_contents($imagePath);
            $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);

            $apiKey = env('ANTRHOPIC_API_KEY');

            if (!$apiKey) {
                throw new \Exception('API key not found');
            }

            $client = Anthropic::client($apiKey);

            $result = $client->messages()->create([
                'model' => 'claude-3-opus-20240229',
                'temperature' => 0,
                'max_tokens' => 1000,
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => [
                            [
                                'type' => 'text',
                                'text' =>  'Tell me about this dish. What is it? How is it made? What are the ingredients? can you provide a recipe?
                                            can you put it in this format:
                                                Description:
                                                    - description 1
                                                    - description 2
                                                    - description 3

                                                here is a basic recipe to make [dish name]:

                                                Ingredients:
                                                    - ingredient 1
                                                    - ingredient 2
                                                    - ingredient 3
                                                Instructions:
                                                    1. instruction 1
                                                    2. instruction 2
                                                    3. instruction 3'
                            ],
                            [
                                'type' => 'image',
                                'source' => [
                                    'type' => 'base64',
                                    'media_type' => 'image/' . $imageExtension,
                                    'data' => base64_encode(file_get_contents(public_path('tmp_img/' . $imagePath)))
                                ],
                            ],
                        ]

                    ]
                ]
            ]);

            $response = $result->content[0]->text;

            $splitText = preg_split("/\r\n|\n|\r/", $response);

            $description = [];
            $recipe = [];
            $ingredients = [];
            $instructions = [];

            $section = 'description';

            for ($i = 0; $i < count($splitText); $i++) {
                $line = $splitText[$i];

                if (empty($line)) {
                    continue;
                }

                if (str_contains($line, "Description:")) {
                    $section = 'description';
                } elseif (str_contains($line, "Ingredients:")) {
                    $section = 'ingredients';
                } elseif (str_contains($line, "Instructions:")) {
                    $section = 'instructions';
                } elseif (str_contains($line, "basic recipe")) {
                    $section = 'recipe';
                }

                switch ($section) {
                    case 'description':
                        $description[] = $line;
                        break;
                    case 'recipe':
                        $recipe[] = $line;
                        $section = 'description';
                        break;
                    case 'ingredients':
                        $ingredients[] = $line;
                        break;
                    case 'instructions':
                        $instructions[] = $line;
                        break;
                }
            }

            // put recipe in database
            DB::table('recipes')->insert([
                'image' => base64_encode($imageData),
                'description' => json_encode($description),
                'title' => json_encode($recipe),
                'ingredients' => json_encode($ingredients),
                'instructions' => json_encode($instructions)
            ]);
        }
        catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
