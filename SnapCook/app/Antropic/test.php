<?php

$apiKey = getenv('ANTRHOPIC_API_KEY');
$client = Anthropic::client($apiKey);

$result = $client->messages()->create([
    'model' => 'claude-3-opus-20240229',
    'temperature' => 0,
    'max_tokens' => 1000,
    'messages' => [
        [
            'role' => 'system',
            'content' => [
                [
                    'type' => 'image',
                    'media_type' => 'image/jpeg',
                    'data' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://example.com/image.jpg'))
                ],
                [
                    'type' => 'text',
                    'data' => 'This is a test message'
                ],
            ]

        ]
    ]
]);

echo $result->content[0]->text;
