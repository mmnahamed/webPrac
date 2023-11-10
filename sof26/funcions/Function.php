<?php 
       $name = $_GET['name'];
       $gender = $_GET['gender'];
       $Profesional = $_GET['Profesional'];
       $email = $_GET['email'];
       $subjects = $_GET['subject'];
       if ($_GET)
       echo $name; echo "<br>";
       echo $gender;echo "<br>";
       echo $Profesional;echo "<br>";
       echo $email;echo "<br>";echo "<br>";
       echo "Subjects are: <br>";
       foreach($subjects as $subject) {
              echo $subject;
              echo "<br>";
       }    
?>