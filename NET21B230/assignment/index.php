<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery</title>
    <script type="text/javascript" src="../jq/vendors/jquery/jquery-3.7.0.js"></script>
</head>
<body>
   
    <div id="wrapper">
        <div id="divTest1"></div>
        <h1>Hello this is second message</h1>
    </div>
    

    <button> Click me</button>
  

    <h1>Hello this is third message</h1>


    <script>
            $('#divTest1').text('Hi, Web Technologies with JQuery');
                $('h1').text('Welcome new Class');

        document.getElementById('divTest1').innerHTML = "Hi, Web Technologies with JQuery";
    </script>
    
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="../jq/vendors/jquery/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="ch.css">
</head>
<body>
        <form id="userlogin">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <span id="msgUsername"></span>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="">
                <span id="msgPassword"></span>
            </div>

        </form>

    <script>
        $('#username').focusout(function (e) { 
            e.preventDefault();
            $('#msgUsername').html('');
            var username = $(this).val();
            var pattern_user = /^(SOF|NET|MMW)+[0-9][0-9]+(B1|B2)+[0-9][0-9]$/;
            if(pattern_user.test(username)){
                $('#msgUsername').html('<span style="color:green;">Valid Username</span>')
            }else{
                $('#msgUsername').html('<span style="color:red;">Invalid Username</span>')
            }
        }); 
        
        $('#password').focusout(function (e) { 
            e.preventDefault();
            $('#msgPassword').html('');
            var password = $(this).val();
            var pattern_password = /^[A-z0-9]{8,}$/;
            if(pattern_password.test(password)){
                $('#msgPassword').html('<span style="color:green;">Valid Password</span>')
            }else{
                $('#msgPassword').html('<span style="color:red;">Invalid Password</span>')
            }
        });  
    </script>
       
    
</body>
</html>