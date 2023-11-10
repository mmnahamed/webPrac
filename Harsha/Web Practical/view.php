<?php

$con=mysqli_connect("localhost", "root", "", "office");


$query= "select * from netlink"; 
$result = mysqli_query($con,$query);

 
echo"<table border='1' width='100%'>
		<tr>
		<th width='5%'>id</th>
		<th width='15%'>name</th>
		<th width='15%'>email</th>
		<th width='15%'>phone</th>
		<th width='20%'>subject</th>
		<th width='20%'>massege</th>
		</tr>";

		while($row = mysqli_fetch_array($result)){
			echo"<tr>";
			echo"<td width='5%'>".$row['id']."</td>";
			echo"<td width='25%'>".$row['name']."</td>";
			echo"<td width='20%'>".$row['email']."</td>";
			echo"<td width='20%'>".$row['phone']."</td>";
			echo"<td width='20%'>".$row['subject']."</td>";
			echo"<td width='20%'>".$row['massege']."</td>";
			echo"</tr>"; 					
	}
echo "</table>";



echo"<BR><BR>DELERE HRAR :-<form method='get' action='delete.php'>
<input type='submit' value='Delete' />
<input type='text' name='id' />
</form>";	



echo"<BR><BR>UPDATE HERE :-<form name = 'form' method = 'GET' ACTION = 'update.php' form align='center'><fieldset>

						<div class='lable'>ID</div>
						<input type='text' name='id' id='id' >

				
						<div class='lable'>Name</div>
						<input type='text'  name='name'>
					
						<div class='lable'>Email</div>
						<input type='text'  name='email' id='email' >
				
						<div class='lable'>Phone</div>
						<input type='text'  name='phone'>
				


						<div class='lable'>Subject</div>
						<input type='text' name='subject'>
				


				
						<div class='lable'>Your Massege</div>
						<textarea rows='6' name='message'></textarea>
						<br>
						<br>


				<input name='btn_submit' type='submit' value='Submit'  class='btn' /></fieldset>
					
		</form>"
?>