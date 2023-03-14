<?php 
	
	include_once "inc/connection.php";




 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<div class="student_result">
		<div class="mid">


						<?php 	


					$yesr		=	$_POST['years'];
					$roll		=	$_POST['roll'];
					$reg		=	$_POST['reg'];


					$data 	=  $conn 	->  query("SELECT * FROM result WHERE s_py = '$yesr'  AND s_roll = '$roll' AND s_reg 	= '$reg' ");





				while( $dataall = $data -> fetch_assoc()) :


			 ?>
			<section class="student_top_header">
				<h2 style="color:#34D399;">Anowara Polytechnic Institute</h2>
				<div class="stu_image">
					<img src="studentphotos/<?php echo $dataall['s_img']; ?>" alt="">
				</div>
				<div class="stu_info">
					<h1 style="color:#34D399;">Affiliated To : CBSE Board / Affiliation No : 24234242</h1>
					<h3 style="color:#34D399;">Phone +08801710027898, Email : freelancermannan114@gmail.com</h3>
					<h3 style="color:#34D399;">Visit us : <a href="#">www.devmasud.com</a></h3>




					<h2 style="color:#34D399;">ACADEMIC TRANSCRIPT</h2>
					<h4 style="color:#34D399;">Academic Session : 2018 - 2019</h4>
					<h4 style="color:#34D399;">HIGHER SECONDARY CRTIFICATE EXAMINATION</h4>
				</div>
				<div class="clg_img">
					<img src="img/" alt="">
				</div>
				
			</section>



			<section class="student_info">
				<div class="student_left">
					<table>
						<tr>
							<td>Student Name  <span> : <?php echo $dataall['s_name']; ?></span></td>
						</tr>

						<tr>
							<td>Fathe's Name  <span> : <?php echo $dataall['s_fname']; ?></span></td>
						</tr>

						<tr>
							<td>Mother's Name  <span> : <?php echo $dataall['s_mnane']; ?></span></td>
						</tr>

						<tr>
							<td>Address  <span> : <?php echo $dataall['s_add']; ?></span></td>
						</tr>

						<tr>
							<td>Division  <span> : <?php echo $dataall['s_divi']; ?></span></td>
						</tr>

						<tr>
							<td>Religion  <span> : <?php echo $dataall['s_reli']; ?></span></td>
						</tr>

						<tr>
							<td>Email  <span> : <?php echo $dataall['s_ema']; ?></span></td>
						</tr>

						

					</table>
				</div>
				<div class="student_right">
					<table>
						<tr>
							<td>Institute Name <span> : <?php echo $dataall['s_ins']; ?></span></td>
						</tr>

						<tr>
							<td>Roll <span> : <?php echo $dataall['s_roll']; ?></span></td>
						</tr>

						<tr>
							<td>Registation <span> : <?php echo $dataall['s_reg']; ?></span></td>
						</tr>

						<tr>
							<td>Passing Year <span> : <?php echo $dataall['s_py']; ?></span></td>
						</tr>

						<tr>
							<td>Session <span> : <?php echo $dataall['s_ss']; ?></span></td>
						</tr>

						<tr>
							<td>Group <span> : <?php echo $dataall['s_gr']; ?></span></td>
						</tr>


						<tr>
							<td>Data Of Birth  <span> : <?php echo $dataall['s_d']; ?></span></td>
						</tr>
					</table>
				</div>
			</section>	 	


	 

			<section class="student_result_table">
				<table>
					<thead>
						<tr>
							<th>SL</th>
							<th>Name of Subject</th>
							<th>Letter Grade</th>
							<th>Grade Point</th>
							<th>Full GPA</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>01</td>
							<td>Bangla 1st Paper</td>
							<td><?php echo $dataall['sir']; ?></td>
							<td><?php echo $dataall['sir_to']; ?></td>
							<td rowspan="17"><?php echo $dataall['cgpa']; ?></td>
						</tr>

						<tr>
							<td>02</td>
							<td>Bangla 2nd Paper</td>
							<td><?php echo $dataall['r_bt_p']; ?></td>
							<td><?php echo $dataall['r_bt_gp']; ?></td>
						</tr>

							<tr>
							<td>03</td>
							<td>English 1st Paper</td>
							<td><?php echo $dataall['r_e_p']; ?></td>
							<td><?php echo $dataall['r_e_gp']; ?></td>
						</tr>


						<tr>
							<td>04</td>
							<td>English 2nd Paper</td>
							<td><?php echo $dataall['r_et_p']; ?></td>
							<td><?php echo $dataall['r_et_gp']; ?></td>
						</tr>


						<tr>
							<td>05</td>
							<td>Math</td>
							<td><?php echo $dataall['r_m_p']; ?></td>
							<td><?php echo $dataall['r_m_gp']; ?></td>
						</tr>

						<tr>
							<td>06</td>
							<td>Religion</td>
							<td><?php echo $dataall['r_r_p']; ?></td>
							<td><?php echo $dataall['r_r_gp']; ?></td>
						</tr>

						<tr>
							<td>07</td>
							<td>ICT</td>
							<td><?php echo $dataall['r_ict_p']; ?></td>
							<td><?php echo $dataall['r_ict_gp']; ?></td>
						</tr>

						<tr>
							<td>08</td>
							<td>Physics</td>
							<td><?php echo $dataall['r_p_p']; ?></td>
							<td><?php echo $dataall['r_p_gp']; ?></td>
						</tr> 
						<tr>
							<td>09</td>
							<td>Bangladesh and Global Studies</td>
							<td><?php echo $dataall['r_bgs_p']; ?></td>
							<td><?php echo $dataall['r_bgs_gp']; ?></td>
						</tr>

						<tr>
							<td>10</td>
							<td>Chemistry</td>
							<td><?php echo $dataall['r_ehe_p']; ?></td>
							<td><?php echo $dataall['r_ehe_gp']; ?></td>
						</tr>

						<tr>
							<td>11</td>
							<td>Biology</td>
							<td><?php echo $dataall['r_bio_p']; ?></td>
							<td><?php echo $dataall['r_bio_gp']; ?></td>
						</tr>

						<tr>
							<td>12</td>
							<td>Higher Math</td>
							<td><?php echo $dataall['r_hig_p']; ?></td>
							<td><?php echo $dataall['r_hig_gp']; ?></td>
						</tr>

						<tr>
							<td>13</td>
							<td>Accounting</td>
							<td><?php echo $dataall['r_acco_p']; ?></td>
							<td><?php echo $dataall['r_acco_gp']; ?></td>
						</tr>

						<tr>
							<td>14</td>
							<td>Finance</td>
							<td><?php echo $dataall['r_fian_p']; ?></td>
							<td><?php echo $dataall['r_fian_gp']; ?></td>
						</tr>

						<tr>
							<td>15</td>
							<td>Business Entrepreneurship</td>
							<td><?php echo $dataall['r_be_p']; ?></td>
							<td><?php echo $dataall['r_be_gp']; ?></td>
						</tr>

						<tr>
							<td>16</td>
							<td>Agricultural Studies</td>
							<td><?php echo $dataall['r_ags_p']; ?></td>
							<td><?php echo $dataall['r_ags_gp']; ?></td>
						</tr>

						<tr>
							<td>17</td>
							<td>General Science</td>
							<td><?php echo $dataall['r_gsc_p']; ?></td>
							<td><?php echo $dataall['r_gsc_gp']; ?></td>
						</tr>




	
					</tbody>
				</table>
				
			</section>


		<?php endwhile; ?>
			
		</div>
	</div>





	
</body>
</html>