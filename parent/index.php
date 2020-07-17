<!DOCTYPE html>
<html>
<head>
	<title>
		parentlogin
	</title>
	<?php include '../includes/styles_js_importer.php'; ?>
	<link rel="stylesheet" type="text/css" href="parentLogin.css">
</head>
<body class="bg-primary">

	<div class="row">
		
		<div class="col-sm-2"></div>
		<div class="col-sm-2"></div>
		<div class="col-sm-2"></div>
		<div class="col-sm-2">
			<p><br></p>
		</div>
		<div class="col-sm-2"></div>
	</div>


<br><br>

<center><p id="title"><b>PARENT LOGIN FORM</b></p></center>
	<div class="row">
		
		<div class="col-sm-3"></div>
		<div class="col-sm-3">
			<img src="../images/logo.png">
		</div>
		
		<div class="col-sm-3" id="myForm">
<form method="post" action="includes/sign_in.inc.php"> <br><br>
  <div class="form-group">
 <div class="form-group">
    <input type="email" class="form-control" name="email" id="email" placeholder="input email" required="">
  </div>
  <div class="form-group">
<br>
    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="input password" required="">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <br>
  <button type="submit" name="signin" class="btn btn-primary">Submit</button>
</form> 
		</div>



		<div class="col-sm-3"></div>

	</div>


<br><br>

<div class="row">
		
		<div class="col-sm-4"></div>
	</div>

</body>
</html>