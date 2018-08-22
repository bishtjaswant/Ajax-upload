<?php 


require_once 'config/debug.php';

 if ( isset($_POST) OR isset($_FILES)) {
			

			$name = htmlspecialchars(strip_tags(trim( $_POST['name'] )));
			$email = htmlspecialchars(strip_tags( $_POST['email'] ));
            $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);

             $files = $_FILES['file'];
             $data = [];
             foreach ($files as $index => $info) {
             	  foreach ($info as $key => $value) {
             	  	      $data[$key][$index]=$value;
             	  }
             }


           foreach ($data as $filesData) {
           	        /*
           	       require_once('config/users.php');
                   $user = new Users();
                   $user->addUser($name,$valid_email, $filesData );*/
                       require_once 'insert.php';
                      
                       $path = "upload/".$filesData['name'];
                       $tmp_name = $filesData['tmp_name'];
                          
                   if ( move_uploaded_file($tmp_name ,  $path)) {
                         if ( insert($name, $valid_email, $filesData)==true ) {
                            echo "uploaded successfully";
                         }
                         else{
                            echo "failed";
                         }
                   }
                   else{
                      echo "failed";
                   }


           }

 	 
 }


 ?>