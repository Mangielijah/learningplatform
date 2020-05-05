<?php

 require "../../includes/db.inc.php";
if (isset($_POST['signin'])) {


    $phoneNumber = $_POST['phoneNumber'];
   $pwd = $_POST['pwd'];

echo    $hashedpassword = password_hash($pwd, PASSWORD_DEFAULT);

    
        $sql = "SELECT * FROM children WHERE phoneNumber = ? and  password = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location:../index.php?error=sql error");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss",$phoneNumber,$hashedpassword);
            mysqli_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
           
            
            while ($row = mysqli_fetch_assoc($result)) {
                $passwordCheck = password_verify($pwd,$row['password']);

                if ($passwordCheck == false) {
                    header("Location:../index.php?error=Incorrect Password");
                    exit();
                }
                elseif($passwordCheck == true){
                    
                     session_start();

                    $_SESSION['phoneNumber'] = $row['phoneNumber'];
                    $_SESSION['password'] = $row['password']; 
                    
                    header("Location:../children.php");
                    exit();
                }
                else{
                    header("Location:../index.php");
                    exit();
                }
            }
        }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
     header("Location:../index.php");
     exit();
}