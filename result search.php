<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>


	<div class="result_search">
		<div class="mid">
			<form action="result.php" method="POST">
				<div class="result_box">
					<h2>Anowara Polytechnic Institute</h2>
					<p>Result Search</p>
					<label>Years</label>
					<select name="years">
						<option value="">--Year--</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
					</select>

					<label>Roll</label>
					<input name="roll" type="text">

					<label>Registation</label>
					<input name="reg" type="text">

					<input name="submit" type="submit" value="Result Now">
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>