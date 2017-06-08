<?php
include('helpers.php');
include('my_php.php');

ini_set('display_errors', 1);
ini_set('dispay_startup_errors', 1);
error_reporting(E_ALL);

check_post_only();
$params = process_parameters();
validate_data($params);

include('file_upload.php');
store_data_in_db($params);
include('file_upload.php');
include('confirmation.php');

?>