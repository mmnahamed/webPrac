<html>
    <head>
    <?php 
        function addint($a,$b){
            return $a+$b;
        }
        ?>
        <?php 
        function my_function($myname){
            return "hello there $myname";
        }
    
        ?>

    </head>
    <body>

        <?php 
        echo my_function("hashi")."<br>";
        echo "addition of 7 and 56 = ".addint(7,56)." <br>";
        echo "addition of 156 and 789 = ".addint(156,789)."<br>";
        ?>

<br><br>

       <?php 
       $text = "Hey I'm in a page";
       echo "This is a web page";
       echo "<br>";
       echo $text. "<br>";

       $a=3;
       function Add(){
        $b=2;
        echo "Variable a is: ".$a.'<br>';
        echo "Variable b is: ".$b.'<br>';
       }

       Add();
       echo "Variable a is: ".$a.'<br>';
       echo "Variable b is: ".$b.'<br>';
    ?>
<br><br>
    
<?php 
       function increment(){
        static $a = 0;
        echo $a. "<br>";
        $a++;
       }
       increment();
       increment();
       increment();
        ?>  

</body>
</html>