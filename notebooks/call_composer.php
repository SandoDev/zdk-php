<?php

include __DIR__ . "/../vendor/autoload.php";

$client = new \zdk\ClientServices();
$postdata = array(
    'identity' => '1032498297'
);
$api = $client->service("zevents");
$result = $api->download_profile($postdata);
print_r($result);

// $api = $client->service("test_service");
// $result = $api->some_method();
// print_r($result);