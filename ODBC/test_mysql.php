<?php

    $username = 'net21';
    $password = 'shaan2131';
    $database = 'testDB';
    $port = 3306;
    
    // Create connection
    // $mysqli = new mysqli('localhost', $user, $password, $database, $port);
    $mysqli = new mysqli('localhost', $username, $password);
    
    // Check connection
    if ($mysqli -> connect_error) {
        die('Connect Error(' . $mysql->connect_errno . ')' . $mysqli->connect_error);
    }

    echo '<p>Connection OK! :  ' . $mysqli->host_info . '</p>';
    echo '<p>Server :  ' . $mysqli->server_info . '</p>';

    // Return name of current default database ------------------
    if ($result = $mysqli -> query("SELECT DATABASE()")) {
        $row = $result -> fetch_row();
        echo "Default database is " . $row[0] . "<br>";
        $result -> close();
    }

    //Query for deleting database -------------------------------
    $sql = "DROP DATABASE testDB";

    if (!$mysqli->query($sql)) {
        echo "Error deleting database: ". $mysqli->error;
    }
    else { 
        echo "Database deleted successfully.<br>";
    }

    // // Create database --------------------------------------
    $sql = "CREATE DATABASE testDB";

    if ($mysqli->query($sql) === TRUE) {
        echo "Database created successfully<br>";
    }
    else {
        echo "Error creating database: " . $mysqli->error . "<br>";
    }

    $mysqli -> select_db($database);

    // sql to create table -------------------------------------
    $sql = "CREATE TABLE test (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        contact VARCHAR(10),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
    if ($mysqli->query($sql) === TRUE) {
        echo "Test table created successfully <br>";
    }
    else {
        echo "Error creating table: " . $mysqli->error;
    }

    // Insert Data ---------------------------------------------
    $sql = "INSERT INTO test (firstname, lastname, email, contact)
    VALUES ('John', 'Doe', 'john@example.com', '0123456789'),
    ('Sample', 'Sample1', 'sample@example.com', '1111111111')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully <br><br>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    // Select and output data of each row ------------------------
    $sql = "SELECT * FROM test";
    $output = $mysqli->query($sql);

    if ($output->num_rows > 0) {
        // while($row = mysqli_fetch_all($output, MYSQLI_ASSOC)) {
        //     print_r($row[0]); 
        //     print_r($row[1]); 
        // }

        while($row = $output->fetch_assoc()) {
            echo "id: " . $row["id"]. "<br>Name: " . $row["firstname"]. "<br>" . $row["lastname"]. "<br>" . $row["email"]. "<br>" 
            . $row["contact"]. "<br>" . $row["reg_date"]. "<br><br>";
        }
    }
    else {
        echo "0 results";
    }

    $mysqli->close();
?>