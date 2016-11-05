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
// $response = $sparky->request("POST", 'recipient-lists', $config['new-list']);

// Get all recipient lists
// request('GET','recipient-lists')
// $response = $sparky->request('GET','recipient-lists');


// Update a recipient list
// request('PUT','recipient-lists/lis-id',$payload)
// $response = $sparky->request('PUT','recipient-lists/test-list-2',$config['list']);

// Delete a recipient list
// request('DELETE','recipient-lists/list-id');
// $response = $sparky->request('DELETE','recipient-lists/test-list-2');

// Create a template
// Make sure all the email-addresses are pointed to you domain
// request('POST','templates',$payload)
// $response = $sparky->request('POST','templates',$config['template-create']);
// $response = $sparky->request('POST','templates',$config['template-create-new']);

// List all templates
// request('GET','template')
// $response = $sparky->request('GET','templates');

// Get a specific template
// request('GET','templatestemplate-id')
// $response = $sparky->request('GET','templates/test-template');

// Update Template
// request('PUT','templates/template-id',$payload);
// $response = $sparky->request('PUT','templates/summer_sale',$config['template-update']);

// Delete Template
// request('DELETE','templates/template-id');
// $response = $sparky->request('DELETE','templates/summer_sale');

// Sending transmission with stored-template and stored-list
//$response = $sparky->request('POST','transmissions', [
//    'content'       => ['template_id' => 'test-template',],
//    'recipients'    => ['list_id' =>'new-list'], 
//    "campaign_id"   => "christmas_campaign",
//    "name"          => "Fall Sale",
//]);

try {
    echo $response->getStatusCode() . "\n";
    print_r($response->getBody()) . "\n";
}
catch (\Exception $e) {
    echo $e->getCode() . "\n";
    echo $e->getMessage() . "\n";
}