<?php

require_once realpath("vendor/autoload.php");

use Harness\Client;
use OpenAPI\Client\Model\Target;

$SDK_KEY = getenv("SDK_KEY") ?: "";  // you can put your key in env variable or you can provide in the code

$cfClient = new Client($SDK_KEY, new Target(["name" => "harness", "identifier" => "harness"]), [
    "base_url" => "http://ff-proxy:7000",
    "events_url" => "http://ff-proxy:7000"
]);

echo "Evaluation value for flag 'flag1' with target 'enver': " . $cfClient->evaluate("flag1", false);
