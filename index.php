<?php

require 'vendor/autoload.php';
$config = require_once 'config.php';

use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

$httpClient = new GuzzleAdapter(new Client());
$sparky     = new SparkPost($httpClient, ['key' => $config['key']]);
$sparky->setOptions(['async' => false]);



// Send an email with recipients and substitution data
/*
$response = $sparky->transmissions->post(
    [
        'content'    => [
            'template_id' => 'test-template'
        ],
        'recipients' => $config['sendlist']
    ]
);
*/

// Get the content of the list
// request('GET',"recipient-lists/list-id?show_recipients=true",)
// $response = $sparky->request('GET', 'recipient-lists/test-list?show_recipients=true');

// Create a recipient list
// request('POST', 'recipient-lists' ,$payload , $headers);
// $response = $sparky->request("POST", 'recipient-lists', $config['list']);

// Get all recipient lists
// request('GET','recipient-lists')
// $response = $sparky->request('GET','recipient-lists');


// Update a recipient list
// request('PUT','recipient-lists/lis-id',$payload)
// $response = $sparky->request('PUT','recipient-lists/test-list-2',$config['list']);

// Delete a recipient list
// request('DELETE','recipient-lists/list-id');
// $response = $sparky->request('DELETE','recipient-lists/test-list-2');

//$response = $sparky->request('PUT', "recipient-lists/unique_id_4_graduate_students_list", );
//try {
////    $response = $sparky->transmissions->post();
//    echo $response->getStatusCode() . "\n";
//    print_r($response->getBody()) . "\n";
//}
//catch (\Exception $e) {
//    echo $e->getCode() . "\n";
//    echo $e->getMessage() . "\n";
//}


try {
    echo $response->getStatusCode() . "\n";
    print_r($response->getBody()) . "\n";
}
catch (\Exception $e) {
    echo $e->getCode() . "\n";
    echo $e->getMessage() . "\n";
}