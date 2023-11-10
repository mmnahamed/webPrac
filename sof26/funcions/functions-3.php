<html>
<head></head>
<body>
        
<!-- global variable -->

<?php 
$a=3;
$b=5;
function Add1(){
    global $a,$b;
    $b=$a+$b;
}
Add1();
echo $b;
?>
<!-- global variable -->

<br><br>

<!-- heredoc syntax -->

<?php 
$mystring=<<<EOT
This is some PHP text
EOT;
echo $mystring;
?>

<br><br>

<?php 
$name="Max";
$mystring = <<<EOT
Hello $name <br>
this is a 
demo message 
with heredoc.

EOT;
echo $mystring;
 
?>

<!-- heredoc syntax -->

<br><br>

<!-- $_SERVER -->

<?php
echo $_SERVER['PHP_SELF'].'<br>';
echo $_SERVER['SERVER_ADDR'].'<br>';
echo $_SERVER['REQUEST_METHOD'].'<br>';
echo $_SERVER['HTTP_HOST'].'<br>';
?>
<!-- $_SERVER -->


</body>
</html>