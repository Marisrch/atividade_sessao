<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 1</title>

		<?php 


	session_start();
	//gravamos o nome 
	$_SESSION["nome"] = $_POST["nome"];
	$_SESSION["cont"] = 0;
	 ?>


</head>
<body>

	<form name="form" method="post" action="quiz2.php">
			Primeira pergunta  <br> Quantas cores tem os arco-íris? <br> a) 7 cores <br>b) 5 cores<br> c) 8 cores <br>d) 9 cores
			<br>

			<input type="text" name="quiz1"> <br>
			<input type="submit" name="enviar" value="Enviar"> <br>
		
			<?php echo $_SESSION["nome"] ?>

		</form>




</body>
</html>