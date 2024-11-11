<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiz3</title>

	<?php 
	session_start();
	if ($_POST["quiz2"] == 2) {
		$_SESSION["cont"]++;
	};

	 ?>

</head>
<body>
<form name="form" method="post" action="quiz4.php">
		3 pergunta  <br> Quantas pernas tem uma aranha? <br> a) 3 pernas <br> b) 5 pernas<br> c) 8 pernas <br> d) 9 pernas
			<br>

			<input type="text" name="quiz3"> <br>
			<input type="submit" name="enviar" value="Enviar">

			

		</form>





</body>
</html>