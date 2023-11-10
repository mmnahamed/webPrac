<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <label for="text"> Enter Name</label>
    <input type="text" name="text" id="text">
    <span id="msg"></span>


    <script>
        $('#text').focusout(function(e){
            var val = $(this).val();
            // var pattern = /^[a-z][0-9]+(AB)$/;
            // var pattern = /^[a-z][a-z]{0-3}$/;
            var pattern = /^[a-z][a-z]{0-3}$/;
            // var pattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+.edu$/;

            if(pattern.test(val)){
                $('#msg').html('<span style="color:#00CC00"> Valid Statement</span>');
            }else{
                $('#msg').html('<span style="color:#FF0000"> Invalid Statement</span>');
            }
        });
    </script>
    
</body>
</html>