<?php
$pJObj = '{ "Value1":50, "Value2":30}';
//$pJObj=$_GET["x"];
$pJObj = json_decode($pJObj); //JSON into PHP object

echo $pJObj->Value1 . "<br/>";
echo $pJObj->Value2 . "<br/>";

$a = $pJObj->Value1;
$b = $pJObj->Value2;
$c = $a + $b;

echo "<br/>";

echo "Result: $c";
?>

