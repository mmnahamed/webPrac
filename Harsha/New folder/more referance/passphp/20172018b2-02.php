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
$number = 5; // the number to find the factorial of
$factorial = 1; // initialize the factorial variable to 1

// loop from 1 to $number and multiply each number by the factorial
for($i = 1; $i <= $number; $i++){
    $factorial *= $i;
}

echo "The factorial of $number is: $factorial";
?>
  
</body>
</html>