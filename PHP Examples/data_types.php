<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
      $_int1 = 1234; //decimal
      $_int1 = -1234;//negative
      $_int1 = o234;//Octal
      $_int1 = ox1A;//HexaDecimal

      $_float = 1.234;
      $_float = 1.2e3;
      $_float = 7E-10;

      $_str1 = "foo";//single quotes
      $_str2 = 'foo';//double quates

      $test = "Im 25 years old";
      $test1 = (int) $test;

      $test2 = filter_var($test, FILTER_SANITIZE_NUMBER_INT);

      echo $test2."<br><br>";

      preg_match_all('/[0-9]+/', $test, $matches);
      $val1 = $matches[0][0];
      $val2 = $matches[0][1];
      echo $val1."<br>";
      echo $val2."<br>";

      $test3 = "123";//string to int
      echo (int)$test3."<br><br>";

      $test4 = 12341532;//int to string
      echo (string)$test4."<br><br>";

      $_arr = array(0,"shaan", 2, 3, "foo");
      $_arr1 = array("foo" => "bar", 12 => true);
      echo $_arr[1]."<br><br>";
      echo $_arr[4]."<br><br>";
      echo $_arr1[12]."<br><br>";
      echo $_arr1["foo"]."<br><br>";
    ?>
  </body>
</html>
