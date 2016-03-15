<?php
session_start();
if(!isset($_SESSION['login']) OR $_SESSION['login'] != TRUE){

header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title> 
		Equipments
	</title>

    <link href=new1.css type="text/css" rel="stylesheet"/> 
	<meta charset="UTF-8">
	
</head>

<body>
	<aside>
		<img src="Image/logo.jpg"  alt="This is a logo" width="400"  height="200" >
	</aside>
	<br><br><br><br><br>

	<nav>
		<a href="index.php">Home</a>
		<a href="insertMembers.php">Members</a>
		<a href="Members.php">Members List</a>
		<a href="Payments.php">Payments</a>
		<a href="FacilitiesSchedule.php">Facilities Schedule</a>
		<a href="Instructors.php">Instructors</a>
		<a href="SportingAssociations.php">Sporting Associations</a>
		<a href="Equipments.php">Equipments</a>

	</nav>
	<br><br>
	
	<h1 style="text-transform: uppercase"> 
		Equipments 
	</h1>
	
	<form name="form5">
		<table>

			<tr>
				<td>Equipment Code</td>
				<td></td>
				<td></td>
				<td>Equipment Name</td>
			</tr>
			<tr>
				<td><input type="text" name="equipmentcode" maxlength="7" autofocus required></td>
				<td></td>
				<td></td>
				<td><input type="text" name="equipmentname"></td>
			</tr>
			<tr>
				<td>Inspection Date</td>
				<td></td>
				<td></td>
				<td>Inspection Time</td>
			</tr>
			<tr>
				<td><input type="date" name="inspection date" required></td>	
				<td></td>
				<td></td>
				<td><input type="time" name="equipmenttime" required></td>
			</tr>
			<tr>
				<td>Instructor ID</td>
				<td></td>
				<td></td>
				<td>Report</td>
			</tr>
			<tr>
				<td><input type="text" name="instructorid" maxlength="5"></td>
				<td></td>
				<td></td>
				<td><input type="text" name="report"></td>
			</tr>
			<tr>
				<td>Report Number</td>
				<td></td>
				<td></td>
				<td>Repair Status</td>
			</tr>
			<tr>
				<td><input type="text" name="reportnumber" maxlength="7" ></td>
				<td></td>
				<td></td>
				<td><input type="text" name="repairstatus"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="Submit" value="submit" onclick="startwithE(document.form5.equipmentcode); startwithI(document.form5.instructorid); startwithR(document.form5.reportnumber)"></td>
				
				<script>
					function startwithE(inputtxt)
					{ 
					var idformat = /[E]{1}\d{6}/; 
					if(inputtxt.value.match(idformat))  
					{
					return true;  
					}  
					else  
					{  
					alert("The Equipment Code should start with uppercase E and followed by 6 digits!");  
					return false;  
					}  
					}
					function startwithI(inputtxt)
					{ 
					var idformat = /[I]{1}\d{4}/;
					if(inputtxt.value.length > 0){					
						if(inputtxt.value.match(idformat))  
						{
						return true;  
						}  
						else  
						{  
						alert("The Instructor ID should start with uppercase I and followed by 4 digits!");  
						return false;  
						} 
					}
					else{
					return true;
					}
					}
					function startwithR(inputtxt)
					{ 
					var idformat = /[R]{1}\d{6}/;
					if(inputtxt.value.length > 0){					
						if(inputtxt.value.match(idformat))  
						{
						return true;  
						}  
						else  
						{  
						alert("The Report Number should start with uppercase R and followed by 6 digits!");  
						return false;  
						} 
					}
					else{
					return true;
					}
					}
				</script>
			</tr>
			
		</table>
	</form>
	
	<nav>
		<a href="login.php?logout=true">Logout</a>
	</nav>
	
		<br><br><br><br><br>
	<footer>
		Copyright &#169; 2015 Riverside Club
    </footer>

</body>
</html>
