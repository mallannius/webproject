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
		Members List
	</title>
	
		    <link href=new1.css type="text/css" rel="stylesheet"/> 

		<meta charset="UTF-8">
	<style>
		th { color:black}
		td {font-weight: normal}
	
	</style>
	
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
		Members List
	</h1>
	
	<?php
		error_reporting(E_ALL^E_DEPRECATED);
		$con = mysql_connect("localhost","root"); //connecting to the database
		if (!$con)
		{
			die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
		}

		mysql_select_db("riverside club", $con); //tells which database that you want to work with

		$result = mysql_query("SELECT * FROM members"); //getting information from members table

		echo "<table border='5'>  
		<tr> 
		<th>Member ID</th>
		<th>Name</th>
		<th>Date of Birth</th>
		<th>Payment Method</th>
		<th>Email</th>
		</tr>";

		while($row = mysql_fetch_array($result)) //this creates a loop 
		{
			echo "<tr>";
			echo "<td>" . $row['Member ID'] . "</td>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Date of Birth'] . "</td>";
			echo "<td>" . $row['Payment Method'] . "</td>";
			echo "<td>" . $row['Email'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";

		mysql_close($con); //closing connection
	?> 
	
	<nav>
		<a href="login.php?logout=true">Logout</a>
	</nav>
	
	<br><br><br><br><br>
	<footer>
        Copyright &#169; 2015 Riverside Club
    </footer>

</body>
</html>


