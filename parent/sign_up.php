<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<?php 
       if (isset($_GET['error'])) {
       	?>
       	<h1><?php echo $_GET['error']?></h1>
       	<?php
       }
         if (isset($_GET['signup'])) {
       	?>
       	<h1><?php echo $_GET['signup']?></h1>
       	<?php
       }
	?>
<form method="post" action="parent_includes/sign_up.inc.php">
	<input type="text" name="firstName" placeholder="First Name" required><br><br>
	<input type="text" name="lastName" placeholder="Last Name" required><br><br>
	<input type="email" name="email" placeholder="Email" required><br><br>
	<input type="text" name="phoneNumber" placeholder=" PhoneNumber" required><br><br>
	<input type="password" name="pwd" placeholder="Password" required><br><br>
	<input type="password" name="pwd2" placeholder="Confirm Password" required><br><br>
	<button type="submit" name="signup">Register</button>
</form><br>
<a href="index.php">Sign In</a>
</body>
</html>