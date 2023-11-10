<?php
$myobj = new stdClass();
$val = json_decode($_REQUEST["x"]);
$myobj->name=$val->name;
$myobj->age=$val->age;
$myobj->city="New York";

$myJSON = json_encode($myobj);

echo $myJSON;


?>