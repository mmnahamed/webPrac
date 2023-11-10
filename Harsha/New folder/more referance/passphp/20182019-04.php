<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site Development</title>
</head>
<body>
    <form method="POST" action="">
        <table border="1" cellpadding="1" cellspacing="2" width="650px">
            <thead>
                <tr> 
                    <th colspan="2" align="center" style="background-color:#6bffc1;"><h1 style="margin-top:0;">Web Site Development</h1></th>
                </tr>
            </thead> 
            <tbody> 
                <tr> 
                    <td>Your Name</td>
                    <td> <input type="text" name="name"/></td> 
                </tr> 
                <tr> 
                    <td>Email</td>
                    <td><input type="email" name="email"/></td> 
                </tr>
                <tr>
                    <td>Age</td>
                    <td> 
                        <select name="age" required>
                            <?php
                                for ($i = 1; $i <= 70; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td>Do you like this Web Site?</td>
                    <td>
                        <input type="radio" name="like" value="yes" id="yes"><label for="yes">Yes</label><br>
                        <input type="radio" name="like" value="no" id="no"><label for="no">No</label><br>
                        <input type="radio" name="like" value="unsure" id="unsure"><label for="unsure">Not Sure</label>
                    </td>
                </tr>
                <tr> 
                    <td>Your Comments</td>
                    <td><textarea name="comments" rows="4" cols="50"></textarea></td>
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
                echo "Your Name: " . $_POST["name"] . "<br>";
            }
            if (!empty($_POST["email"])) {
                echo "Email: " . $_POST["email"] . "<br>";
            }
            if (!empty($_POST["age"])) {
                echo "Age: " . $_POST["age"] . "<br>";
            }
            if (!empty($_POST["like"])) {
                echo "Do you like this Web Site? " . $_POST["like"] . "<br>";
            }
            if (!empty($_POST["comments"])) {
                echo "Your Comments: " . $_POST["comments"] . "<br>";
            }
        }
    ?>
</body>
</html>
