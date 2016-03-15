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
		Payments 
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
		Payments 
	</h1>
		<form name="form2">
		<table>

			<tr>
				<td>Payment Reference</td>
				<td></td>
				<td>Member ID</td>
			</tr>
			<tr>
				<td><input type="text" name="Paymentreference" maxlength="8" autofocus required></td>
				<td></td>
				<td><input type="text" name="Memberid" minlength ="8" maxlength="8"></td>
			</tr>
			<tr>
				<td>Club ID</td>
				<td></td>
				<td>Payment method</td>
			</tr>
			<tr>
				<td><input type="text" name="Clubid" maxlength="4" ></td>	
				<td></td>
				<td><select name="PaymentMethod">
					<option value="tennis1">Cash</option>
					<option value="tennis">Bank Transfer</option>
					<option value="squash1">Postal Order</option>
					<option value="squash2">Cheque</option>
					<option value="beauty1">Payment by card</option>
				</select></td>
			</tr>
			<tr>
				<td>Amount</td>
				<td></td>
				<td>Payment Date</td>
			</tr>
			<tr>
				<td><input type="text" name="Amount"></td>
				<td></td>
				<td><input type="date" name="paymentdate"></td>
			</tr>
			<tr>
				<td>Annual Membership Renewal Date</td>
			</tr>
			<tr>
				<td><input type="date" name="Annualmembershiprenewaldate" size="35"></td>
				<td></td>
				<td><input type="Submit" value="submit" onclick="startwithP(document.form2.Paymentreference); startwithC(document.form2.Clubid)"></td>
				
				<script>
					function startwithP(inputtxt)
					{ 
					var idformat = /[P]{1}\d{7}/; 
					if(inputtxt.value.match(idformat))  
					{
					return true;  
					}  
					else  
					{  
					alert("The Payment reference should start with uppercase P and followed by 7 digits!");  
					return false;  
					}  
					}
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





