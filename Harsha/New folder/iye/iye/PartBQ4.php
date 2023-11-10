<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="#" method="post">
		<table border="1">
			<tr>
				<th colspan="12">
					<h3>Student Information</h3>
				</th>
			</tr>
			<tr>
				<td colspan="2">
					<label>Name</label>
				</td>
				<td colspan="10">
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td colspan="2">Age</td>
				<td colspan="10">
					<select name="age">
						<option name="age" value="20-22">20-22</option>
						<option name="age" value="23-25">23-25</option>
						<option name="age" value="26-28">26-28</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label>Gender</label>
				</td>
				<td colspan="10">
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label>Comment</label>
				</td>
				<td colspan="10">
					<input type="text" name="comment">
				</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="10">
					<input type="submit" name="submit">
					<input type="reset" name="">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

if(isset($_POST['submit']))

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$comment = $_POST['comment'];
	$age=$_POST['age'];



	echo "Name :".$name."<br>";
	echo "Gender :".$gender."<br>";
	echo "Age :".$age."<br>";
	echo "Comment :".$comment;

	?>