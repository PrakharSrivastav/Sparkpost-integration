<?php

require 'vendor/autoload.php';
use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

$key = '43b315128e32ee8662b980740cb99990a12b431c';

$httpClient = new GuzzleAdapter(new Client());
$sparky = new SparkPost($httpClient, ['key'=>$key]);

$promise = $sparky->transmissions->post([
    'content' => [
        //'from' => [
        //    'name' => 'SparkPost Team',
        //    'email' => 'from@sparkpostbox.com',
        //],
        //'subject' => 'First Mailing From PHP',
        //'html' => '<html><body><h1>Congratulations, {{name}}!</h1><p>You just sent your very first mailing!</p></body></html>',
        //'text' => 'Congratulations, {{name}}!! You just sent your very first mailing!',
        'template_id' => 'test-template'
    ],
    'substitution_data' => ['name' => 'Test'],
    'recipients' => [
        [
            'address' => [
                'name' => 'Test',
                'email' => 'test@yopmail.com',
            ],
        ],
    ],
]);

try {
    $response = $promise->wait();
    echo $response->getStatusCode()."\n";
    print_r($response->getBody())."\n";
} catch (\Exception $e) {
    echo $e->getCode()."\n";
    echo $e->getMessage()."\n";
}

echo "I will print out after the promise is fulfilled";