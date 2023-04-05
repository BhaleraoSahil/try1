<!DOCTYPE html>
<html>
<head>
	<title>My PHP Page</title>
	<style>
		body {
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
			font-size: 16px;
		}

		h1 {
			color: #333;
			text-align: center;
		}

		p {
			color: #555;
			text-align: justify;
			line-height: 1.5;
			margin: 0 0 10px;
		}
	</style>
</head>
<body>
	<?php
		$name = "Sahil";
		$age = 21;
		$occupation = "Developer";
	?>

	<h1>Welcome to my PHP Page</h1>

	<p>Hi, my name is <?php echo $name ?> and I'm <?php echo $age ?> years old. I work as a <?php echo $occupation ?>.</p>
</body>
</html>
