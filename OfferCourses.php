<?php
require "includes/common.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Offer Courses Page</title>
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
							<form method="post" action="OfferCourses_script.php">
								<div class="form-group">
									<input type="number" required="required" name="Course_ID" placeholder="Course_ID" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="text" required="required" name="CName" placeholder="Course Name" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Sem" placeholder="Semester" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Dept_ID" placeholder="Department ID" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Day1" placeholder="Day 1" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number"  required="required" name="Class1" placeholder="Class 1" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Period1" placeholder="Period 1" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Day2" placeholder="Day 2" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Class2" placeholder="Class 2" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Period2" placeholder="Period 2" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Day3" placeholder="Day 3" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Class3" placeholder="Class 3" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Period3" placeholder="Period 3" class="form-control input-lg">
								</div>
								<div class="form-group">
									<input type="number" required="required" name="Max" placeholder="Maximum Capacity" class="form-control input-lg">
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

