<?php
require "includes/common.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Opt Courses Page</title>
        	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

       		<!--jQuery library--> 
        	<script src="bootstrap/js/jquery.min.js"></script>

        	<!--Latest compiled and minified JavaScript--> 
        	<script src="bootstrap/js/bootstrap.min.js"></script>
        	<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
    	<body>
     		<?php include "includes/header.php" ?>

		

		<div class="container" style="margin-top:10px">
			<h3> Courses </h3>
			<div class="row">
			<table class="table table-striped table-bordered">
                	<tbody>
                    	<tr><th>Course ID</th><th>Course Name</th><th>Instructor ID</th></tr>
			<?php $i=0;$j=0;$k=$_SESSION['id'];
			$q1="select * from STUDENT where Stud_ID=$k";
			$r1=mysqli_query($con,$q1);
			$row1=mysqli_fetch_array($r1);
			$Sem=$row1['Sem'];$Dept_ID=$row1['Dept_ID'];
			$q2="select * from COURSES_OFFERED where Sem=$Sem and Dept_ID=$Dept_ID";
			$r2=mysqli_query($con,$q2);
			$n2=mysqli_num_rows($r2);
			?>
			<?php for($i=1;$i<=$n2;$i++){ ?>
				<tr>
					<?php $row2=mysqli_fetch_array($r2);?>
					<td><?php echo $row2['Course_ID'];?></td>
					<td><?php echo $row2['CName'];?></td>
					<td><?php echo $row2['Inst_ID'];?></td>
				
				
				</tr>
			<?php }?>
		
			</tbody>
			</table>
			</div>
		</div>





 	
		<div class="container">
			<div class="row">
				<center>
				<div class="col-xs-6 col-xs-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading ">
							<h1>Details of the Course</h1>
						</div>
						<div class="panel-body">
							<form method="post" action="OptCourses_script.php">
								<div class="form-group">
									<input type="number" required="required"  name="Course_ID" placeholder="Course_ID" class="form-control input-lg">
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

