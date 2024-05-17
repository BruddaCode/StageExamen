<?php

namespace App\AIChef;

use Anthropic;

class Chef
{

    public function GetRecipe(string $imagePath)
    {
        $imagePath = str_replace("\0", '', $imagePath);

        // Get the image extension
        $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);

        // convert image to PNG if it's not in the allowed extensions
        // Allowed image extensions
        $allowedExtensions = ['gif', 'jpeg', 'png', 'webp'];

        if (is_readable(public_path('tmp_img/' . $imagePath))) {
            $imageData = file_get_contents(public_path('tmp_img/' . $imagePath));
        } else {
            die("The file " . public_path('tmp_img/' . $imagePath) . " does not exist or isn't readable.");
        }

        // Check the image extension and convert if necessary
        if (!in_array($imageExtension, $allowedExtensions)) {
            $newImagePath = public_path('tmp_img/' . pathinfo($imagePath, PATHINFO_FILENAME) . '.png');
            $imagePath = $newImagePath;
            $imageExtension = 'png';

            $image = imagecreatefromstring($imageData);

            if ($image !== false) {
                imagepng($image, $newImagePath);
                imagedestroy($image);
            } else {
                die("The image could not be created from the provided data.");
            }
        }

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

        // Clean up temporary files
        unlink(public_path('tmp_img/' . $imagePath));
        if (isset($newImagePath) && file_exists($newImagePath)) {
            unlink($newImagePath);
        }

        // Return the recipe
        return response()->json([
            'image' => base64_encode($imageData),
            'description' => $description,
            'recipe' => $recipe,
            'ingredients' => $ingredients,
            'instructions' => $instructions
        ]);
    }
}
