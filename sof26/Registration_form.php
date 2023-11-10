<html>
    <head>
    <style>
table, td, {
  border: none;
}

table {
 
  width: 60%;
}

td {
  vertical-align: top;
}
td {
  background-color: FBF975;
 
}
h3 {
  background-color: B6FB71;
  width: 60%;
  
 
}

</style>
    </head>
    <body>
        <form action="Function.php" method="get">
        <h3>Registration Form</h3>
           <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Male">Male 
                    <input type="radio" name="gender" value="Female">Female 
                </td>
            </tr>
            <tr>
                <td>Profesional Field</td>
                <td>
                    <select name="Profesional">
                        <option disable>Select profession</option>
                        <option>Dean</option>
                        <option>Senior Lecturer</option>
                        <option>Lecturer</option>
                        <option>Demonstrator</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Subject Area</td>
                <td>
                    <input type="checkbox" name="subject[]" value="DBMS">DBMS <br>
                    <input type="checkbox" name="subject[]" value="Java">Java <br>
                    <input type="checkbox" name="subject[]" value="Networking">Networking <br>
                    <input type="checkbox" name="subject[]" value="Information Security">Information Security <br>
                    <input type="checkbox" name="subject[]" value="Design Pattern">Design Pattern 
                </td>
            </tr>
            <tr>
                <td></td>
                <td> 
                    <input type="submit" name="submit" value="Submit"> 
                    <input type="reset" name="reset" value="Reset"> 
                </td>
            </tr>

                    
    </body>
</html>