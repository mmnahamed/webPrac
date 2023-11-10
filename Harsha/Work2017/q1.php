<!DOCTYPE html>
<html>
	<body>
		<form method="post" action="q1new.php">
			
			<h1>Persanal information</h1>
				
			
			<label>Name</label>
			<input type="text" name="txtname"/>
			<br>
				
				
			<label>Gendar</label>
			<input name="rdgroupgender" value="male" type="radio" checked>
			<label>Male</label>		
			<input name="rdgroupgender" value="female" type="radio">
			<label>Female</label>
			<br>
						
			<label>Designation</label>
			<select name="selectdesignation" >
				<option value="network" selected="selected">Network Administrator</option>
				<option value="computer" >Computer Operator</option>
				<option value=" it"> IT Technician</option>
			</select>
			<br>
				
			<label>Email</label>
			<input type="email"  name="txtemail"/>
			<br>
			
				
			<label>Division</label>
			<input name="chkdivision" id="chkdivision-0" value="optssu" type="checkbox" checked="checked">
			<label for="chkdivision-0">SSU</label>
						
			<input name="chkdivision" id="chkdivision-1" value="optfinace" type="checkbox">
			<label for="chkdivision-1">Finace</label>
						
			<input name="chkdivision" id="chkdivision-2" value="optit" type="checkbox">
			<label for="chkdivision-2">IT</label>
			<br>
				
			<button type="submit" class="btn-primary btn" name="btnsubmit" style="primary" id="btnsubmit">Submit</button>
			<button type="reset" class="btn-default btn" name="btnreset" style="default" id="btnreset">Reset</button>
				
		</form>
		
		
		

	</body>
</html>
