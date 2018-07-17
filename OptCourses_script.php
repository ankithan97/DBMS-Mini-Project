<?php
require "includes/common.php"
?>


<?php
$Course_ID=$_POST['Course_ID'];
$Stud_ID=$_SESSION['id'];


			$q1="select * from STUDENT where Stud_ID=$Stud_ID";
			$r1=mysqli_query($con,$q1);
			$row1=mysqli_fetch_array($r1);
			$Sem=$row1['Sem'];$Dept_ID=$row1['Dept_ID'];
			$q2="select * from COURSES_OFFERED where Course_ID=$Course_ID";
			$r2=mysqli_query($con,$q2);
			$row2=mysqli_fetch_array($r2);
			$C1=$row2['Class1'];$C2=$row2['Class2'];$C3=$row2['Class3'];
			$P1=$row2['Period1'];$P2=$row2['Period2'];$P3=$row2['Period3'];
			$D1=$row2['Day1'];$D2=$row2['Day2'];$D3=$row2['Day3'];
if($row2['Sem']==$row1['Sem'] and $row2['Dept_ID']==$row1['Dept_ID']){
	
	$q4="select * from COURSES_OPTED CP,COURSES_OFFERED CO where CP.Stud_ID=$Stud_ID and CP.Course_ID=CO.Course_ID and CO.Period1=$P1 and CO.Day1=$D1";
	$q5="select * from COURSES_OPTED CP,COURSES_OFFERED CO where CP.Stud_ID=$Stud_ID and CP.Course_ID=CO.Course_ID  and CO.Period2=$P1 and CO.Day2=$D1";
	$q6="select * from COURSES_OPTED CP,COURSES_OFFERED CO where CP.Stud_ID=$Stud_ID and CP.Course_ID=CO.Course_ID  and CO.Period3=$P1 and CO.Day3=$D1";
	$q7="select * from COURSES_OPTED CP,COURSES_OFFERED CO where CP.Stud_ID=$Stud_ID and CP.Course_ID=CO.Course_ID  and CO.Period1=$P2 and CO.Day1=$D2";
	$q8="select * from COURSES_OPTED CP,COURSES_OFFERED CO where CP.Stud_ID=$Stud_ID and CP.Course_ID=CO.Course_ID  and CO.Period2=$P2 and CO.Day2=$D2";
	$q9="select * from COURSES_OPTED CP,COURSES_OFFERED CO where CP.Stud_ID=$Stud_ID and CP.Course_ID=CO.Course_ID  and CO.Period3=$P2 and CO.Day3=$D2";
	$q10="select * from COURSES_OPTED CP,COURSES_OFFERED CO where CP.Stud_ID=$Stud_ID and CP.Course_ID=CO.Course_ID and CO.Period1=$P3 and CO.Day1=$D3";
	$q11="select * from COURSES_OPTED CP,COURSES_OFFERED CO where CP.Stud_ID=$Stud_ID and CP.Course_ID=CO.Course_ID and CO.Period2=$P3 and CO.Day2=$D3";
	$q12="select * from COURSES_OPTED CP,COURSES_OFFERED CO where CP.Stud_ID=$Stud_ID and CP.Course_ID=CO.Course_ID and CO.Period3=$P3 and CO.Day3=$D3";
	$r4=mysqli_query($con,$q4);
	$r5=mysqli_query($con,$q5);
	$r6=mysqli_query($con,$q6);
	$r7=mysqli_query($con,$q7);
	$r8=mysqli_query($con,$q8);
	$r9=mysqli_query($con,$q9);
	$r10=mysqli_query($con,$q10);
	$r11=mysqli_query($con,$q11);
	$r12=mysqli_query($con,$q12);
	$n4=mysqli_num_rows($r4);
	$n5=mysqli_num_rows($r5);
	$n6=mysqli_num_rows($r6);
	$n7=mysqli_num_rows($r7);
	$n8=mysqli_num_rows($r8);
	$n9=mysqli_num_rows($r9);
	$n10=mysqli_num_rows($r10);
	$n11=mysqli_num_rows($r11);
	$n12=mysqli_num_rows($r12);
	$n13=$n4+$n5+$n6+$n7+$n8+$n9+$n10+$n11+$n12;
	
	
	if($n13==0){
		$q15="select * from CAPACITY where Course_ID=$Course_ID";
		$r15=mysqli_query($con,$q15);
		$row15=mysqli_fetch_array($r15);	
		if($row15['Current']==$row15['Max']){
			header('location:ClassFull.php');

		}
		else{
			$q16="insert into COURSES_OPTED values($Stud_ID,$Course_ID)";
			$r16=mysqli_query($con,$q16);
			if($r16>0){
				header('location:Success.php');
			}
		}
	}
	else{
		header('location: ClashInst.php');
	}
}
else{
	header('location: EnterProperValues.php');
}
?>
