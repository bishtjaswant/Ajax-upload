<?php 

function db()
{
	 $conn = mysqli_connect('localhost','root','','test');

	 if (!$conn) {
	 	die('unable');
	 }

	 return $conn;
}


function insert($name, $valid_email, $filesData)
{
	$conn = db();

	           $file = $filesData['name'];
		       $size = $filesData['size'];
		       $type = $filesData['type'];
		       $tmp_name = $filesData['tmp_name'];
		       $path = "../upload/".$filesData['name'];


		       
      $sql= "INSERT INTO `upload`( `user`, `path`, `type`, `size`, `filename`, `email`)
       VALUES (' $name','$path', '$type',  '$size', ' $file','$valid_email') ";

       mysqli_query($conn,$sql);

                   if (mysqli_affected_rows($conn)==1) {
                 				return true;
                   }

                   return false;
}


 ?>