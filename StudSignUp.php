<?php
require "includes/common.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Sign Up Page</title>
        	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

       		<!--jQuery library--> 
        	<script src="bootstrap/js/jquery.min.js"></script>

        	<!--Latest compiled and minified JavaScript--> 
        	<script src="bootstrap/js/bootstrap.min.js"></script>
        	<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
    	<body>
        	<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
					<span class="icon-bar"><</span>
					<span class="icon-bar"><</span>
					</button>
					<a href="index.php" class="navbar-brand">Course Information</a>
				</div>
		
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<center>
				<div class="col-xs-6 col-xs-offset-3">
					<div class="panel panel-default" style="margin-top:100px">
						<div class="panel-heading ">
							<h1>SIGN UP</h1>
						</div>
						<div class="panel-body">
							<form method="post" action="StudSignUp_script.php">
								<div class="form-group">
									<input type="text" required="required"  name="FName" placeholder="First Name" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="text"  required="required" name="LName" placeholder="Last Name" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number"  required="required" name="Sem" placeholder="Semester" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required"  name="Dept_ID" placeholder="Department ID" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="text"  required="required" name="Email" placeholder="Email" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required"  name="Phone" placeholder="Phone number" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="text" required="required"  name="Address" placeholder="Address" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="password" required="required"  name="Password" placeholder="Password" class="form-control input-lg">
								</div>
								<button type="submit" class="btn btn-primary btn-lg">Submit</button>
							</form>
						</div>
					</div>
				</div>
				</center>
			</div>
		</div>        	
    	</body>
</html>
