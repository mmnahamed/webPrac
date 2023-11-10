<?php
    $size = 5;
    
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = 1; $i <= $size - 1; $i++) {
        for ($j = 0; $j < $size - $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    $x = 1;
    echo "<table border='1'><tr>";
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            echo "<td> $x x 6 = " . $x * 6 . " </td>";
            $x++;
        }
        echo "</tr><br>";
    }


?>