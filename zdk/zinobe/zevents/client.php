<?php
include_once 'process.php';

class Client
{
    public static function create_profile($postdata)
    {
        $service = 'create_profile';
        return callZevents($service, $postdata);
    }
    public static function get_profile_cursor($postdata)
    {
        $service = 'get_profile_cursor';
        return callZevents($service, $postdata);
    }
    public static function get_profile($postdata)
    {
        $service = 'get_profile';
        return callZevents($service, $postdata);
    }
    public static function download_profile($postdata)
    {
        $service = 'download_profile';
        return callZevents($service, $postdata);
    }
    public static function delete_profile($postdata)
    {
        $service = 'delete_profile';
        return callZevents($service, $postdata);
    }
    public static function create_event($postdata)
    {
        $service = 'create_event';
        return callZevents($service, $postdata);
    }
    public static function get_event_cursor($postdata)
    {
        $service = 'get_event_cursor';
        return callZevents($service, $postdata);
    }
    public static function get_event($postdata)
    {
        $service = 'get_event';
        return callZevents($service, $postdata);
    }
}
