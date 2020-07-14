<?php

namespace Zinobe\Zdk\Zinobe\Zevents;

use Requests;

class Process
{
    public function callZevents($service, $postdata)
    {
        $url = 'https://zevent.sg-zinobe.com:443/api/v1/' . $service;
        $opts = array(
            'Content-Type' => 'application/json; charset=utf-8',
            "Accept"=> "application/json"
        );

        Requests::register_autoloader();
        $result = Requests::post($url, $opts, $postdata);

        // $context = stream_context_create($opts
        // $result = file_get_contents($url, false, $context);
        return $result;
    }
}
