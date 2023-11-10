<html>
<head></head>
<body>
  <?php
    date_default_timezone_set("Asia/Colombo");
    echo "<h2>Hello World!</h2>";
    print("<font color='blue'> Welcome to the world </font><br><br>");
    echo "Today is ".date("Y-m-d H:i:s")."<br><br>";
    echo "Today is ".date("l")."<br><br>";

    $var = "This is a variable";
    echo $var."<br>";

    $num = 121;
    echo $num."<br>";

    $decimal_num = 140.01;
    echo $decimal_num."<br><br>";

    $num1 = $decimal_num - $num;
    $num2 = $decimal_num * $num;

    echo $num1."<br>";
    echo $num2."<br><br>";

    $var1 = "saman \n";
    echo $var1."<br><br>";

    $var2 = "\"hello world!\"";
    echo $var2."<br><br>";

    $var3 = '\"hello world!\"';
    echo $var3."<br><br>";

    $var4 = "SHAAN";
    echo "this is a variable value :$var4.<br><br>";

    echo strlen($var4)."<br><br>";

    $var5 = "I am\tAHAMED";
    echo str_replace("AHAMED", "Naveed", $var5)."<br><br>";

    $var6 = "Web Programming";
    $var7 = "PHP Tutorial";

    echo "$var6-$var7"."<br><br>";

    echo strtolower($var4)."<br><br>";

    echo strtoupper($var1)."<br><br>";

    echo ucfirst($var1)."<br><br>";

    echo trim($var5)."<br><br>";

    define("CONSTANT_VARIABLE", "CONSTANT STRING");
    echo CONSTANT_VARIABLE."<br><br>";

    define("WATER_BOILING_TEMP", 100);
    echo "Water boiling temp ".WATER_BOILING_TEMP."<br><br>";

    $str1 = "SHAAN";
    $str2 = "Hello, im $str1, how are you?";

    echo $str2."<br>";
    echo strlen($str2)."<br><br>";





  ?>
</body>
</html>
