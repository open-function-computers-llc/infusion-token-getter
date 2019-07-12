<?php

include("./vendor/autoload.php");
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
$clientID = getenv("CLIENT_ID");
$redirectTo = getenv("REDIRECT_TO");

header("Location: https://signin.infusionsoft.com/app/oauth/authorize?client_id=$clientID&redirect_uri=$redirectTo&response_type=code");
