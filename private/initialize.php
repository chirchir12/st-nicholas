<?php 
session_start();
ob_start();
require_once('enable_error.php');

display_errors();
require_once('helpers.php');
require_once('connect.php');
require_once('query_db.php');

$db = db_connect();

?>