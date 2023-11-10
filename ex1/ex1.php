<?php
require('connect_db.php');

$name = $_POST["Name"];
$gender = $_POST["Gender"];
$prof = $_POST["Prof"];
$email = $_POST["Email"];
$sub = $_POST["sub"];

echo "Your are Registered! <br><br>";

echo "Name : ".$name."<br>";
echo "Gender : ".$gender."<br>";
echo "Profession : ".$prof."<br>";
echo "Email : ".$email."<br>";
echo "Selected subjects : ";
if (count($sub)>0) {
    for ($i = 0; $i < count($sub); $i++){
        echo $sub[$i].", ";
    }
}
else{
    echo "No subjects Selected!";
}


$sql1 = "INSERT INTO Regs (r_name, gender, prof, email, subjects)
VALUES ('".$name."', '".$gender."', '".$prof."', '".$email."', '".$sub."')";

if ($conn->query($sql1) === TRUE) {
    echo "Data inserted successfully";
} 
else {
    echo "Error when inserting data: " . $conn->error;
}