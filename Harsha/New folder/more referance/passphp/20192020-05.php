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
    $number = "1234569";
    $sum = 0;
    for($i = 0;$i <strlen($number); $i++){
        $sum += $number [$i];
    }
    echo "Sum is :".$sum;
    ?>
    </body>
</html>