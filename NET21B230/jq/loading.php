<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Library</title>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


    <style>

    </style>

</head>
<body>


<div class="panel">
    <p>Because time is valuble, we deliver quick and easy learning</p>
    <p>At W3cschool, you can study everything you nedd to learn, in an accessivle adn handly format</p>
</div>

<p class="flip">Hide Panel</p>

<div id="toggleText1"> This is another paragraph  </div>
<div id="toggleTex2"> This is  now 1</div>
    <span id="hdVal" style="display: none;">0</span>
<button id="toogle">Click me</button>

<script>
    $('.flip').click(function(){
        $('.panel').slideUp('slow')
    });

    $('#toogle').click(function (){
        let val =  $('#hdVal').text();
        if(val == 0){
            $('#toggleText1').hide()
            $(this).text('Now 0');
            $('#hdVal').text('1');
        }else{
            $('#toggleTex2').hide()
            $(this).text('Now 1');
        }
    })
</script>
    
</body>
</html>