<?php

require "vendor/autoload.php";

$url_token = 'https://app.zenfisio.com/oauth/token';
$url_api = '';
$client_id = '';
$client_secret = '';
$username = '';
$password = '';

$client = new GuzzleHttp\Client;

try {
    // First step is to get the token (Ex: login)
    $response = $client->post($url_token, [
        'form_params' => [
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'grant_type' => 'password',
            'username' => $username,
            'password' => $password,
            'scope' => '*',
        ],
        'verify' => false
    ]);

    $auth = json_decode((string)$response->getBody());

    // Your token is = $auth->access_token;
    // echo $auth->access_token; exit;

    // ----

    // Use token to get data
    $response = $client->get($url_api, [
        'headers' => [
            'Authorization' => 'Bearer ' . $auth->access_token,
        ]
    ]);

    $result = json_decode((string)$response->getBody());

    print_r($result);

} catch (GuzzleHttp\Exception\BadResponseException $e) {
    echo $e;
}
