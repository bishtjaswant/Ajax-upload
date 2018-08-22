<?php 

try {
	
	$conn = new PDO("mysql:dbname=test;host=localhost","root","");
	$conn->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);



      if (!$conn) {
    		echo "error occured";
      }





} catch (Exception $e) {
	die('unable to connect');
}
require_once "users.php";
$user = new Users($conn);

 ?>