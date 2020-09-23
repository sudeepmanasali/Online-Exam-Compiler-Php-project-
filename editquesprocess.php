<?php
include('connection.php');
$testid=$_GET['testid'];
$qid=$_GET['qid'];
if(isset($_POST['edit']))
{


$id=$_POST['testid'];
						$queid=$_POST['queid'];

   $que=mysqli_real_escape_string($conn,$_POST['question']);
							$opt1=mysqli_real_escape_string($conn,$_POST['opt1']);
	$opt2=mysqli_real_escape_string($conn,$_POST['opt2']);
	$opt3=mysqli_real_escape_string($conn,$_POST['opt3']);
	$opt4=mysqli_real_escape_string($conn,$_POST['opt4']);
	$correctopt=mysqli_real_escape_string($conn,$_POST['correctopt']);

	

	

	
                    $ins="update questions 
					    set question='$que',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',correctopt='$correctopt'
					      where testid='$id'and questionid='$queid'";
			        $insert=mysqli_query($conn,$ins);
					if($insert)
					{
						header('location:adminques.php?testid='.$id);
					}
					
}

?>