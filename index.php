<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax upload</title>
<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/css/custom.css">
</head>
<body>
	
	<div class="container-fluid">
		
		<div class="page-header">
			       <h1 class="text-center">form upload via Ajax </h1>
				          <div class="row">
				          	<div class="col-md-2"></div>
				          	<div class="col-md-8">
				          		<form action="" id="form" method="post" enctype="multipart/form-data">
				          			<div class="input-group input-lg">
										  <span class="input-group-addon glyphicon glyphicon-user"></span>
										  <input type="text" id="name" name="name" class="form-control" placeholder="Username">
									 </div>

									 <div class="input-group input-lg">
										  <span class="input-group-addon glyphicon glyphicon-envelope"></span>
										  <input type="text" id="email" name="email" class="form-control" placeholder="email">
									 </div>

									 <div class="input-group input-lg">
										  <span class="input-group-addon glyphicon glyphicon-upload"></span>
										  <input type="file" multiple name="file[]" id="file" class="form-control" >
									 </div>
									 
									 <div class="form-group">
									 	<input type="submit" id="btnsubmit" value="Upload" name="upload" class="btnn btn-success btn-block">
									 </div>

					                     <div class="form-group">
					  					 	  <div class="progress-bar-wrapper progress-bar-striped active">
					  					 	  	 <span class="progress-bar"> <span class="percentage"> </span> </span>
					  					 	  </div>
					  					 </div>

				          		</form>
				          	</div>
				          	<div class="col-md-2"></div>
				          </div>
			
		</div>
	</div>







	<script src="public/js/jquery.js"> </script>
	<script src="public/js/bootstrap.min.js"> </script>
	<script src="public/js/script.js"> </script>
</body>
</html>