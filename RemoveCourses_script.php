<?php
require "includes/common.php"
?>


<?php
$Inst_ID=$_SESSION['id'];
$Course_ID=$_POST['Course_ID'];

$query="select * from COURSES_OFFERED where Course_ID=$Course_ID";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0){
	$row=mysqli_fetch_array($result);

	if($row['Inst_ID']==$Inst_ID){

		$query10="delete from COURSES_OFFERED where Course_ID=$Course_ID";
		$result10=mysqli_query($con,$query10);
		header('location:Success.php');
	}
}
else{
	header('location: EnterProperValues.php');
}
?>
