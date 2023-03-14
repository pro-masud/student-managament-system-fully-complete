<?php include_once"inc/connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In Now</title>
	<!-- favicon now in  -->
	<link rel="shortcut icon" href="img/m.png" type="image/x-icon">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="style.css">

</head>
<body>


	<?php 




	if(isset($_POST['submit'])){


			$f_name			=  	$_POST['f_name'];
			$l_name			=  	$_POST['l_name'];
			$email			=  	$_POST['email'];
			$pass			=  	$_POST['pass'];
			$cell			=  	$_POST['cell'];


			$photo			=  	$_FILES['photo']['name'];
			$tmp_photo			=  	$_FILES['photo']['tmp_name'];



			$photo_time		= 	time().$photo;

			$unic_name_ex	=   explode('.', $photo);

			$unic_name 		= 	md5($photo_time).'.'.end($unic_name_ex);


			


			

			if( empty($f_name) || empty($l_name) || empty($email) || empty($pass) || empty($cell) || empty($photo)){

				$filedsoutpur 			= 	"<p style='color:red; text-align:center; font-size:20px;'>Fields Must Not Be Empty</p>";



			}else{
				$conn -> query("INSERT INTO user (f_name,L_name,email,pass,cell,photo_name) VALUES ('$f_name','$l_name','$email','$pass','$cell','$unic_name')");

				move_uploaded_file($tmp_photo,"uploaded/".$unic_name);

				$filedsoutpur 			= 	"<p style='color:green; text-align:center; font-size:20px;'>Your Data is Sccessfully Complate</p>";

				header("location:index.php");


			}










	}







	 ?>

	<div class="log">
		<div class="container">
			<div class="card">
				<div class="card-body">
					<form class="form" action="" method="POST" enctype="multipart/form-data">
						<div class="row form_input_pp">
							   <h4 style="text-align:center; color:#34D399;">Registetion Form</h4>
							   <?php if(isset($filedsoutpur)){
							   		echo $filedsoutpur;

							   } ?>
							<div class="col-md-6">
								<label class="form-label" for="name">Name</label>
								<input name="f_name" class="form-control" id="name" type="text" placeholder ="Name">
							</div>

							<div class="col-md-6">
								<label class="form-label" for="name">Lesh Name</label>
								<input name="l_name" class="form-control" id="name" type="text" placeholder ="Lesh Name">
							</div>

							<div class="col-md-12">
								<label class="form-label" for="name">Inter Your Email</label>
								<input name="email" class="form-control" id="name" type="email" placeholder ="Inter Your Email">
							</div>

							<div class="col-md-12">
								<label class="form-label" for="name">Password</label>
								<input name="pass" class="form-control" id="name" type="text" placeholder ="Password">
							</div>


							<div class="col-md-12">
								<label class="form-label" for="name">Inter Your Phone</label>
								<input name="cell" class="form-control" id="name" type="text" placeholder ="Inter Your Phone">
							</div>

							<div class="col-md-12">
								<label class="form-label" for="name">Profile Photo</label>
								<input name="photo" class="form-control" id="name" type="file" placeholder ="Inter Your Phone">
							</div>


							<div class="col-md-12">
								<input name="submit" class="btn btn-outline-info text-dark" type="submit" value="Create a Account Now">
							</div>
						</div>
					</form>
				</div>

				<div class="card-footer">
					<a class="btn btn-defulte" href="index.php">Sing In Now</a>
				</div>

			</div>	
		</div>
	</div>








	
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
</body>
</html>