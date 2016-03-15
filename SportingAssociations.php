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
		Sporting Associations 
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
		Sporting Associations 
	</h1>
		<form name="form1">
		<table>

			<tr>
				<td>Club ID</td>
				<td></td>
				<td></td>
				<td>Club Name</td>
			</tr>
			<tr>
				<td><input type="text" name="Clubid" maxlength="4" autofocus required></td>
				<td></td>
				<td></td>
				<td><input type="text" name="Clubname"></td>
			</tr>
			<tr>
				<td>Contact Details</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="text" name="Contactdetails"></td>	
				<td></td>
				<td><input type="Submit" value="submit" onclick="startwithC(document.form1.Clubid)"></td>
				
				<script>
					function startwithC(inputtxt)
					{ 
					var idformat = /[C]{1}\d{3}/; 
					if(inputtxt.value.match(idformat))  
					{
					return true;  
					}  
					else  
					{  
					alert("The Club ID should start with uppercase C and followed by 3 digits!");  
					return false;  
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
