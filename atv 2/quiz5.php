<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiz5</title>

		<?php 
	session_start();
	if ($_POST["quiz4"] == 2) {
		$_SESSION["cont"]++;
	};

	 ?>
</head>
<body>

	<form name="form5" method="post" action="resultado.php">
	5 pergunta  <br> Qual o coletivo de peixe <br> a) manada <br> b) aquário<br> c) cardume <br> d) oceano
			<br>

			<input type="text" name="quiz5"> <br>
			<input type="submit" name="enviar" value="Enviar">

			
			</form>
</body>
</html>