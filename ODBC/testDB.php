<?php

    $username = "root";
    $password = "";
    $database = "test";
    $port = "3306";

    $conn = new mysqli('localhost', $username, $password);
    if ($conn -> connect_error) {
        die('Connection Error (' . $conn -> connect_error . ')' . $conn -> connect_error);
    } 

    echo '<p>Connection established : ' . $conn -> host_info . ' </p>';
    echo '<p>Server info : ' . $conn -> server_info . ' </p>';

    // Returns current selected database
    if ($result = $conn -> query("SELECT DATABASE()")) {
        $row = $result -> fetch_row();
        echo 'Selected database is ' . $row[0] . '<br>';
        $result -> close();
    }

    // Deleteing database
    $sql = "DROP DATABASE " . $database . "";
    if (!$conn -> query($sql)) {
        echo "Failed to delete database " . $database . " " . $conn -> error . "";
    }
    else {
        echo "Database " . $database . " deleted succussfully!";
    }

    // Creating database
    $sql = "CREATE DATABASE " . $database . "";
    if (!$conn -> query($sql)) {
        echo "Failed to create database " . $database . " " . $conn -> error . "";
    }
    else {
        echo "Database " . $database . " created succussfully!";
    }

    // Inserting data to database
    $sql = "INSERT INTO test (firstname, lastname, email, contact)
    VALUES ('John', 'Doe', 'john@example.com', '0123456789'),
    ('Sample', 'Sample1', 'sample@example.com', '1111111111')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully <br><br>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    // Select and display data of each row
    $sql = "SELECT * FROM test";
    $output = $conn -> query($sql);

    if ($output -> num_rows > 0) {
        while ($row = $output -> fetch_assoc()) {
            echo "id: " . $row["id"]. "<br>Name: " . $row["firstname"]. "<br>" . $row["lastname"]. "<br>" . $row["email"]. "<br>" 
            . $row["contact"]. "<br>" . $row["reg_date"]. "<br><br>";
        }
    }
    else {
        echo "0 results!";
    }



    $conn -> close();
?>