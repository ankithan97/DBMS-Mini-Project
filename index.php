<?php
require "includes/common.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Index Page</title>
        	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

       		<!--jQuery library--> 
        	<script src="bootstrap/js/jquery.min.js"></script>

        	<!--Latest compiled and minified JavaScript--> 
        	<script src="bootstrap/js/bootstrap.min.js"></script>
        	<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<style>
		body {
  			background: url(image7.jpg) no-repeat;
  			background-size: 100%;
		}
	</style>
    	<body>
        	<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
						<span class="icon-bar"><</span>
						<span class="icon-bar"><</span>
					</button>
					<a href="#" class="navbar-brand">Course Information</a>
				</div>
				<div class="collapse navbar-collapse" id="mynav">
					<ul class="nav navbar-nav navbar-right">
				
						 <li class="dropdown">
       		 				 	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Log in
        						<span class="caret"></span></a>
       							<ul class="dropdown-menu">
          							<li><a href="StudLogin.php">Students(Log in)</a></li>
          							<li><a href="InstLogin.php">Instructors(Log in)</a></li>
        						</ul>
      						 </li>

						<li class="dropdown">
       		 				 	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Sign Up
        						<span class="caret"></span></a>
       							<ul class="dropdown-menu">
          							<li><a href="StudSignUp.php">Students(Sign Up)</a></li>
          							<li><a href="InstSignUp.php">Instructors(Sign Up)</a></li>
        						</ul>
      						 </li>
					</ul>
				</div>
			 </div>
		</nav>
		<div class="container" style="margin-top:170px">
			<center>
				<div class="col-xs-6 col-xs-offset-3" style="background-color:rgba(0,0,0,0.7) ">
					<ul style="list-style-type:none ">
						<li style="text-decoration: none"><h2 style="color:white">Course Information Management System</h2></li>
						<li style="text-decoration: none"><h2 style="color:white">Ankitha N</h2></li>
						<li style="text-decoration: none"><h2 style="color:white">1PE15CS191</h2></li>
						
					</ul>					
				</div>
			</center>
		</div>        	
    	</body>
</html>

