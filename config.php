<?php
session_start();
include('connection.php');
$userid=$_SESSION['user'];
	$i=$_SESSION['testid'];
$count=0;

$attendance=mysqli_query($conn,"select * from options where testid='$i'");
$attnum=mysqli_num_rows($attendance);

if($attnum>0)
{
	mysqli_query($conn,"del from options where testid='$i' ");
}
if(isset($_SESSION['testid']))
{
	
						$check=mysqli_query($conn,"select * from test where testid='$i'");
						$checknum=mysqli_fetch_array($check);

						$num=mysqli_query($conn,"select * from questions where testid='$i' ");
$quenum=mysqli_num_rows($num);

if($_POST['queid']<$quenum)
{
	
	$testid=$_SESSION['testid'];
	$qid=$_POST['queid'];
	$an=$_POST['quizcheck'];
	


	$save=mysqli_query($conn,"insert into options(testid,userid,queid,answer)values('$testid','$userid','$qid','$an')");
	
	$id=$_POST['queid']+1;
   
	
		header('location:onlinetest.php?queid='.$id);
}
	
else
	{
		$userid=$_SESSION['user'];
	$testid=$_SESSION['testid'];
	$qid=$_POST['queid'];
	$an=$_POST['quizcheck'];
	$save=mysqli_query($conn,"insert into options(testid,userid,queid,answer)values('$testid','$userid','$qid','$an')");
	
	
	header('location:resultprocess.php?testid='.$testid);	
	}

}
?>