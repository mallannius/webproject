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
		Instructors 
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
		Instructors 
	</h1>
		<form name="form4">
		<table>

			<tr>
				<td>Booking Reference</td>
				<td></td>
				<td></td>
				<td>Instructor ID</td>
			</tr>
			<tr>
				<td><input type="text" name="Bookingreferencenumber" maxlength="10" autofocus required></td>
				<td></td>
				<td></td>
				<td><input type="text" name="Instructorid" maxlength="5" required></td>
			</tr>
			<tr>
				<td>Instructor Name</td>
				<td></td>
				<td></td>
				<td>Facility Name</td>
			</tr>
			<tr>
				<td><input type="text" name="Instructorname"></td>	
				<td></td>
				<td></td>
				<td><input type="text" name="Facilityname"></td>
			</tr>
			<tr>
				<td>Member ID</td>
				<td></td>
				<td></td>
				<td>Date</td>
			</tr>
			<tr>
				<td><input type="text" name="Memberid" minlength ="8" maxlength="8"></td>
				<td></td>
				<td></td>
				<td><input type="date" name="Date"></td>
			</tr>
			<tr>
				<td>Start Time</td>
				<td></td>
				<td></td>
				<td>End Time</td>
			</tr>
			<tr>
				<td><input type="time" name="Starttime"></td>
				<td></td>
				<td></td>
				<td><input type="time" name="Endtime"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="Submit" value="submit" onclick="checkDateAndTime(document.form4.Date,document.form4.Starttime,document.form4.Endtime );
								startwithB(document.form4.Bookingreferencenumber); startwithI(document.form4.Instructorid)"</td>
				
				<script>
					function startwithB(inputtxt)
					{ 
					var idformat = /[B]{1}\d{9}/; 
					if(inputtxt.value.match(idformat))  
					{
					return true;  
					}  
					else  
					{  
					alert("The Booking Reference Number should start with uppercase B and followed by 9 digits!");  
					return false;  
					}  
					}
					function startwithI(inputtxt)
					{ 
					var idformat = /[I]{1}\d{4}/; 
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

