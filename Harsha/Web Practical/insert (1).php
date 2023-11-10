<?php
$name = $_GET['name'];
$email = $_GET['email'];
$Phone = $_GET['phone'];
$Subject = $_GET['subject'];
$massege = $_GET['massege'];


$con=mysqli_connect("localhost", "root", "", "office");
 

$query="INSERT INTO netlink(name,email,phone,subject,massege)
 VALUES('$name','$email','$Phone','$Subject','$massege')";

if( mysqli_query($con,$query))     {
	
	echo "done";
} 
else{
	echo"error".$recordid;
}
?>