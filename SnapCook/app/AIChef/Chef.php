<?php

namespace App\AIChef;

use Anthropic;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Chef
{
    public function GetRecipe(string $imagePath)
    {
        try {
            // Retrieve the image from storage
            $image = Storage::get($imagePath);

            // Get the image extension
            $imageExtension = Storage::mimeType($imagePath);

            // Allowed image extensions
            $allowedExtensions = ['gif', 'jpeg', 'png', 'webp'];

            // Log the image extension and path for debugging
            Log::info('Image extension: ' . $imageExtension);
            Log::info('Image path: ' . $imagePath);

            // Retrieve the API key from environment variables
            $apiKey = env('ANTRHOPIC_API_KEY');

            // Check if the API key exists
            if (!$apiKey) {
                throw new \Exception('API key not found');
            }

            // Initialize the Anthropic API client with the API key
            $client = Anthropic::client($apiKey);

            // Make a request to the API with the image and specific instructions
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
                                                    3. instruction 3
 
                                                In case the image is not that of a dish, begin with "This is not a dish, this is a ..." and provide a description of the image, then playfully insult the user'
                            ],
                            [
                                'type' => 'image',
                                'source' => [
                                    'type' => 'base64',
                                    'media_type' => $imageExtension,
                                    'data' => base64_encode($image)
                                ],
                            ],
                        ]

                    ]
                ]
            ]);

            // Get the text response from the API
            $response = $result->content[0]->text;

            // Split the response into lines
            $splitText = preg_split("/\r\n|\n|\r/", $response);

            // Initialize arrays to store different parts of the response
            $description = [];
            $recipe = [];
            $ingredients = [];
            $instructions = [];
            $error = [];

            // Default section is description
            $section = 'description';

            // Loop through each line of the response
            for ($i = 0; $i < count($splitText); $i++) {
                $line = $splitText[$i];

                // Skip empty lines
                if (empty($line)) {
                    continue;
                }

                // Check for section headers and update the current section
                if (str_contains($line, "Description:")) {
                    $section = 'description';
                } elseif (str_contains($line, "Ingredients:")) {
                    $section = 'ingredients';
                } elseif (str_contains($line, "Instructions:")) {
                    $section = 'instructions';
                } elseif (str_contains($line, "basic recipe")) {
                    $section = 'recipe';
                } elseif (str_contains($line, "This is not a dish")) {
                    $section = 'error';
                }

                // Add the line to the appropriate section array
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
                    case 'error':
                        $error[] = $line;
                        break;
                }
            }

            // put recipe in database
            return [
                'description' => $description,
                'recipe' => $recipe,
                'ingredients' => $ingredients,
                'instructions' => $instructions,
                'error' => $error,
                'file' => $response
            ];
        }
        
        catch (\Exception $e) {
            // Log any exceptions that occur during the process
            Log::error('Error in GetRecipe: ' . $e->getMessage());
        }
    }
}
