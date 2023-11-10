<?php
$user='root';
$password='';
$database='test';
$port=NULL;

$txt = $_REQUEST["q"];
if($txt!==""){
$con = mysqli_connect('localhost',$user,$password,$database,$port);
if (!$con) {
    die('Connect Error('.$mysqli->connect_errno.')'. $mysqli->connect_error);
}
else{
	echo "Connection is Success $txt!";
}
mysqli_select_db($con,"test");

$sql="SELECT * FROM users WHERE f_name='$txt'";
$result = mysqli_query($con,$sql);

echo "<table border='2'>
<tr>
<th>ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Phone</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    if($row){

    echo "<tr>";
	echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['f_name'] . "</td>";
    echo "<td>" . $row['l_name'] . "</td>";
    echo "<td>" . $row['Phone'] . "</td>";
    echo "</tr>";
    }
    else{
        echo "No Results";
    }
}
echo "</table>"; 
mysqli_close($con);
}
?>