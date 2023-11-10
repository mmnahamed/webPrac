<?php
$txt = $_REQUEST["q"];
if($txt!=="")
{
    $con = mysqli_connect('localhost:3306','root','');
    if(!$con)
    {
        die('could not connect:'.mysqli_error($con));
    }
    else
    {
        echo "Connection is success $txt!";
    }
    mysqli_select_db($con,"test1exercise");
    $sql="SELECT * FROM users WHERE Firstname = '$txt'";
    $result = mysqli_query($con,$sql);
    echo  "<table>
    <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>phone</th>
    </tr>";
    while($row = mysqli_fetch_array($result)){
        if($row)
        {
            echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['Firstname']."</td>";
            echo "<td>".$row['Lastname']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "</tr>";
        }
        else
        {
            echo "No results";
        }
    }
    echo "</table>";
    mysqli_close($con);
}
?>
    
