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
$salaries = array(
    "Peter" => 500000,
    "John" => 100000
);

$designations = array(
    "Peter" => "Computer Operator",
    "John" => "Manager"
);

echo "Salary of Peter is " . $salaries["Peter"] . "<br>";
echo "Salary of John is " . $salaries["John"] . "<br>";
echo "Salary of Peter is " . $salaries["Peter"] . "<br>";
echo "Designation of Peter is " . $designations["Peter"] . "<br>";
echo "Designation of John is " . $designations["John"] . "<br>";
echo "Designation of Peter is " . $designations["Peter"] . "<br>";
?>
</body>
</html>