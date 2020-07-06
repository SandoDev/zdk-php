<?php

// use function zdk\client;

// include_once(__DIR__ . '/../zdk/client.php');

// client('zevents');
// $json = download_profile($postdata);
// print_r($json);


// print_r(callZevents('download_profile', $postdata));
include_once(__DIR__ . '/../zdk/client.php');

// $api1 = client('other_service');
// $result = $api1->call_some();
// print_r($result);

// echo PHP_EOL;

$postdata = array(
    'identity' => '1032498297'
);
$api2 = client('zevents');
$result = $api2->download_profile($postdata);
print_r($result);

echo PHP_EOL;
// if (file_exists('zdk/zinobe/zevents/client.php')){
//     print_r("existeeeeee");
// }
// echo PHP_EOL;