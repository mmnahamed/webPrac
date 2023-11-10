<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h2>2017 part A 04</h2>

   <?php
   $markarry = array( "marks1" => 30,"marks2" => 65,"marks3" => 52,"marks4" => 14, "marks5" => 45);

   $high=$markarry['marks1'];

   for($x=count($markarry);$x>0;$x--)
   {
       $count="marks".$x;
       if($markarry[$count]>$high)
            $high=$markarry[$count];
   }
   echo $high;


    for($x=count($markarry);$x>0;$x--)
    {
        $count="marks".$x;
        if($markarry[$count]>=45){

            echo $count." has first division";
            echo"</br>";
        }
        elseif($markarry[$count] > 45)
        {
            echo $count." has second division";
            echo"</br>";
        }
        elseif($markarry[$count]>33)
        {
            echo $count." has third division";
            echo"</br>";
        }
        elseif(33>$markarry[$count])
        {
            echo $count." has faild";
            echo"</br>";
        }
    }


    ?> 
</body>
</html>