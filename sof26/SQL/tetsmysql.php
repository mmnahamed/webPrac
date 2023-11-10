<?php
$user='root';
$password='';
$port=NULL;
$mysqli=new mysqli('localhost',$user,$password,$port);

if($mysqli->connect_error){
    die('Connect Error('.$mysqli->connect_errno.')'. $mysqli->connect_error);
}
echo '<p>connection OK ' . $mysqli->host_info.'</p>';
echo '<p>server' . $mysqli->server_info.'</p>';
$mysqli->close();

?>