<?php
include_once(__DIR__ . '/../zdk/zinobe/zevents/process.php');
$postdata = array(
    'identity' => '1032498297'
);

print_r(callZevents('download_profile', $postdata));
