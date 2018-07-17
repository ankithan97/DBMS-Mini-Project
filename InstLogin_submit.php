<?php
require "includes/common.php"
?>


<?php
$Inst_ID=$_POST['Inst_ID'];
$Password=$_POST['Password'];

$query="select * from INSTRUCTOR where Inst_ID=$Inst_ID and Password='$Password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0){
	$row=mysqli_fetch_array($result);
	
	$_SESSION['id']=$row['Inst_ID'];
	header('location:InstHome.php');
}
else{
	header('location: index.php');
}
?>
