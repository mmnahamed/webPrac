<?php
$user='root';
$password='';
$database='test';
$port=NULL;
$mysqli=new mysqli('localhost',$user,$password,$database,$port);

if($mysqli->connect_error){
    die('Connect Error('.$mysqli->connect_errno.')'. $mysqli->connect_error);
}

$sample_sql="SELECT * FROM users";
$result=$mysqli->Query($sample_sql);

if($result){
    while($row=$result->fetch_row()){
        // print ($row['ID']."|".$row['f_name']."|".$row['l_name']."|".$row['Phone']."<br>");
        print ($row[0]."|".$row[1]."|".$row[2]."|<br>");
    }
}

$mysqli->close();

?>