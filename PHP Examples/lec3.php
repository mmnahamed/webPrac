<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lec 3</title>
  </head>
  <body>
    <?php
      $num = 5;
      print("PRE-INCREMENT : ". ++$num ."<br><br>"); //PRE-INCREMENT

      $num1 = 5;
      print("POST-INCREMENT : ". $num1++."<br><br>"); //POST-INCREMENT


      //IF Statement

      if ($num = 6) {
        echo "Number is ".$num."<br><br>";
      }

      $name = "SHAAN";
      $name1 = "AHAMED";

      if ($name == "SHAAN"){
        echo "Your name is ".$name."<br><br>";
      }
      else {
        echo "Name Unknown!";
      }

      if($name < $name1) {
        echo "SHAAN > AHAMED <br><br>";
      }
      else {
        echo "AHAMED < SHAAN <br><br>";
      }


      $i = "Banana";

      switch($i){
        case "Orange":
          echo "i is equal to Orange<br><br>";
          break;
        case "Peach":
          echo "i is equal to Peach<br><br>";
          break;
        case "Banana":
          echo "i is equal to Banana<br><br>";
          break;
        case "Apple":
          echo "Apple<br><br>";
          break;
        default:
          echo "i is equal to none<br><br>";
          break;
      }

      //SWITCH Statement

      $Grade = 0;

      echo "SWITCH Statement<br>" ;

      switch($Grade){
        case 100 >= $Grade && $Grade >= 75:
          echo "Grade is A<br><br>";
          break;
        case 75 > $Grade && $Grade >= 65:
          echo "Grade is B<br><br>";
          break;
        case 65 > $Grade && $Grade >= 55:
          echo "Grade is C<br><br>";
          break;
        case 55 > $Grade && $Grade >= 35:
          echo "Grade is S<br><br>";
          break;
        case 35 > $Grade && $Grade >= 0:
          echo "Grade is F<br><br>";
          break;
        default:
          echo "Invalid Input<br><br>";
      }

      echo "IF ELSE Statement<br>" ;

      if (100 >= $Grade && $Grade >= 75) {
        echo "Grade is A<br><br>";
      }
      elseif($Grade >= 65){
        echo "Grade is B<br><br>";
      }
      elseif($Grade >= 55){
        echo "Grade is C<br><br>";
      }
      elseif($Grade >= 35){
        echo "Grade is S<br><br>";
      }
      elseif($Grade >= 0){
        echo "Grade is F<br><br>";
      }
      elseif($Grade < 0 && $Grade > 100){
        echo "Invalid<br><br>";
      }


      //ARRAYS

      echo "Arrays<br>";

      $x = array(0, 3, "String");
      print $x[0]."<br>";
      print $x[1]."<br>";
      print $x[2]."<br>";

      // array_fill(index, number, value)
      $x = array_fill(3, 5, "new value");
      print $x[3]."<br>";

      $c = count($x);
      print "Count : " . $c."<br><br>";

      $emp["Emp1"] = "Peter";
      $emp["Emp2"] = "Robert";
      $emp["Emp3"] = "Jane";
      print_r($emp);

      echo "<br><br>";

      $std["std1"]["name"] = "Ravi";
      $std["std1"]["city"] = "Badulla";
      $std["std1"]["uni"] = "Uovt";
      $std["std2"]["name"] = "Jane";
      $std["std2"]["city"] = "Colombo";
      $std["std2"]["uni"] = "UoC";
      $std["std3"]["name"] = "Sarath";
      $std["std3"]["city"] = "Hambanthota";
      $std["std3"]["uni"] = "UoR";
      echo "<pre>";
      print_r($std);

      unset($std['std3']);

      echo "<br><br><pre>";
      print_r($std);

      echo "<br><br>Sort Array<br>";

      $flower = array("Rose", "daisy", "Orchid", "tulip", "cansas");
      sort($flower);
      print_r($flower);

      echo "<br><br>Reverse Sort Array<br>";

      rsort($flower);
      print_r($flower);

      $shop = array("rose" => "5.00", "daisy" => "4.00", "orcid" => "2.00");
      ksort($shop);
      echo "<br>ksort - Sort according to the Key<br><pre>";
      print_r($shop);
      asort($shop);
      echo "<br>asort - Sort according to the Value<br><pre>";
      print_r($shop);

      echo "<br><br>isset function<br>";

      $y = "string";

      if (isset($x)) {
        echo "The variable exists<br><br>";
      }
      else {
        echo "Variable doesnt exist<br><br>";
      }

      if (in_array("Rose", $flower)){
        echo "Available<br><br>";
      }
      else{
          echo "Not Available<br><br>";
      }

      echo "<br><br>array_search<br>";

     ?>
  </body>
</html>
