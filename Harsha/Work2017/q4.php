<?php
$marks = array(
  "marks1" => 30,
  "marks2" => 65,
  "marks3" => 52,
  "marks4" => 14,
  "marks5" => 45
);

foreach ($marks as $value) {
 if ($value >= 60) {
    echo "Marks = $value : First Division <br>";
  } elseif ($value >= 45 && $value <= 59) {
    echo "Marks = $value : Second Division <br>";
  } elseif ($value >= 33 && $value <= 44) {
    echo "Marks = $value : Third Division <br>";
  } else {
    echo "Marks = $value : Fail<br>";
  }
}
?>