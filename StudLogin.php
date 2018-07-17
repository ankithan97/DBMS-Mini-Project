<?php
require "includes/common.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Log in Page</title>
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
					<div class="panel panel-primary" style="margin-top:100px">
						<div class="panel-heading">
							LOGIN
						</div>
						<div class="panel-body">
							<p class="text-warning">Login to view information</p>
							<form method="post" action="StudLogin_submit.php">
								<div class="form-group">
									<input type="number"  required="required" name="Stud_ID" placeholder="Student ID" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="password" required="required"  name="Password" placeholder="Password" class="form-control input-lg">
								</div>
								<button type="submit" class="btn btn-primary btn-lg">Login</button>
							</form>
						</div>
					</div>
				</div>
				</center>
			</div>
			
		</div>        	
    	</body>
</html>
