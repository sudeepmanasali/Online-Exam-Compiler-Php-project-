<?php
session_start();

if($_SESSION['testid'])
	$k=$_SESSION['testid'];
$userid=$_SESSION['userid'];
	$row=mysqli_query($conn,"select * from questions where testid='$k' and 1==1");
	$rows=mysqli_fetch_array($row);
	
	$update=mysqli_query($conn,"update testsreports set testattempt='attempted' where testid='$k' and userid='$userid'");
	
	$num=$rows['questionid'];

		header('location:onlinetest.php?queid=1');
		
	

?>