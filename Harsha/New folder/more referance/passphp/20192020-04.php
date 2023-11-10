<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST"action "">
    <table border="1" cellpadding="1" cellspacing="2" width="650px">
        <thead>
            <tr> 
                <th colspan="2" align="left" style="background-color:#6bffc1;"><h1 style="margin-top:0;"> Personal Information</h1></th>
</tr>
<thead> 
    <tbody> 
        <tr> 
            <td>Name </td>
            <td> <input type="text" name="name"/></td> 
</tr> 
<tr> 
    <td> Gender </td>
    <td><input type="radio" name="gender" value ="Male"/>Male</td>
</tr>
<tr> 
    <td></td>
    <td><input type="radio" name="gender" value ="Female"/>Female</td>
</tr>

<tr>
    <td> Designation </td>
    <td> 
        <select name="designation"> 
            <option selected hidden value="">--Your Designation--</option>
            <option> Computer Operator </option>
            <option> Clerk </option>  
            <option> Management Assistant </option>
</select>
</td>

</tr>
<tr> 
    <td> Email </td>
    <td><input type="email" name="email"/></td> 
</tr>

<tr>
<td> Devision </td>
    <td><input type="checkbox" name="devision[0]" value="IT"/> IT </td> 
</tr>

<tr>
<td> </td>
   <td><input type="checkbox" name="devision[1]" value="Finance"/>Finance</td> 
</tr>

<tr>
<td> </td>
    <td><input type="checkbox" name="devision[2]" value="Administration"/>Administration</td> 
</tr>

<tr>
<td> </td>
    <td>
        <input type="submit" value="submit"/>
        <input type="reset" value="Reset"/>
</td>
</tr>
<tbody>
</table>
</form>
<br> <br>
<?php
// echo "<pre>";
// var_dump($_POST);
// echo"</pre>";
if (!empty($_POST["name]"])) {
    echo "Name:".$_POST["name"]."<br>";
}

if (!empty($_POST["gender"])) {
    echo "Gender:".$_POST["gender"]."<br>";
}

if (!empty($_POST["designation"])) {
    echo "Designation:".$_POST["designation"]."<br>";
}

if (!empty($_POST["email"])) {
    echo "Email:".$_POST["email"]."<br>";
}

if (isset($_POST["devision"])){
    echo "Devision:";
    echo(isset($_POST["devision"][0])? $_POST["devision"][0].",":"");
    echo(isset($_POST["devision"][1])? $_POST["devision"][1].",":"");
    echo(isset($_POST["devision"][2])? $_POST["devision"][2]:"");

}
?>
</body>
</html>