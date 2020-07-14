<?php

namespace Zinobe\Zdk\Zinobe\Zevents;

class Client
{
    protected static $process;

    public function __construct()
    {
        self::$process = new Process;
    }

    public static function create_profile($postdata)
    {
        $service = 'create_profile';
        return self::$process->callZevents($service, $postdata);
    }
    public static function get_profile_cursor($postdata)
    {
        $service = 'get_profile_cursor';
        return self::$process->callZevents($service, $postdata);
    }
    public static function get_profile($postdata)
    {
        $service = 'get_profile';
        return self::$process->callZevents($service, $postdata);
    }
    public static function download_profile($postdata)
    {
        $service = 'download_profile';
        return self::$process->callZevents($service, $postdata);
    }
    public static function delete_profile($postdata)
    {
        $service = 'delete_profile';
        return self::$process->callZevents($service, $postdata);
    }
    public static function create_event($postdata)
    {
        $service = 'create_event';
        return self::$process->callZevents($service, $postdata);
    }
    public static function get_event_cursor($postdata)
    {
        $service = 'get_event_cursor';
        return self::$process->callZevents($service, $postdata);
    }
    public static function get_event($postdata)
    {
        $service = 'get_event';
        return self::$process->callZevents($service, $postdata);
    }
}
