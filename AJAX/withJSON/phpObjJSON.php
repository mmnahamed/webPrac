<?php

$phpObj = new stdClass();

$phpObj -> Name = "Shaan";
$phpObj -> Age = 26;
$phpObj -> HomeTown = "Colombo";

$phpJSON = json_encode($phpObj); // PHP Object in to JSON - ECODE

echo $phpJSON;
?>