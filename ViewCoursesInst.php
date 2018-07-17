<?php
require "includes/common.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>View Courses Page</title>
        	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

       		<!--jQuery library--> 
        	<script src="bootstrap/js/jquery.min.js"></script>

        	<!--Latest compiled and minified JavaScript--> 
        	<script src="bootstrap/js/bootstrap.min.js"></script>
        	<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
    	<body>
     		<?php include "includes/header.php" ?> 	
		<div class="container" style="margin-top:50px">
			<h3> Courses </h3>
			<div class="row">
			<table class="table table-striped table-bordered">
                	<tbody>
                    	<tr><th>D/P</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th></tr>
			<?php $i=0;$j=0;$k=$_SESSION['id'];

			
						

			for($i=1;$i<=5;$i++){ ?>
				<tr>
				<?php for($j=0;$j<=6;$j++){ $q1="select * from COURSES_OFFERED where Inst_ID=$k and Day1=$i and Period1=$j";
				$q2="select * from COURSES_OFFERED where Inst_ID=$k and Day2=$i and Period2=$j";
				$q3="select * from COURSES_OFFERED where Inst_ID=$k and Day3=$i and Period3=$j";
				$r1=mysqli_query($con,$q1);
				$r2=mysqli_query($con,$q2);
				$r3=mysqli_query($con,$q3);
				$n1=mysqli_num_rows($r1);
				$n2=mysqli_num_rows($r2);
				$n3=mysqli_num_rows($r3);
				?>  

					<?php if($j==0){?><td><?php echo $i; ?> </td> <?php } elseif($n1>0) { ?>
						
						<td><?php $row1=mysqli_fetch_array($r1);echo 'Class:'.$row1['Class1'].',Sub:'.$row1['CName']; ?></td>
					
					 <?php } elseif($n2>0) { ?>
						
						<td><?php $row2=mysqli_fetch_array($r2);echo 'Class:'.$row2['Class2'].',Sub:'.$row2['CName']; ?></td>
					
					 <?php }elseif($n3>0) { ?>
						
						<td><?php $row3=mysqli_fetch_array($r3);echo 'Class:'.$row3['Class3'].',Sub:'.$row3['CName']; ?></td>
					
					 <?php } else {?>

						<td>FREE</td>

						<?php } ?>
				<?php } ?>
				
				
				</tr>
			<?php }?>
			</tbody>
			</table>
			</div>
		</div>
	</body>
</html>
		
