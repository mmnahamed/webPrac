<?php
$recordid = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$Phone = $_GET['phone'];
$Subject = $_GET['subject'];
$message = $_GET['message'];

$con=mysqli_connect("localhost", "root", "", "office");

$query = " UPDATE netlink SET name='$name',email='$email',phone='$Phone',subject='$Subject',massege='$message' 
WHERE id ='$recordid'";

if( mysqli_query($con,$query))     {
	
	header('Location:view.php');
} 
else{
	echo"error".$recordid;
}

?>