<?php

$pObj->Name = "kasun";
$pObj->Age = 30;
$pObj->Home_Town = "Colombo";

$pJSON = json_encode($pObj);

echo $pJSON;
?>