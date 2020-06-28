<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php 
       if (isset($_GET['error'])) {
       	?>
       	<h1><?php echo $_GET['error']?></h1>
       	<?php
       }
	?>
<form method="post" action="children_includes/sign_in.inc.php">
	<input type="text" name="phoneNumber" placeholder="Enter PhoneNumber" required><br><br>
	<input type="password" name="pwd" placeholder="Enter Password" required><br><br>
	<button type="submit" name="signin">Login</button>
</form>
</body>
</html>
