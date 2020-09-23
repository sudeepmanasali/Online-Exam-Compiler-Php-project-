<?php
session_start();
include('connection.php');
$walletkey=mysqli_real_escape_string($conn,$_POST['walletkey']);
$testid=$_POST['testid'];
$userid=$_SESSION['userid'];
$checkm=mysqli_query($conn,"select * from test where testid='$testid'");
$check=mysqli_fetch_array($checkm);

$wal=mysqli_query($conn,"select * from users where userid='$userid'");
$walletamount=mysqli_fetch_assoc($wal);
if($walletamount['coins']>0)
{
$walletamount['coins'] = $walletamount['coins'] - $check['coinsfee'];
$wamt=$walletamount['coins'];

$update=mysqli_query($conn,"update users set coins='$wamt' where userid='$userid' ");
if($update)
{
$insreport=mysqli_query($conn,"insert into testsreports(testid,userid)values('$testid','$userid')");
if($insreport)
{
	header('location:testslistuser.php');	
}
}
}
else
{
	echo('
     <script>window.alert("The amount is sufficient.");</script>    	
	');
	header('location:paymentconfirmation.php?tesid='.$testid);
}





?>