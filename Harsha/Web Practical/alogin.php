<?php
$A_username = $_POST['A_username'];
$A_password = $_POST['A_password'];

$con=mysqli_connect('localhost','root','','a_admin');
//mysql_select_db(,$con);

$query = "SELECT * FROM login WHERE A_username ='{$A_username}' and A_password ='{$A_password}'";
$result = mysqli_query($con, $query);

$row = mysqli_fetch_array($result);	
$count = mysqli_num_rows($result);


if ($count == 1){
	
	if($A_username == 'admin'){
		header('Location: view.php');
	}
	else{
		header('Location: alogin.php');
	}
	
}

else{
	echo "error";
	//header('Location: errorpage.php');
}

?>