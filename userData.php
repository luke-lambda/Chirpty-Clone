<?php

use GuzzleHttp\Client;

require 'vendor/autoload.php';

$client = new Client([
    'base_uri' => 'https://twitter.com/'
]);

$response = $client->request('GET', 'test');
