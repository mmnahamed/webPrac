<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<label>Marks</label>
	<form action="#" method="post">
	<input type="number" name="number" value="number">
	<input type="submit" name="submit" value="Cal">
	</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$marks = $_POST['number'];
	if($marks>=60){
		echo "Grade B";
	}
	elseif ($marks>=45) {
		echo "Grade C";
	}
	elseif($marks>=30){
		echo "Grade D";
	}
	elseif($marks<30){
		echo "Fails";
	}
}


?>