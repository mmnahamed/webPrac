<?php  require_once('DB.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
        $results = $conn->query('INSERT INTO `user`(`first_name`, `last_name`, `phone`) VALUES ("Jack","Ma","77014478")');
        // if($query){
           
        //     // while ($row = $query->fetch_assoc()){
        //     while ($row = $query->fetch_row()){
        //         // echo $row['id']." | ".$row['first_name']." | ".$row['last_name']." | ".$row['phone'].'<br />';
        //         echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3].'<br />';
        //     }
        // }

        if ($result) {
           echo "Successfully Updated";
        }else{
            echo "Not insert";
        }

    
    ?>
    
</body>
</html>