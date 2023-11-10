<?php

?>

<html>
    <head>
        <title>Jquery & AJAX</title>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="test.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label>First Name : </label>
                    </td>
                    <td>
                        <input type="text" name="fname"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Last Name : </label>
                    </td>
                    <td>
                        <input type="text" name="lname"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>email : </label>
                    </td>
                    <td>
                        <input type="email" name="email"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contact : </label>
                    </td>
                    <td>
                        <input type="text" name="contact" maxlength="10"/>
                    </td>
                </tr>
            </table>
        </form>

        <script>
            $(document).ready(function() {
                

                $.ajax({
                    type: "POST",
                    url: 'test.php',
                    data: $(this).serialize(),
                    success: function(response){
                        
                    }
                });
            });

        </script>
    </body>
</html>