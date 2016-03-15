<?php
session_start();
if(!isset($_SESSION['login']) OR $_SESSION['login'] != TRUE){

header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang ="en">

<head>

	<title> 
		Facilities Schedule 
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
		Facilities Schedule 
	</h1>
	
	<form name="form1">
		<table>

			<tr>
				<td>Facility name</td>
				<td></td>
				<td></td>
				<td>Date</td>
			</tr>
			<tr>
				<td><select name="Facilities" autofocus required>
					<option value="tennis1">Tennis court 1</option>
					<option value="tennis2">Tennis court 2</option>
					<option value="squash1">Squash room 1</option>
					<option value="squash2">Squash room 2</option>
					<option value="beauty1">Beauty room 1</option>
					<option value="beauty2">Beauty room 2</option>
					<option value="jacuzzi">Jacuzzi</option>
				</select></td>
				<td></td>
				<td></td>
				<td><input type="date" name="Date" required></td>
			</tr>
			<tr>
				<td>Start Time</td>
				<td></td>
				<td></td>
				<td>End Time</td>
			</tr>
			<tr>
				<td><input type="time" name="Starttime" required></td>	
				<td></td>
				<td></td>				
				<td><input type="time" name="Endtime" required></td>
			</tr>
			<tr>
				<td>Member ID</td>
				<td></td>
				<td></td>
				<td>Club ID</td>
			</tr>
			<tr>
				<td><input type="text" name="Memberid" minlength ="8" maxlength="8"></td>
				<td></td>
				<td></td>
				<td><input type="text" name="Clubid" maxlength="4"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="Submit" value="submit" onclick="checkDateAndTime(document.form1.Date,document.form1.Starttime,document.form1.Endtime ); startwithC(document.form1.Clubid)"></td>

				<script>
						function startwithC(inputtxt)
						{ 
						var idformat = /[C]{1}\d{3}/;
						if(inputtxt.value.length > 0){					
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
						else{
						return true;
						}
						}
						function checkDate(date)
						{ 
						var txt = date.value;

						var day = txt.substring(8, 10);

						var month = txt.substring(5, 7);
						var year = txt.substring(0, 4);
						  
						var theDate = new Date(year,month-1,day);

						var today = new Date();
						if(theDate>today)  
						{
						return true;  
						}  
						else  
						{  
						return false;  
						}  
						}
						function checkDateAndTime(date, start, end)
						{ 
						var txtStart = start.value;
						var txtEnd = end.value;

						if(checkDate(date) && txtStart.length>0 && txtEnd.length>0){

						var txt = date.value;
						var day = txt.substring(8, 10);

						var month = txt.substring(5, 7);
						var year = txt.substring(0, 4); 


						var hhS = txtStart.substring(0, 2);
						var mmS = txtStart.substring(3, 5);


						var hhE = txtEnd.substring(0, 2);
						var mmE = txtEnd.substring(3, 5);


						var dateStart = new Date(year,month-1,day, hhS, mmS);
						var dateEnd = new Date(year,month-1,day, hhE, mmE);

						if(dateStart<dateEnd)  
						{
						return true;  
						}  
						else  
						{  
						alert("End Time should be after Start Time!");  
						return false;  
						}  

						}
						else{
						alert("Please check the date and time you entered!");  
						return false;
						}
						}
				</script>
			
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



