<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    th{
        text-align:left;
    }
    </style>

</head>
<body>
    <form action="#" method="post">
        <table border="1">
            <tr>
                <th colspan="12">
                    <h3>Student Information</h3>
                </th>
            </tr>
            <tr>
                <td colspan="2">
                    <label>Name</label>
                </td>
                <td colspan="10">
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label>Age</label>
                </td>
                <td colspan="10">
                    <select name="age">
                        <option value="20-21" checked>20-21</option>
                        <option value="22-21">20-21</option>
                        <option value="20-21">20-21</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label>Gender</label>
                </td>
                <td>
                Male<input type="radio" name="gender" value="male" checked>
                    Female<input type="radio" name="gender" value="female">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label>Comment</label>
                </td>
                <td colspan="10">   
                    <textarea name="comment" id="" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="10">
                    <input type="submit" name="submit">
                    <input type="reset" name="reset">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $comment = $_POST['comment'];


        echo "name :".$name."<br>";
        echo "age :".$age."<br>";
        echo "gender :".$gender."<br>";
        echo "comment :".$comment."<br>";
    }
    ?>

</body>
</html>




