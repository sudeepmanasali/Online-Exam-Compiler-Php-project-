<?php
session_start();
include('connection.php');
$userid=$_SESSION['user'];
$tid=$_GET['testid'];
$count=0;
$notcount=0;
$marks=0;
$num=mysqli_query($conn,"select * from questions where testid='$tid' ");
$quenum=mysqli_num_rows($num);

for($i=1;$i<=$quenum;$i++)
{
$select=mysqli_query($conn,"select answer from options where queid='$i' and testid='$tid' and userid='$userid'");
$selected=mysqli_fetch_array($select);

if($selected['answer']==NULL)
{
	$notcount++;
	
}
else
{
	$sel=mysqli_query($conn,"select * from questions where testid='$tid' and questionid='$i'");
$select=mysqli_fetch_array($sel);

	$count++;

	if(!strcmp($selected['answer'],$select['correctopt']))
    {
		$marks++;
	
	}

}

}

$num2=mysqli_query($conn,"select * from test where testid='$tid' ");
$quenum2=mysqli_fetch_array($num2);
$totalreward=$quenum2['coinsreward'];
$reward = ($marks / $quenum2['numberofque'])*$totalreward;

$insert=mysqli_query($conn,"insert into testresults(userid,testid,notattended,attended,totalmarks,testrewards)values('$userid','$tid','$notcount','$count','$marks','$reward')");

$insert2=
$getcoins=mysqli_query($conn,"select * from users where userid='$userid'");
$get=mysqli_fetch_array($getcoins);

$coinsadd = $get['coins']+$reward;
$k=mysqli_query($conn,"update users set coins='$coinsadd' where userid='$userid' ");
unset($_SESSION['testid']);
	header('location:result.php?testid='.$tid);




?>