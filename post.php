<?php

include("./vendor/autoload.php");

use GuzzleHttp\Client;

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
$clientID = getenv("CLIENT_ID");
$clientSecret = getenv("CLIENT_SECRET");
$redirectTo = getenv("REDIRECT_TO");

$client = new Client();
$response = $client->request("POST", "https://api.infusionsoft.com/token", [
    "form_params" => [
        "client_id" => $clientID,
        "client_secret" => $clientSecret,
        "code" => $_GET['code'],
        "grant_type" => "authorization_code",
        "redirect_uri" => $redirectTo,
    ]
]);
$responseJSON = json_decode($response->getBody());
echo "TOKEN: " . $responseJSON->access_token . "<br>";
echo "REFRESH TOKEN: " . $responseJSON->refresh_token;
