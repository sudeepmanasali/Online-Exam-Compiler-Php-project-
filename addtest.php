<?php
include('connection.php');
if(isset($_POST['addtest']))
{   $d=date("Y-m-d H:i:s");
	$testtitle=mysqli_real_escape_string($conn,$_POST['testtitle']);
	$coursetitle=mysqli_real_escape_string($conn,$_POST['coursename']);
	$noq=mysqli_real_escape_string($conn,$_POST['noq']);
	$startd=mysqli_real_escape_string($conn,$_POST['startdate']);
	$endd=mysqli_real_escape_string($conn,$_POST['enddate']);
	$added=mysqli_real_escape_string($conn,$d );
	$coinsrew=mysqli_real_escape_string($conn,$_POST['coinsrew']);
	$fee=mysqli_real_escape_string($conn,$_POST['fee']);
	
	
	$checkdup="select * from test where testtitle='$testtitle'";
	$dupdata=$conn->query($checkdup);
	$duprow=$dupdata->fetch_assoc();
	
	$checktitle=$duprow['testtitle'];
	if($checktitle==$testtitle)
	{
		echo("<strong style='color:red;'>Error:</strong> This testtitle  already exists ! ");
		return(false);
	}
	
	
                    $ins="insert into test(testtitle,numberofque,startdate,enddate,addeddate,course,coinsreward,coinsfee)
					      values('$testtitle','$noq','$startd','$endd','$added','$coursetitle','$coinsrew','$fee')";
			        $insert=mysqli_query($conn,$ins);
					if($insert)
					{
						header('location:testlistadmin.php');
					}
}
?>	
