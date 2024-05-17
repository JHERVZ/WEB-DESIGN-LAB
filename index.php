<html> 
<head></head>
<body>
<form action="code.php" method="post">
<table>
<!--r1-->
<tr>
<td>Student ID</td>
<td><input type="text" name="sid"></td>
</tr>
<!--r2-->
<tr>
<td>Student Name</td>
<td><input type="text" name="sname"></td>
</tr>
<!--r3-->
<tr>
<td>College</td>
<td><select name="col">
	<option value="COS">College of Science</option>
	<option value="COE">College of Engineering</option>
	<option value="COA">College of Architecture</option>
	</select>
</td>
</tr>
<!--r4-->
<tr>
<td>Department</td>
<td><select name="dept">
	<option value="IT">IT/IS</option>
	<option value="CS">Computer Science</option>
	<option value="CE">Civil Engineering</option>
	<option value="CpE">Computer Engineering</option>
	</select>
</td>
</tr>
<!--r5-->
<tr>
<td>Year Level</td>
<td><select name="yrlvl">
	<option value="1st">First Year</option>
	<option value="2nd">Second Year</option>
	<option value="3rd">Third Year</option>
	<option value="4th">Fourth Year</option>
	</select>
</td>
</tr>
<!--r6-->
<tr>
<td>Gender</td>
<td>
	<input type="radio" name="gender" value="F">Female
	<input type="radio" name="gender" value="M">Male
	</input>
</td>
</tr>
<!--r7-->
<tr>
<td>Number of Units</td>
<td>
	<input type="number" name="num_units"?</td>	
</tr>
<!--r8-->
<tr>
<td>Rate per Unit</td>
<td>
	<input type="number" name="rate"?</td>	
</tr>
<!--r9-->
<tr>
<td colspan="2" align="center">
	<input type="submit" name="submit" value = "REGISTER">
	<input type="reset" name="reset" value = "CANCEL">
	</td>
</tr>
</body>
</html>