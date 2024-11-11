<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiz 2</title>
</head>
<body>

	<form name="form" method="post" action="exer2.php">
			RESULTADO
			
			<?php  
			$_SESSION['quiz1'] = $_POST['quiz1'];
			$_SESSION['quiz2'] = $_POST['quiz2'];
			$_SESSION['quiz3'] = $_POST['quiz3'];
			$_SESSION['quiz4'] = $_POST['quiz4'];
			$_SESSION['quiz5'] = $_POST['quiz5'];
			?>

			<?php 
			echo $_SESSION["quiz3"]; ?> </br> 
			<?php
			echo $_SESSION["quiz4"]; ?> </br>
			<?php
			echo $_SESSION["quiz5"]; ?> </br>
</form>
	 

	 <?php 

	   $a = a;


	 if ($_SESSION["quiz3"]==($a)) {
	
	echo $_SESSION["quiz3"];
	}else {
	 ;
	
}





	  ?>

		

</body>
</html>