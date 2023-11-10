<html>
    <head></head>
    <body>
        <?php 
        $num=5;
        print "num is : " .++$num . "<br>";

        $var=5;
        print "var is : " . $var++ . "<br>";
        print "$var is : ".$var++;

        ?>

<br> <br>

<!-- if else -->

        <?php 

        $name ="Riyal";
        if($name=="Riya")
        {
        echo "your name is Riyal <br>";
        } 
        else
        {
        echo "Your name is $name<br>";    
        }
        echo "Welcome to my counry";
        ?>

<br> <br>

        <?php 

        $a="orange";
        $b="applee";
        if($a>$b)
        {
        echo "orange is grater than apple ";
        } 
        else
        {
        echo "apple is grater than orange";    
        }
        ?>

<br> <br>

        <?php 
         $marks=80;
         
        if ($marks>80){
            echo "A";
        }
        elseif($marks>70){
            echo "B";
        }

        elseif($marks>60){
            echo "C";
        }
        else{
            echo "fail";
        }

        ?>
        
<!-- if else -->

<br> <br>

<!-- Switch case -->

        <?php 
        $i="orange";
        switch($i){
            case(mango):
                echo "i equals 0";
                break;
            case (apple):
                echo "i equals 1";
                break;
            case(orange):
                echo "i equals 2";
                break;    
        }
        ?>

<!-- Switch case -->

<br> <br>

<!-- array -->

        <?php 
       $employee_title["peter"]="accountant";
       $employee_title["jane"]="manager";
       $employee_title["menna"]="receptionist";
       print_r($employee_title);

       $student["student1"]["name"]="Raxi";
       $student["student1"]["address"]="Malabe";
       echo"<br>";
       echo"<br>";

       echo $student["student1"]["name"]. " lives in ".$student["student1"]["address"];
       echo "<pre>";
       print_r($student);
     
        ?>

<br> <br>

        <?php 
        $flower=array("rose","daisy","orchid","tulpi","canas");
        sort($flower);

        for($i=0;$i<=4;$i++)
        echo $flower[$i]."<br>";

        ?>

        <?php 
        $shop=array("rose"=>"5.00","daisy"=>"4.00","orchid"=>"2.00");
        asort($shop);

        foreach($shop as $key=>$value)
        echo $key ." costs ".$value." dollars<br>";

        ?>

        <?php 
        $shop=array("rose"=>"5.00","daisy"=>"4.00","orchid"=>"2.00");
        ksort($shop);

        foreach($shop as $key=>$value)
        echo $key ." costs ".$value." dollars<br>";

        ?>

        <?php 
        $x;
        if(isset($x)){
            echo "the varaible exists";
        } else{
            echo "variable dose not exists";
        }

        ?>

<!-- array -->

</body>
</html>