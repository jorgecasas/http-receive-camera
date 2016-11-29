<?php

$file_log = dirname(__FILE__) .'/../../../../logs/test.log';
$server_content_disposition = ( isset( $_SERVER['HTTP_CONTENT_DISPOSITION']) ? $_SERVER['HTTP_CONTENT_DISPOSITION'] : '' );

// Get camera data
$camaraID = $_GET['camaraID'];
$file_data_input = file_get_contents("php://input");
$filename_output = dirname(__FILE__) .'/../../../../tmp/camara'.$camaraID.'_'. date('y-m-d_H-i-s') .'.jpg'; 

// Write image data to disk
file_put_contents($filename_output, $file_data_input );

// Write logs with $_SERVER info
file_put_contents($file_log, print_r($_SERVER, true) . PHP_EOL, FILE_APPEND | LOCK_EX );
file_put_contents($file_log, "Server HTTP_CONTENT_DISPOSITION: ". $server_content_disposition . PHP_EOL, FILE_APPEND | LOCK_EX );
