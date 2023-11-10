<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
</head>
<body>
    <form method="POST" action="">
        <table border="1" cellpadding="1" cellspacing="2" width="650px">
            <thead>
                <tr> 
                    <th colspan="2" align="center"><h1 style="margin-top:0;">Customer Details</h1></th>
                </tr>
            </thead> 
            <tbody> 
                <tr> 
                    <td>Name</td>
                    <td> <input type="text" name="name"/></td> 
                </tr> 
                <tr> 
                    <td>Address</td>
                    <td><input type="text" name="address"/></td> 
                </tr>
                <tr>
                    <td>Age</td>
                    <td> 
                        <select name="age" required>
                      
                            <option value="20-25">20-25</option>
                            <option value="26-30">26-30</option>
                            <option value="31-35">31-35</option>
                            <option value="36-40">36-40</option>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td>Sex</td>
                    <td>
                        <input type="radio" name="gender" value="Male"/>Male <br>
                        <input type="radio" name="gender" value="Female"/>Female
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit"/>
                        <input type="reset" value="Reset"/>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <br> <br>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["name"])) {
                echo "Name: " . $_POST["name"] . "<br>";
            }
            if (!empty($_POST["address"])) {
                echo "Address: " . $_POST["address"] . "<br>";
            }
            if (!empty($_POST["age"])) {
                echo "Age: " . $_POST["age"] . "<br>";
            }
            if (!empty($_POST["gender"])) {
                echo "Sex: " . $_POST["gender"] . "<br>";
            }
        }
    ?>
</body>
</html>
