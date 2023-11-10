<?php
echo $_COOKIE['myuser'];
?>

<br><br>

<?php
if(isset($_COOKIE["myuser"]))
echo "Welcome".$_COOKIE["myuser"]."<br>";
else
echo "Welcome guest<br>";
?>
