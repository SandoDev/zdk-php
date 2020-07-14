<?php

// header("Content-Type: application/json; charset=UTF-8");

// function API($ruta){
//     $url = 'http://4c12af8bfbc7.ngrok.io/api/v1/';
//     $response = $url.$ruta;
//     return $response;
// }

// $endpoint = API('download_profile');

// $datas->identity='1032498297';
// $data = json_encode($datas);

// $context = 

// $json = file_get_contents($endpoint,FALSE,$data);
// print_r($json);



$url = 'http://4c12af8bfbc7.ngrok.io/api/v1/download_profile';
// $data = array('identity' => '1032498297');

// //$datas->identity='1032498297';
// //$data = json_encode($datas);
// //print_r($data);
// // use key 'http' even if you send the request to https://...
// $options = array(
//     'http' => array(
//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method'  => 'POST',
//         'content' => http_build_query($data)
//     )
// );
// print_r($options);
// $context  = stream_context_create($options);
// print_r($context);
// $result = file_get_contents($url, false, $context);

// print_r($result);


$postdata = array(
        'identity' => '1032498297'
    );

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => json_encode($postdata)
    )
);

print_r($opts);
echo PHP_EOL;
$context = stream_context_create($opts);

$result = file_get_contents($url, false, $context);
print_r($result);