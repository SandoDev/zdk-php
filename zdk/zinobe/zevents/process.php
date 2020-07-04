<?php

function callZevents($data, $postdata)
{
    $url = 'http://4c12af8bfbc7.ngrok.io/api/v1/' . $data;
    $opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => json_encode($postdata)
    ));

    $context = stream_context_create($opts);
    $result = file_get_contents($url, false, $context);
    return $result;
}
