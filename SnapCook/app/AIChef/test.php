<?php

namespace SnapCook\App\AIChef;

require_once '../../vendor/autoload.php';

use Anthropic;

class Test
{
    public $imagePath = '/home/fw/Downloads/71c6c0a85ff64f34cd2a5a196d6e317e.webp';

    public function test()
    {
        $imagePath = $this->imagePath;
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
                            'text' => 'Tell me about this dish. What is it? How is it made? What are the ingredients? can you provide a recipe?'
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

            if (str_contains($line, "Ingredients:")) {
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

        // displaying the results
        // later we can return these values to the web page
        print_r($description);
        print_r($recipe);
        print_r($ingredients);
        print_r($instructions);
    }
}

$test = new Test();
$start = microtime(true);
$test->test();
echo "\nTime: " . (microtime(true) - $start) . "s\n";




