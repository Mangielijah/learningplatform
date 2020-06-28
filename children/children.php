
<?php
require "../includes/db.inc.php";
session_start();
echo $password =  $_SESSION['password'];
echo $phoneNumber =  $_SESSION['phoneNumber'];
if (!isset($password)&&!isset($phoneNumber)) {
	// header("Location:index.php?error=no user");
	// exit();
}
else {
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Children</title>
</head>
<body>
	<form method="post" action="children_includes/logout.inc.php">
		<button type="submit" name="logout">Logout</button>
	</form>
<?php
$sql = "SELECT * FROM child WHERE phoneNumber = '$phoneNumber' and password ='$password'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
	$firstName = $row['firstName'];
	$lastName = $row['lastName'];
}
?>
<h1>Welcom <?php echo $firstName ." ".$lastName;?> </h1>
</body>
</html>


<?php
}
?>

