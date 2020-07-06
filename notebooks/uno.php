<?php
$datas->identity='1032498297';
$data = json_encode($datas);
print_r($data);
echo PHP_EOL;

print_r(substr_replace('/..camilo','zdk',0,3));
echo PHP_EOL;

/*
 * 
 * opcode number: 108
 */
try {
    $error = 'Always throw this error';
    throw new Exception($error);

    // Code following an exception is not executed.
    echo 'Never executed';

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

// Continue execution
echo 'Hello World';
