<?php session_start(); 

	include_once"inc/function.php";
	include_once"inc/connection.php";
	

	if( empty(  $_SESSION['name'] ) || empty( $_SESSION['cell'] )){

			header("location:index.php");


	}

		if(isset($_POST['submittt']) AND isset($_FILES['s_img'])){

								$s_name 	=	$_POST['s_name'];
								$s_fname 	=	$_POST['s_fname'];
								$s_mnane 	=	$_POST['s_mnane'];
								$s_add 		=	$_POST['s_add'];
								$s_divi 	=	$_POST['s_divi'];
								$s_reli 	=	$_POST['s_reli'];
								$s_ema 		=	$_POST['s_ema'];
								$s_d 		=	$_POST['s_d'];

								// Student data biodata 2s section

								$s_ins 		=	$_POST['s_ins'];
								$s_roll 	=	$_POST['s_roll'];
								$s_reg 		=	$_POST['s_reg'];
								$s_py 		=	$_POST['s_py'];
								$s_ss 		=	$_POST['s_ss'];
								$s_gr 		=	$_POST['s_gr'];

								$s_img 		=	$_FILES['s_img'] ['name'];
								
								$tmp_name 	=	$_FILES['s_img'] ['tmp_name'];





								// bangla book data
			 					$r_b 		=	$_POST['r_b'];
			 					$r_bangla_p		=	amadergreat_piont( $r_b);
			 					$r_bangla_gp		=	amadergreat_gpa($r_b);


			 					// bangla 2 book data
			 					$r_bt 			=	$_POST['r_b2'];
			 					$r_bt_p 		=	amadergreat_piont($r_bt );
			 					$r_bt_gp		=	amadergreat_gpa($r_bt );


			 					// english 1 book data
			 					$r_e 		=	$_POST['r_e'];
			 					$r_e_p 		=	amadergreat_piont($r_e);
			 					$r_e_gp		=	amadergreat_gpa($r_e);


			 					// english 2 book data





			 					$r_et 		=	$_POST['r_e2'];
			 					$r_et_p 		=	amadergreat_piont( $r_et);
			 					$r_et_gp		=	amadergreat_gpa($r_et);

			 					// meth book data
			 					$r_m 		=	$_POST['r_m'];
			 					$r_m_p 		=	amadergreat_piont($r_m);
			 					$r_m_gp		=	amadergreat_gpa($r_m);


			 					// relajion 1 book data
			 					$r_rr 		=	$_POST['r_rr'];
			 					$r_r_p 		=	amadergreat_piont($r_rr);
			 					$r_r_gp		=	amadergreat_gpa($r_rr);

			 					// ice book data
			 					$r_ict 		=	$_POST['r_ict'];
			 					$r_ict_p 		=	amadergreat_piont($r_ict);
			 					$r_ict_gp		=	amadergreat_gpa($r_ict);


			 					$r_p 		=	$_POST['r_p'];
			 					$r_p_p 		=	amadergreat_piont($r_p );
			 					$r_p_gp		=	amadergreat_gpa($r_p);









			 					$r_bgs 		=	$_POST['r_bgs'];
			 					$r_bgs_p 		=	amadergreat_piont( $r_bgs );
			 					$r_bgs_gp		=	amadergreat_gpa($r_bgs );


			 					$r_che 		=	$_POST['r_che'];
			 					$r_ehe_p 		=	amadergreat_piont( $r_che);
			 					$r_ehe_gp		=	amadergreat_gpa($r_che);


			 					$r_bio 		=	$_POST['r_bio'];
			 					$r_bio_p 		=	amadergreat_piont( $r_bio);
			 					$r_bio_gp		=	amadergreat_gpa($r_bio);


			 					$r_hig 		=	$_POST['r_hig'];
			 					$r_hig_p 		=	amadergreat_piont( $r_hig);
			 					$r_hig_gp		=	amadergreat_gpa($r_hig);


			 					$r_acco 	=	$_POST['r_acco'];
			 					$r_acco_p 		=	amadergreat_piont( $r_acco);
			 					$r_acco_gp		=	amadergreat_gpa($r_acco);






			 					$r_fina 	=	$_POST['r_fina'];
			 					$r_fian_p 		=	amadergreat_piont( $r_fina);
			 					$r_fian_gp		=	amadergreat_gpa($r_fina);


			 					$r_be 		=	$_POST['r_be'];
			 					$r_be_p 		=	amadergreat_piont( $r_be);
			 					$r_be_gp		=	amadergreat_gpa($r_be);

			 					$r_ags 		=	$_POST['r_ags'];
			 					$r_ags_p 		=	amadergreat_piont( $r_ags);
			 					$r_ags_gp		=	amadergreat_gpa($r_ags);


			 					$r_gscc 	=	$_POST['r_gscc'];
			 					$r_gsc_p 		=	amadergreat_piont( $r_gscc);
			 					$r_gsc_gp		=	amadergreat_gpa($r_gscc);

					$totall 		=	amader_cgpa( $r_bangla_gp, $r_bt_gp, $r_e_gp, $r_et_gp, $r_m_gp	, $r_r_gp, $r_ict_gp, $r_p_gp, $r_bgs_gp, $r_ehe_gp, $r_bio_gp, $r_hig_gp, $r_acco_gp, $r_fian_gp, $r_be_gp, $r_ags_gp, $r_gsc_gp);




			if(empty($s_name) || empty($s_fname) || empty($s_mnane) ||empty($s_divi) ||empty($s_reli) || empty($s_ema) || empty($s_d) || empty($s_ins) || empty($s_roll) || empty($s_reg) || empty($s_py) || empty($s_ss) || empty($s_gr) || empty($s_img) || empty($r_b) || empty($r_bt) || empty($r_e) || empty($r_et) || empty($r_m) || empty($r_rr) || empty($r_ict) || empty($r_p) ||empty($r_bgs) ||empty($r_che) ||empty($r_bio) ||empty($r_hig) || empty($r_acco) || empty($r_fina) || empty($r_be) || empty($r_ags) || empty($r_gscc) ){

					$dataright	=	"<p style='color:red; text-align:center;font-size:20px;'>Felap All Input Box Thin Pres Botton  </p>";


				}else{



					$conn -> query("INSERT INTO result (s_name, s_fname, s_mnane, s_add, s_divi, s_reli, s_ema, s_d, s_ins, s_roll, s_reg, s_py, s_ss, s_gr, s_img, r_b, sir, sir_to, r_bt, r_bt_p, r_bt_gp, r_e, r_e_p, r_e_gp, r_et, r_et_p, r_et_gp, r_m, r_m_p, r_m_gp, r_rr, r_r_p, r_r_gp, r_ict, r_ict_p, r_ict_gp, r_p, r_p_p, r_p_gp, r_bgs, r_bgs_p, r_bgs_gp, r_che, r_ehe_p, r_ehe_gp, r_bio, r_bio_p, r_bio_gp, r_hig, r_hig_p, r_hig_gp, r_acco, r_acco_p, r_acco_gp, r_fina, r_fian_p, r_fian_gp, r_be, r_be_p, r_be_gp, r_ags, r_ags_p, r_ags_gp, r_gscc, r_gsc_p, r_gsc_gp, cgpa ) VALUES ('$s_name','$s_fname','$s_mnane','$s_add','$s_divi','$s_reli','$s_ema','$s_d','$s_ins','$s_roll','$s_reg','$s_py','$s_ss','$s_gr','$s_img','$r_b','$r_bangla_p','$r_bangla_gp','$r_bt','$r_bt_p','$r_bt_gp','$r_e','$r_e_p','$r_e_gp','$r_et','$r_et_p','$r_et_gp','$r_m','$r_m_p','$r_m_gp','$r_rr','$r_r_p','$r_r_gp','$r_ict','$r_ict_p','$r_ict_gp','$r_p','$r_p_p','$r_p_gp','$r_bgs','$r_bgs_p','$r_bgs_gp','$r_che','$r_ehe_p','$r_ehe_gp','$r_bio','$r_bio_p','$r_bio_gp','$r_hig','$r_hig_p','$r_hig_gp','$r_acco','$r_acco_p','$r_acco_gp','$r_fina','$r_fian_p','$r_fian_gp','$r_be','$r_be_p','$r_be_gp','$r_ags','$r_ags_p','$r_ags_gp','$r_gscc','$r_gsc_p','$r_gsc_gp','$totall')");


					move_uploaded_file($tmp_name,'studentphotos/'.$s_img );



					$dataright	=	"<p style='color:green; text-align:center;font-size:20px;'>Data Sent Too Successfully In Database</p>";




			 						
			 					}

			 				






			 
		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile Page Now</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<div class="profile">
			<section class="manu_bar">
				<div class="menu_left">
					<div class="menu_logo">
						<img src="img/logo.jpg" alt=""> 
						<h3>Dev Mausd Rana</h3>
					</div>
 
				</div>
				<div class="menu_right">
					<div class="uers_logo">
						<a id="uesr_logo" href="#"><img src="uploaded/<?php echo $_SESSION['img']; ?>" alt=""></a>
					</div>
					<h3 id="uesr_logo"><?php echo $_SESSION['name']; ?></h3>
				</div>
			</section>

			<section class="tech_info">
					<div class="mid">
						<?php if(isset($dataright)){
							echo $dataright;

						}?>
					<div class="tech_information">
						<img src="uploaded/<?php echo $_SESSION['img']; ?>" alt="">
						<h3><?php echo $_SESSION['name']; ?></h3>
						<p>ID No: <span> 004</span></p>
						<p>Cell : <span> <?php echo $_SESSION['cell']; ?></span></p>
						<p>Email : <span> <?php echo $_SESSION['email']; ?></span></p>
						<p><a href="inc/logout.php">Log Out</a></p>

					</div>
					<div class="student_info_setup">
						<form method="POST" enctype="multipart/form-data">

							<div class="student_data">
								<div class="student_data_one">
									<h2>Student Biodata</h2>
									<div class="table_left">
										<label for="">Student Name</label>
										<input name="s_name" type="text">

										<label for="">Father's Name</label>
										<input name="s_fname" type="text">

										<label for="">Mother's Name</label>
										<input name="s_mnane" type="text">

										<label for="">Address</label>
										<input name="s_add" type="text">

										<label for="">Division</label>
										<input name="s_divi" type="text">

										<label for="">Religion</label>
										<input name="s_reli" type="text">

										<label for="">Email</label>
										<input name="s_ema" type="text">

										<label for="">Data Of Birth</label>
										<input name="s_d" type="date">

										

									</div>
									<div class="table_right">

										<label for="">Institute Name</label>
										<input name="s_ins" type="text">
										
										<label for="">Roll</label>
										<input name="s_roll" type="text">

										<label for="">Registation</label>
										<input name="s_reg" type="text">

										<label for="">Passing Years</label>
										<input name="s_py" type="text">

										<label for="">Session</label>
										<input name="s_ss" type="text">

										<label for="">Group</label>
										<input name="s_gr" type="text">

										<label for="">Student Photo</label>
										<input name="s_img" type="file">

										
									</div>
								</div>

								<div class="student_data_two">
									<div class="student_text">
										<h2>Student Result Data Submit</h2>
									</div>
									<div class="table_left">
										<label for="">Bangla 1st Paper</label>
										<input name="r_b" type="text">

										<label for="">Bangla 2nd Paper</label>
										<input name="r_b2" type="text">

										<label for="">English 1st Paper</label>
										<input name="r_e" type="text">

										<label for="">English 2nd Paper</label>
										<input name="r_e2" type="text">

										<label for="">Math</label>
										<input name="r_m" type="text">

										<label for="">Religion</label>
										<input name="r_rr" type="text">

										<label for="">ICT</label>
										<input name="r_ict" type="text">

										<label for="">Physics</label>
										<input name="r_p" type="text">

										<label for="">Bangladesh and Global Studies</label>
										<input name="r_bgs" type="text">
									</div>
									<div class="table_right">
										
										<label for="">Chemistry</label>
										<input name="r_che" type="text">

										<label for="">Biology</label>
										<input name="r_bio" type="text">

										<label for="">Higher Math</label>
										<input name="r_hig" type="text">

										<label for="">Accounting</label>
										<input name="r_acco" type="text">

										<label for="">Finance</label>
										<input name="r_fina" type="text">

										<label for="">Business Entrepreneurship</label>
										<input name="r_be" type="text">

										<label for="">Agricultural Studies</label>
										<input name="r_ags" type="text">
										
										<label for="">General Science</label>
										<input name="r_gscc" type="text">


									</div>
									<div class="data_insert_btn">
										<input name="submittt" type="submit" value="Data Inser Now" >
									</div>
								</div>
							</div>
						</form>
					</div>

				</div>
			</section> 
	</div>
	
</body>
</html>