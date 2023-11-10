<?php

define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'practical');

$conn = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}



