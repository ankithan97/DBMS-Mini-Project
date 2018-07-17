<?php
require "includes/common.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Deregister Courses Page</title>
        	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

       		<!--jQuery library--> 
        	<script src="bootstrap/js/jquery.min.js"></script>

        	<!--Latest compiled and minified JavaScript--> 
        	<script src="bootstrap/js/bootstrap.min.js"></script>
        	<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
    	<body>
     		<?php include "includes/header.php" ?>




 	
		<div class="container">
			<div class="row">
				<center>
				<div class="col-xs-6 col-xs-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading ">
							<h1>Details of the Course</h1>
						</div>
						<div class="panel-body">
							<form method="post" action="DeregisterCourses_script.php">
								<div class="form-group">
									<input type="number"  required="required"  name="Course_ID" placeholder="Course_ID" class="form-control input-lg">
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

