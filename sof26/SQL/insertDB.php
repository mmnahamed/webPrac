<?php
$user='root';
$password='';
$database='Test';
$port=NULL;
$mysqli=new mysqli('localhost',$user,$password,$database,$port);

if($mysqli->connect_error){
    die('Connect Error('.$mysqli->connect_errno.')'. $mysqli->connect_error);
}
  
$sample_sql="INSERT INTO users (ID, f_name, l_name, Phone)VALUES ('', 'kamal','gamage','0758965412')";
$result=$mysqli->Query($sample_sql);

if($result){
print("Record added");
    }
    else{
        print("Record not added");
    }


$mysqli->close();

?>