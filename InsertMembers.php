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
		Members
	</title>
	
	    <link href=new1.css type="text/css" rel="stylesheet"/> 
		<meta charset="UTF-8">
		
	<style>
		h2{text-align:center}
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
		Members
	</h1>
	
	<?php
		if (!empty($_POST)): 
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con = mysql_connect("localhost","root"); //connecting to database
		if (!$con)
		  {
			die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
		  }

		mysql_select_db("riverside club", $con); //tells which database that you want to work with

		$sql="INSERT INTO members 
		VALUES
		('$_POST[MemberID]','$_POST[Name]','$_POST[DOB]','$_POST[PM]','$_POST[Email]')";

		if (!mysql_query($sql,$con)) //this executes all the code above for the sql statement
		  {
			die('Error: ' . mysql_error());
		  }
		echo "<h2>Thank you for your entry</h2>";
		mysql_close($con); //closing connection to database
		endif;
	?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<table>

			<tr>
				<td>Member ID</td>
				<td></td>
				<td></td>
				<td>Name</td>
			</tr>
			<tr>
				<td><input type="text" name="MemberID" minlength ="8" maxlength="8" autofocus required ></td>
				<td></td>
				<td></td>
				<td><input type="text" name="Name"></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td></td>
				<td></td>
				<td>Payment method</td>
			</tr>
			<tr>
				<td><input type="date" name="DOB"></td>
				<td></td>
				<td></td>					
				<td><select name="PM">
					<option value="cash">Cash</option>
					<option value="bank transfer">Bank Transfer</option>
					<option value="postal order">Postal Order</option>
					<option value="cheque">Cheque</option>
					<option value="payment by card">Payment by card</option>
				</select></td>
			</tr>
			<tr>
				<td>Email</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="email" name="Email" autocomplete="off"></td>
				<td></td>
				<td><input type="Submit" value="submit"></td>
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


