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
function multiply($num1, $num2, $num3) {
  $result = $num1 * $num2 * $num3;
  return $result;
}

$num1 = 2;
$num2 = 3;
$num3 = 4;

$product = multiply($num1, $num2, $num3);

echo "The product of $num1, $num2, and $num3 is: $product";
 ?>
</body>
</html>