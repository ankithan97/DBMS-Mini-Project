<?php
require "includes/common.php"
?>
<?php

$LName=$_POST['LName'];
$DeptID=$_POST['Dept_ID'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$FName=$_POST['FName'];
$Phone=$_POST['Phone'];
$Address=$_POST['Address'];

$query="insert into INSTRUCTOR(FName,LName,Dept_ID,Phone,Address,Email,Password) values('$FName','$LName',$DeptID,$Phone,'$Address','$Email','$Password')";

$result=mysqli_query($con,$query);

if($result){
	
	$_SESSION['id']=mysqli_insert_id($con);
	
	header('location: InstHome.php');
	
}
else{
header('location: index.php');
}
?>
