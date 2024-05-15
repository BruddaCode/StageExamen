<?php

namespace SnapCook\App\AIChef;

use Anthropic;

class AIChef
{
    private $imagePath;
    public $description;
    public $recipe;
    public $ingredients;
    public $instructions;

    public function GetRecipe(string $imagePath)
    {
        $this->imagePath = $imagePath;
        $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);

        // convert image to PNG if it's not already
        // Allowed image extensions
        $allowedExtensions = ['gif', 'jpeg', 'png', 'webp'];

        // Temporary file path for downloading the image
        $tempImagePath = 'app/AIChef/temp_image.' . $imageExtension;

        // Download the image from the URL
        $imageData = file_get_contents($imagePath);
        if ($imageData === false) {
            die('Failed to download image.');
        }

        // Save the image to a temporary local file
        file_put_contents($tempImagePath, $imageData);

        // Check the image extension and convert if necessary
        if (!in_array(strtolower($imageExtension), $allowedExtensions)) {
            $image = imagecreatefromstring(file_get_contents($tempImagePath));
            if ($image === false) {
                die('Failed to create image from string.');
            }
            $newImagePath = 'app/AIChef/converted_image.png';
            imagepng($image, $newImagePath);
            imagedestroy($image);
            $imagePath = $newImagePath;
            $imageExtension = 'png';
        } else {
            $imagePath = $tempImagePath;
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
                                'data' => base64_encode(file_get_contents($imagePath))
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
        unlink($tempImagePath);
        if (isset($newImagePath) && file_exists($newImagePath)) {
            unlink($newImagePath);
        }

        // Return the recipe
        $this->description = $description;
        $this->recipe = $recipe;
        $this->ingredients = $ingredients;
        $this->instructions = $instructions;
    }
}
