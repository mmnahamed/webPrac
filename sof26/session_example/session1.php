<?php
session_start();
if (isset($_SESSION['visits'])){
    echo 'you have bee here '.$_SESSION['visits']. ' times before';
   
}
else
{
    echo 'Session end';
}
?>