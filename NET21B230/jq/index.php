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
    <script>
        $(document).ready(function () {
            
            $('button').click(function () { 
                $('#my1').addClass('changeCol')
                $('.my1').hide();
                
            });
        });
    </script>


</head>
<body>

<h1 class="my1">This is a header</h1>
<p class="my1">This is a paragraph to change color</p>
<p class="my1">This is another paragraph</p>
<p id="my1">This is 3rd paragraph</p>
<button>Click me</button>
    
</body>
</html>