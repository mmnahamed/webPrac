<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>


    <h2>2017 part A 01</h2>
        <style>
            tr.tablerow{
                background-color: rgb(217, 217, 149);
            }
            form.form1{
                border: 1px;
            }
            </style>

            
    <form action="" method="post" class="form1">
        
        <table  width =100%>
            
            <tr style="background-color: aqua;">
                <th colspan ="2">personal Infomation </th>
            </tr>   

            <tr class="tablerow">
                <td>Name</td>
                <td><input type="text" name="name1"></td>
            </tr>
            
            <tr class="tablerow">
                <td>Gender</td>
                <td><input type="radio" name ="gender" value="male">
                    <label for="male">Male</label></br>
                    <input type="radio" name ="gender" value="female">
                    <label for="female">Female</label></td>
                </tr>

                <tr class="tablerow">
                    <td>desiganation</td>
                    <td>
                        <select name="desiganation" id="desiganation">
                            <option value=""></option>
                            <option value="network administator">network administator</option>
                            <option value="computer operrator">computer operrator</option>
                            <option value="it technician">it technician</option>
                        </select>
                    </td>
                </tr>
                
                <tr class="tablerow">
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>

            <tr class="tablerow">
                <td>Divison</td>
                <td>
                    <input type="checkbox" name="ssu" id="ssu">
                    <label for="ssu">ssu</label></br>

                    <input type="checkbox" name="finance" id="finance">
                    <label for="finance">finance</label></br>

                    <input type="checkbox" name="it" id="it">
                    <label for="it">it</label></br>  
                    
                </td>
            </tr>
            
            <tr class="tablerow">
                <td></td>
                <td>
                    <input type="submit">
                    <input type="reset">
                </td>
            </tr>
        </table>
    </form>
        <?php
        if(isset($_POST["name1"])) {
            echo "name : ".$_POST["name1"];
        }
        ?>
        </br>
        <?php
        if(isset($_POST["gender"])) {
            echo "gender: ".$_POST["gender"];
        }
        ?>
        </br>
        <?php
        if(isset($_POST["desiganation"])) {
            echo $_POST["desiganation"];
        }
        ?>
        </br>
        <?php
        if(isset($_POST["email"])) {
            echo $_POST["email"];
        }
        ?>
        </br>
        <?php
        if(isset($_POST["ssu"])) {
            echo "ssu";
            
        }
        if(isset($_POST["finance"])) {
            echo " and ";
            
        }
        
        if(isset($_POST["finance"])) {
            echo "finance";

        }
        if(isset($_POST["it"])) {
            echo " and ";
            
        }
        if(isset($_POST["it"])) {
            echo "it";
            
        }

        ?>


        </br>
        </br>
        </br>
        </br>
        </br>
        </body>
</html>