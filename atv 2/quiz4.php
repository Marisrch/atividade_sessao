<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiz4</title>

		<?php 
	session_start();
	if ($_POST["quiz3"] == 2) {
		$_SESSION["cont"]++;
	};

	 ?>
</head>
<body>
	<form name="form4" method="post" action="quiz5.php">
	4 pergunta  <br> Quantos ml tem 1 litro <br> a) 1ml <br> b) 100ml<br> c) 1000ml <br> d) 10000ml
			<br>

			<input type="text" name="quiz4"> <br>
			<input type="submit" name="enviar" value="Enviar">

			
</form>
</body>
</html>