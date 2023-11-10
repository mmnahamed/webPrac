<?php
//Credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ex1_db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE ".$dbname;
if ($conn->query($sql) === TRUE) {
  echo $dbname. " : Database created successfully";
} else { 
  echo "Error creating database: " . $conn->error;
}

// Database creation
$sql = "CREATE TABLE Regs (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    r_name VARCHAR(30) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    prof VARCHAR(10) NOT NULL,
    email VARCHAR(50),
    subjects VARCHAR(100),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} 
else {
    echo "Error creating table: " . $conn->error;
}

//$conn->close();

?>