<?php
require "includes/common.php"
?>
<?php

$Course_ID=$_POST['Course_ID'];
$DeptID=$_POST['Dept_ID'];
$Sem=$_POST['Sem'];
$CName=$_POST['CName'];
$Class1=$_POST['Class1'];
$Period1=$_POST['Period1'];
$Class2=$_POST['Class2'];
$Period2=$_POST['Period2'];
$Class3=$_POST['Class3'];
$Period3=$_POST['Period3'];
$ID=$_SESSION['id'];
$Day1=$_POST['Day1'];
$Day2=$_POST['Day2'];
$Day3=$_POST['Day3'];
$Pre_requisite=$_POST['Pre_requisite'];
$Max=$_POST['Max'];


$qu1="(select * from COURSES_OFFERED where Class1=$Class1 and Period1=$Period1 and Day1=$Day1) UNION (select * from COURSES_OFFERED where Class2=$Class1 and Period2=$Period1 and Day2=$Day1) UNION (select * from COURSES_OFFERED where Class3=$Class1 and Period3=$Period1 and Day3=$Day1)";
$qu2="(select * from COURSES_OFFERED where Class1=$Class2 and Period1=$Period2 and Day1=$Day2) UNION (select * from COURSES_OFFERED where Class2=$Class2 and Period2=$Period2 and Day2=$Day2) UNION (select * from COURSES_OFFERED where Class3=$Class2 and Period3=$Period2 and Day3=$Day2)";
$qu3="(select * from COURSES_OFFERED where Class1=$Class3 and Period1=$Period3 and Day1=$Day3) UNION (select * from COURSES_OFFERED where Class2=$Class3 and Period2=$Period3 and Day2=$Day3) UNION (select * from COURSES_OFFERED where Class3=$Class3 and Period3=$Period3 and Day3=$Day3)";

$re1=mysqli_query($con,$qu1);
$re2=mysqli_query($con,$qu2);
$re3=mysqli_query($con,$qu3);

$nu1=mysqli_num_rows($re1);
$nu2=mysqli_num_rows($re2);
$nu3=mysqli_num_rows($re3);

if($nu1==0 and $nu2==0 and $nu3==0){



$query="insert into COURSES_OFFERED values($Course_ID,'$CName',$Sem,$DeptID,$ID,$Class1,$Class2,$Class3,$Period1,$Period2,$Period3,$Day1,$Day2,$Day3)";
//$query1="insert into PRE_REQUISITES values($Course_ID,'$Pre_requisite')";
$query2="insert into CAPACITY values($Course_ID,$Max,0)";

$result=mysqli_query($con,$query);
//$result1=mysqli_query($con,$query1);
$result2=mysqli_query($con,$query2);

if($result  and $result2){
	
	
	
	header('location: Success.php');
	
}
else{
	header('location: EnterProperValues.php');
}}
else{
	header('location:ClashInst.php');
}
?>
