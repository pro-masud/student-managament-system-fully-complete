<?php 



	$num		=   30;
	


		function amadergreat_piont($num){

			if( $num  >= 0 AND $num  <= 32 ){

				$great_point		=   'F';

			}elseif( $num  	>= 33 AND $num 	<= 39 ){

				$great_point		=   'D';

			}elseif( $num	>= 40 AND $num	<= 49 ){

				$great_point		=   'C';

			}elseif( $num	>= 50 AND $num	<= 59 ){

				$great_point		=   'B';

			}elseif( $num	>= 60 AND $num	<= 69 ){

				$great_point		=   'A-';


			}elseif( $num	>= 70 AND $num	<= 79 ){

				$great_point		=   'A';

			}elseif( $num	>= 80 AND $num	<= 100 ){

				$great_point		=   'A+';

			}else{
				$great_point		=   'Undefien';
			}

			return $great_point;



		}



				function amadergreat_gpa($num){

			if( $num  >= 0 AND $num  <= 32 ){

				$great_point		=   '0';

			}elseif( $num  	>= 33 AND $num 	<= 39 ){

				$great_point		=   '1';

			}elseif( $num	>= 40 AND $num	<= 49 ){

				$great_point		=   '2';

			}elseif( $num	>= 50 AND $num	<= 59 ){

				$great_point		=   '3';

			}elseif( $num	>= 60 AND $num	<= 69 ){

				$great_point		=   '3.5';


			}elseif( $num	>= 70 AND $num	<= 79 ){

				$great_point		=   '4';

			}elseif( $num	>= 80 AND $num	<= 100 ){

				$great_point		=   '5';

			}else{
				$great_point		=   'Undefien';
			}

			return $great_point;



		}


		function amader_cgpa($b,$bt,$e,$et,$m,$r,$ict,$p,$bgs,$che,$bio,$hm,$acc,$fanc,$bus,$agric,$gs){


			if($b > 0 && $bt > 0 && $e > 0 && $et > 0 && $m > 0 && $r > 0 && $ict > 0 && $p > 0 && $bgs > 0 && $che > 0 && $bio > 0 && $hm > 0 && $acc > 0 && $fanc > 0 && $bus > 0 && $agric > 0 && $gs > 0 ){

				$total_cgpa	 	=	($b + $bt + $e + $et + $m + $r + $ict + $p + $bgs + $che + $bio + $hm + $acc + $fanc + $bus + $agric + $gs);

				$cgpa 		=  $total_cgpa	/ 17;
			

			}else{


				$cgpa = ' F ';



			}

			return $cgpa;




		}













 ?>



 ?>