<?php
require "includes/common.php"
?>


<?php
$Stud_ID=$_POST['Stud_ID'];
$Password=$_POST['Password'];

$query="select * from STUDENT where Stud_ID=$Stud_ID and Password='$Password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0){
	$row=mysqli_fetch_array($result);
	
	
	$_SESSION['id'] = $row['Stud_ID'];
	
	header('location: StudHome.php');
}
else{
header('location: index.php');
}
?>
