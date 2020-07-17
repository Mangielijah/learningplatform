<!DOCTYPE   html>
    <head>
        <?php include '../includes/styles_js_importer.php'; ?>
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
        <div    class="container-fluid  bg-primary">
            <div    class="row">
                <div    class="col-sm-4">
                </div>
                <div    class="col-sm-4">
                    <div    class="jumbotron  bg-white">
                        <strong>
                            Sign Up
                        </strong><br>
                         <small>Please fill in this form to create an account!</small><hr>
                        <form method="post"  action="includes/sign_up.inc.php">
                            <div  class="row">
                            <div    class="col-sm-6">
                            <div    class="form-group">
                                <label  for="first_name">  First name:</label>
                                <input  type="name" name="firstName" class="form-control" placeholder="First name"  id="first_name">
                            </div> </div>
                            <div  class="col-sm-6"> 
                            <div    class="form-group">
                                <label  for="last_name">  Last  name:</label>
                                <input  type="name" name="lastName" class="form-control" placeholder="Last name"  id="email">
                            </div></div></div>
                        <div    class="form-group">
                            <label  for="email">  Email address:</label>
                            <input  type="email" name="email" class="form-control" placeholder="Enter email"  id="email">
                        </div>  
                        <div    class="form-group">
                            <label  for="number">  Phone number:</label>
                            <input  type="text" name="phoneNumber" class="form-control" placeholder="Enter phone number"  id="phone number">
                        </div>  
                        <div  class="form-group">
                            <label  for="pwd">  Password:</label>
                            <input  type="password" name="pwd" class="form-control" placeholder="Password"  id="pwd">
                        </div>
                        <div    class="form-group">
                            <label  for="pwd">  Confirm Password:</label>
                            <input  type="password" name="pwd2" class="form-control" placeholder="Confirm Password"  id="pwd">
                            </div>  
                        <div    class="form-group   form-check">
                            <label class="form-check-label">
                                <input  class="form-check-input"  type="checkbox">  I accept the <a href="#"> Terms of Use </a> &  <a  href="#">Privacy  Policy.</a> 
                            </label>
                        </div>
                        <button type="submit" id="" name="signup" class="btn btn-primary">Sign Up</button>
                        </form>
                    </div>
                        <p  style="color:white">Already have an account?<a href="#" style="color:white"><u>Login here</u></a>
                        </p>
                </div>
                <div class="col-sm-4">  </div>
            </div>
        </div>
    </body>
</html>