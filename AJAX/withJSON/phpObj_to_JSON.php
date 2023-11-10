<?php

$JSON = '{ "Value1":50, "Value2":30}';

$phpObj = json_decode($JSON); //JSON into PHP object - DECODE

echo $phpObj -> Value1 . "<br>";
echo $phpObj -> Value2 . "<br>";

$a = $phpObj -> Value1;
$b = $phpObj -> Value2;
$c = $a + $b;

echo "<br/>";

echo "Result: $c";
?>

