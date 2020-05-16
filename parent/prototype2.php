<!DOCTYPE   html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body class="bg-primary">
        <div    class="container  bg-primary">
            <div    class="row">
                <div    class="col-sm-4">
                </div>
                <div    class="col-sm-4">
                    <div    class="jumbotron  bg-white  m-1">
                         <small>Please fill in this form to create an account for your child.</small><hr></p>
                        <form name="" method="POST"  action="prototype2.php">
                            <div    class="form-group">
                                <label  for="name"> Name:</label>
                                <input  type="text"  class="form-control" placeholder="Enter name"  name="name">
                            </div>
                        <div    class="form-group">
                            <label  for="age">  Age:</label>
                            <input  type="number"  class="form-control" placeholder="Enter Age"  name="age">
                        </div>  
                        <div  class="form-group">
                            <label  for="pwd">  Password:</label>
                            <input  type="password"  class="form-control" placeholder="Password"  name="pwd">
                        </div>
                        <div    class="form-group">
                            <label  for="pwd">  Confirm Password:</label>
                            <input  type="password"  class="form-control" placeholder="Confirm Password"  name="cfm_pwd">
                            </div>  
                        <button type="submit" name="submit" class="btn btn-primary">Create account</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">  </div>
            </div>
        </div>
    </body>
</html>

<?php

//Get  POST records
$conn=mysqli_connect('localhost', 'root', '', 'child_account');

if  ( isset ( $_POST['submit'] ) )
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $pwd = $_POST['pwd'];
    $cfm_pwd = $_POST['cfm_pwd'];
 

    if (!preg_match("/^[a-zA-Z0-9]*$/",$name)&&!preg_match("/^[a-zA-Z0-9]*$/",$age)&&!preg_match("/^[a-zA-z0-9]*$/",$password)) {
        header("Location:../prototype2.php? error=Invalid Fields");
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/",$name)) {
        header("Location:../prototype2.php? error=Invalid name");
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/",$age)) {
        header("Location:../prototype2.php? error=Invalid age");
        exit();
    }
    elseif ($pwd !== $cfm_pwd) {
        header("Location:../prototype2.php? error=Wrong password");
        exit();
    }
    else{
        $sql = "INSERT INTO 'childlist' ('Id', 'Name', 'Age', 'Password', 'ConfirmPassword') VALUES (?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				 if (!mysqli_stmt_prepare($stmt,$sql)) {
					header("Location:../prototype2.php?error=sql error");
				    exit();
				}
					else{
					$hashedpassword = password_hash($pwd, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt,"sss",$name,$age,$hashedpassword);
					mysqli_stmt_execute($stmt);
                    header("Location:../prototype2.php?signup=SignUp  Successful");
                    exit();
                }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}
}
else{
	header("Location:../prototype2.php");
    exit();
} 
?>