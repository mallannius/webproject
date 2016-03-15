 
<?php
 
	session_start();

	// ***************************************** //
	// **********	DECLARE VARIABLES  ********** //
	// ***************************************** //
	 
		$username = 'admin';
		$password = 'admin';

	// ************************************ //
	// **********	USER LOGOUT  ********** //
	// ************************************ //
	 
	if(isset($_GET['logout']))
	{
		unset($_SESSION['login']);
	}
	 
	 
	// *********************************************** //
	// **********	USER IS LOGGED IN	********** //
	// *********************************************** //
	 
	if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {

	?>
 
		<p>Hello <?php echo $username; ?>, you have successfully logged in!</p>
		<a href="?logout=true">Logout?</a>
 
<?php
	header("Location: ./index.php");
}
else if (isset($_POST['submit'])) {
 
	if ($_POST['username'] == $username && $_POST['password'] == $password){
	
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOG-IN SESSION
		$_SESSION["login"] = TRUE;
		header("Location: ./index.php");
 
	} else {
 
		// DISPLAY FORM WITH ERROR
		display_login_form('<h2>Username or password is invalid</h2>');
 
	}
}	
 
 // *********************************************** //
// **********	SHOW THE LOG-IN FORM	********** //
// *********************************************** //
 
else { 
 
	display_login_form('');
 
}

function display_login_form($msg){ ?>

<!DOCTYPE html>
<html lang="en">

<head>
	
	<title> 
		Login 
	</title>

    <link href=new1.css type="text/css" rel="stylesheet"/> 
	<meta charset="UTF-8">
	
	<style>
		form{ 
		text-align:center;
			font-weight: bold;
			}
		h2{
			   text-align:center;

			}


	</style>

</head>

<body>
	<aside>
		<img src="Image/logo.jpg"  alt="This is a logo" width="400"  height="200" >
	</aside>
	<br><br>
	<?php echo "$msg" ;?>
	<br><br><br>

	
	<h1 style="text-transform: uppercase"> 
		Login 
	</h1>
	
	
	<form class="pure-form"  method="POST" name="login">
		<fieldset>
			Username:<br>
			<input type="text" name="username" required><br><br>
			Password:<br>
			<input name="password" type="password" id="password" required><br><br>
			<button name="submit" type="submit" class="pure-button pure-button-primary">Confirm</button>
			</fieldset>
	</form>


		<br><br><br><br><br>
	<footer>
        Copyright &#169; 2015 Riverside Club
    </footer>

</body>
</html>
<?php } ?>