<?php
require "includes/common.php"
?>
<?php

$LName=$_POST['LName'];
$Sem=$_POST['Sem'];
$DeptID=$_POST['Dept_ID'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$FName=$_POST['FName'];
$Phone=$_POST['Phone'];
$Address=$_POST['Address'];

$query="insert into STUDENT(FName,LName,Sem,Dept_ID,Phone,Address,Email,Password) values('$FName','$LName',$Sem,$DeptID,$Phone,'$Address','$Email','$Password')";

$result=mysqli_query($con,$query);

if($result){
	
	$_SESSION['id']=mysqli_insert_id($con);
	//$_SESSION['FName']=$FName;
	header('location: StudHome.php');
}
else{
header('location: index.php');
}
?>
