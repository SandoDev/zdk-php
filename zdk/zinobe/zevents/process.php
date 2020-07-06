<?php

function callZevents($service, $postdata)
{
    $url = 'http://6aaacc111108.ngrok.io/api/v1/' . $service;
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
