<?php	
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	$dbhost = "127.0.0.1";
	$dbuser = "root";
	$dbpass = "root";
	$db     = "sample";
    $con = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
?>