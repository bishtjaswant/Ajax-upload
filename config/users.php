<?php 
/**
* 

class Users{

	private $db;
	
	public function __construct($conn)
	{
	    $this->db = $conn;
	}


	public function addUser($name,$valid_email, $filesData )
	{
		//usert


		 //file formating............
		       $file = $filesData['name'];
		       $size = $filesData['size'];
		       $type = $filesData['type'];
		       $tmp_name = $filesData['tmp_name'];
		       $path = "../upload/".$filesData['name'];

		       $sql ="INSERT INTO `upload`(`user`, `path`, `type`, `size`, `filename`,`email`) VALUES(?,?,?,?,?,?)";
		       $stmt = $this->db->prepare( $sql );
           
                       if ( is_object( $stmt )) {
                       	         
                       	         $stmt->bindParam(1,$name, PDO::PARAM_STR);
                       	         $stmt->bindParam(2,$path, PDO::PARAM_STR);
                       	         $stmt->bindParam(3,$type, PDO::PARAM_STR);
                       	         $stmt->bindParam(4,$size, PDO::PARAM_STR);
                       	         $stmt->bindParam(5,$file, PDO::PARAM_STR);
                       	         $stmt->bindParam(6,$valid_email, PDO::PARAM_STR);
                       	         $stmt->execute();

                       	           if ( $stmt->rowCount()>0 ) {
                       	           	    // return "SUCCESS";
                       	           	     echo "success ";
                       	           }

                       	           // return "FAILED";
                       	           echo "failed";
                       }




	}


	





}
*/
 ?>