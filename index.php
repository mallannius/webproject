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
		Homepage 
	</title>

    <link href=new1.css type="text/css" rel="stylesheet"/> 
	<meta charset="UTF-8">
	<style>
		P {
		text-align:center;
		color:black;
		font-weight:bold;
		background-color:#DC143C;
		padding:15px;
		line-height: 200%;
		}
		
		#img1 {
		float: right;
		margin:10px 10px;
		}

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
		Presentation 
	</h1>
	
	<aside>
		<img id="img1" src="Image/gym.jpg"  alt="This is a picture" width="400"  height="200">
	</aside>
	
	<p>
		The riverside Club has been established since 2000.<br>
		The Sports Club offer an extensive array of sports and<br>
		fitness options(Tennis, squash, beauty rooms, Jacuzzi..etc).<br><br>
		the Sport Clubs program is to promote health, physical well being<br>		
		and the acquisition of physical skill development.
	</p>
	<br><br>
			
	<nav>
		<a href="login.php?logout=true">Logout</a>
	</nav>

		<br><br><br><br><br>
	<footer>
        Copyright &#169; 2015 Riverside Club
    </footer>

</body>
</html>

