<?php
for($i=1; $i<=5; $i++){
	for($a=1; $a<=$i; $a++)
	{
	echo '@';
	}
	echo'<br>';
	
}
echo'<br>';echo'<br>';echo'<br>';
?>


<?php
//example to demonstrate star pattern-1
for($i=0; $i<5; $i++) {
for($j=0; $j<5; $j++)
{
echo '*';
}
echo '<br>';
}
?>


<?php
for ($i=0; $i < 7; $i++) 
{
	for ($j=1; $j < $i; $j++) { 
			echo "*";
	}
	echo "</br>";
}
for ($a=7; $a > 0; $a--) {
	for ($b=1; $b < $a; $b++) 
	{ 
			echo "*";
	}
	echo "</br>";
}
?>

<?php
$marks = array('marks1' => 30 , 'marks2' => 65 , 'marks3' => 52 , 'marks4' => 14 , 'marks5' => 45);
reset($marks);
arsort($marks);
$max =key($marks);
echo "$max";
echo "</br>";echo "</br>";
?>

<?php
$marks = array('marks1' => 30 , 'marks2' => 65 , 'marks3' => 52 , 'marks4' => 14 , 'marks5' => 45);
$Hight_M='60';
foreach ($marks as $index => $value) {
	if ($value>59) {
		echo "[" . $index . "] : First Division </br>";
	} 	
	elseif ($value>44) {
		echo "[" . $index . "] : Second Division </br>";
	}
	elseif ($value>32) {
		echo "[" . $index . "] : Third Division </br>";
	}
	else {
		echo "[" . $index . "] : Fail </br>";
	}
	
}
echo "</br>";echo "</br>";
?>


<?php

$rows = 4;
$cols = 3;
$num = 1;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        echo $num . " ";
        $num += $rows;
    }
    $num -= $cols * $rows - 1;
    echo "<br>";
}
echo "</br>";echo "</br>";
?>



<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 5; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 5; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
		
		echo "</br>";echo "</br>";
?>









