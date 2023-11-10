<html>
    <head></head>
    <body>
        <?php 
        $variable = 'printing out a variable here';
        echo $variable."<br>";

        $num=100;
        echo $num;
        echo"<br>";

        $decimal_number=100.01;
        printf("%1f",$decimal_number);
        echo"<br>";


        $_multi=$num*$decimal_number;
        printf("%1f",$_multi);
        echo"<br>";

        $_divide=$num/$decimal_number;
        printf("%1f",$_divide);
        
        ?>
        <br>
        <br>

        <?php 
        $str1="Hello , I am name, how are you?";
        $str2="Gamini";

        $str3= str_replace(", I am name",$str2,$str1);
        echo $str3;
        echo"<br>";
        echo strlen($str3);
        ?>

        <br>
        <br>

        <?php 
        $str1="hello";
        $str2="WORLD";

        echo strtoupper($str1); 
        echo"<br>";
        echo strtolower($str2);
        ?>

        <br>
        <br>

        <?php 
        $str1="hello world";
        echo ucfirst($str1); 
        ?>

        <br>
        <br>

        <?php 
        $str1=" hello   world";
        echo trim($str1); 
        ?>

        <br>
        <br>

        <?php 
        $str1="Geetha is 45 years old, his father is 90 years old";
        preg_match_all('!\d+!', $str1, $matches);
        $val1=$matches[0][0];
        $val2=$matches[0][1];
        print("Age of Geetha : ".$val1); 
        echo"<br>";
        print("Age of Father : ".$val2); 
        ?>

    </body>
</html>