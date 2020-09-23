<?php
include('connection.php');

$testid=$_POST['testid'];
$queid=$_POST['queid'];

$questions=mysqli_query($conn,"select * from questions where testid='$testid'");
$questionNum=mysqli_num_rows($questions);

$checkque=mysqli_query($conn,"select * from test where testid='$testid'");
$checknum=mysqli_fetch_assoc($checkque);





   $que=mysqli_real_escape_string($conn,$_POST['question']);
   
 $nui=$questionNum['questionid']+1;
 
	$opt1=mysqli_real_escape_string($conn,$_POST['opt1']);
	$opt2=mysqli_real_escape_string($conn,$_POST['opt2']);
	$opt3=mysqli_real_escape_string($conn,$_POST['opt3']);
	$opt4=mysqli_real_escape_string($conn,$_POST['opt4']);
	$correctopt=mysqli_real_escape_string($conn,$_POST['correctopt']);

	

	

	
                    $ins="insert into questions(testid,questionid,question,opt1,opt2,opt3,opt4,correctopt)
					      values('$testid','$queid','$que','$opt1','$opt2','$opt3','$opt4','$correctopt')";
			        $insert=mysqli_query($conn,$ins);
					if($insert)
					{
						header('location:adminques.php?testid='.$testid);
					}

?>

