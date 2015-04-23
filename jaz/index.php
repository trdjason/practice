<?php
require_once 'connect.php';
require_once 'function.php';


$fname="";
$lname="";
$mname="";
$age="";
$msg="";

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['mname']) && isset($_POST['age']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mname=$_POST['mname'];
	$age=$_POST['age'];


	insert_student($fname, $lname, $mname, $age);
	$msg="Registered Successfully";
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>	
	<div class="header">
		<div class="head1">
			<h1 style="color:red">MySite</h1>
		</div>
		<div class="login">
			<label><strong>Username</strong></label>&nbsp;
			<input type="text" name ="uname" placeholder="Username"  required>
			<label><strong>Password</strong></label>&nbsp;
			<input type="text" name ="pword" placeholder="Password"  required>
			<input type="submit" name ="login" value="Login">
		</div>
	</div>
	<div class="body">
		<form class="signup" action="index.php" method="POST">
			<strong style="color:red"><?php echo $msg;?></strong><br><br>
			<h1>Sign Up</h1>
			<label>First Name:</label></br>
			<input type="text" name ="fname" placeholder="First Name" required><br><br>
			<label>Last Name: </label></br>
			<input type="text" name ="lname" placeholder="Last Name" required><br><br>
			<label>Middle Name:   </label></br>
			<input type="text" name ="mname" placeholder="Middle Name" required><br><br>
			<label>Age:      </label></br>
			<input type="text" name ="age" placeholder="Age" required><br><br>
			<input type="submit" name ="submit" value="Submit">
			<input type="reset" name ="cancel" value="Cancel"><br><br>
			<a href="">Forgot your password?</a>
		</form>
	</div>
</body>
</html>
