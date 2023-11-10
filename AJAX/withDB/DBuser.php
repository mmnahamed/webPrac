<?php
$txt = $_REQUEST["q"];

if($txt!==""){
    $con = mysqli_connect('localhost','root', '','test1');
    
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    else{
        echo "Connection is Success. Input :  $txt";
    }

    mysqli_select_db($con,"test1");

    $sql="SELECT * FROM users WHERE First_Name = '$txt'";
    $result = mysqli_query($con,$sql);

    echo "<table>
    <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Phone</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        if($row){
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['First_Name'] . "</td>";
        echo "<td>" . $row['Last_Name'] . "</td>";
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