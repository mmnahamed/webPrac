<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <script>

        function loadDoc(){
            var comobj = new XMLHttpRequest();

            comobj.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('show').innerHTML = this.responseText;
                }
            }

            comobj.open('GET', "AJphp.php",true);
            comobj.send();
        }


    </script>

    <h2>This is the start of the Document</h2>
    <div id="show">Let's see the Greething</div>
    <h2>This is after the greeting</h2>
    <button type="button" onclick="loadDoc()">Change the content</button>
    
</body>
</html>