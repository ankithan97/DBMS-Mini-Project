<?php
require "includes/common.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Home Page</title>
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
		a:link {
		    color: white;
		}
		a:visited {
    			color: white;
		}


		a:hover {
		    color: white;
		}


		a:active {
		    color: white;
		}
	</style>
    	<body>
     		<?php include "includes/header.php" ?> 	
		<div class="container" style="margin-top:110px">
			<center>
				<div class="col-xs-6 col-xs-offset-3" style="background-color:rgba(0,0,0,0.7) ">
					<ul style="list-style-type:none  ">
						<li style="text-decoration: none"><h2><a href="ViewCourses.php">View currently registered courses</a></h2></li>
						<li style="text-decoration: none"><h2><a href="OptCourses.php">Sign Up for new courses</a></h2></li>
						<li style="text-decoration: none"><h2><a href="DeregisterCourses.php">Deregister courses</a></h2></li>
					</ul>					
				</div>
			</center>
		</div>      	
    	</body>
</html>

