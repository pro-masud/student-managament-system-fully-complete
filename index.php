<?php include_once "inc/connection.php" ?>

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

	<div class="log_in">
		<div class="container">
			<div class="card">
				<div class="card-body">

					<?php 



					if(isset($_POST['submit'])){

						$email 		=   $_POST['email'];
						$pass 		=   $_POST['pass'];

					 $data = $conn	->  query("SELECT * FROM user WHERE  email = '$email' AND pass = '$pass' ");

						$row 	=   $data -> num_rows;



						if( $row == 1){

							session_start();

							while( $ddd 	=  $data -> fetch_assoc() ){


							 $_SESSION['name']		=		 $ddd['f_name']. $ddd['L_name'];
							 $_SESSION['email']		=		 $ddd['email'];
							 $_SESSION['cell']		=		 $ddd['cell'];
							 $_SESSION['img']		=		 $ddd['photo_name'];



							}


							header("location:profile.php");

						}else{

							$login_text			=   "<p style='color:red; text-align:center; margin:0px; padding:0px;'>My Dear Log In Unsccessfull Now</p>";

						}

					}


				

							




					 ?>
					<form class="form" action="" method="POST" >
						<div class="row form_input_pp">
							   <h4 style="text-align:center; color:#34D399;">Log In Now</h4>
							   <?php if(isset($login_text)){ echo $login_text;} ?>

							<div class="col-md-12">
								<label class="form-label" for="name">Inter Your Email And Phone Number</label>
								<input name="email" class="form-control" id="name" type="email" placeholder ="Inter Your Email">
							</div>

							<div class="col-md-12">
								<label class="form-label" for="name">Password</label>
								<input name="pass" class="form-control" id="name" type="password" placeholder ="Password">
							</div>


							<div class="col-md-12">
								<input name="submit" class="btn btn-outline-info text-dark" type="submit" value="Log In Now">
							</div>
						</div>
					</form>
				</div>
				<div class="card-footer">
					<a class="btn btn-defulte" href="rag.php">Registion Now</a>
				</div>
			</div>	
		</div>
	</div>








	
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
</body>
</html>