<?php

$server_content_disposition = ( isset( $_SERVER['HTTP_CONTENT_DISPOSITION']) ? $_SERVER['HTTP_CONTENT_DISPOSITION'] : '' );

$camaraID = $_GET['camaraID'];
$file_data_input = file_get_contents("php://input");

$filename_output = dirname(__FILE__) .'/../../../../tmp/camara'.$camaraID.'_'. date('y-m-d_H-i-s') .'.jpg'; 

file_put_contents($filename_output, $file_data_input );


