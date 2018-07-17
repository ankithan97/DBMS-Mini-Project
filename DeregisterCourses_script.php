<?php
require "includes/common.php"
?>


<?php
$Stud_ID=$_SESSION['id'];
$Course_ID=$_POST['Course_ID'];

$query="select * from COURSES_OPTED where Stud_ID=$Stud_ID and Course_ID=$Course_ID";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0){
	$query1="delete from COURSES_OPTED where Stud_ID=$Stud_ID and Course_ID=$Course_ID";
	$result1=mysqli_query($con,$query1);
	if($result1>0){
		header('location: Success.php');
	}
	echo $result1;
}
else{
header('location: EnterProperValues.php');
}
?>
