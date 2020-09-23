<?php
error_reporting(0);
session_start();
include('connection.php');
if(!isset($_SESSION['userid']))
{
	header('location:login.php');
}
$testid=$_GET['testid'];
$userid=$_SESSION['userid'];

?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Chameleon Quiz</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
	    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
      <div class="panel panel-primary">
        <div class="panel-header">
		   <img src="images/logo2.jpg" class="float-left" style="height:30px;padding:0px;"><span style="font-size:25px;"> Online Guru</span>
		   <?php
		   $test=mysqli_query($conn,"
SELECT testresults.testid, testresults.userid, testresults.date, users.firstname, testresults.totalmarks, test.testtitle
FROM ((testresults
INNER JOIN test ON testresults.testid = test.testid)
INNER JOIN users ON testresults.userid = users.userid) where testid='$testid' and userid='$userid'");

$k=mysqli_fetch_array($test);

	?>
		   
		   <p class="float-right"><strong>Test title : </strong><?php  echo($k['testtitle']);?></p>
		</div><br>
        <div class="panel-body">
		   <div class="row">
              <div class="col-sm-6 col-xl-6 col-md-6 col-xs-6 bg-light" >
                <p><strong>User name : </strong><?php echo($k['firstname']); ?></p>
              </div>
              <div class="col-sm-6 col-xl-6 col-md-6 col-xs-6 bg-light" >
                <p class=""><strong>Submission Date :</strong><?php echo($k['date']); ?></p>
              </div>
	  
           </div>
		   <div class="container-fluid text-center">
		   <div class=" text-left">
           <h2 class="text-center text-danger">Results sheet</h2>		   
                <p><?php ?></p>
      <hr>
	  <?php 
        $sql=mysqli_query($conn,"select * from questions where testid='$testid'");
		$i=1;
		while($row=mysqli_fetch_array($sql))
		{
	  ?>
      <p><strong><?php echo("$i.".$row['question']); ?></strong></p>



	  
	   <?php
	   
	   if($row['correctopt']==$row['opt1'])
	   {
		   ?>
	 <p class="text-success" style="text-indent:15px;">A. <?php echo $row['opt1']; ?></p>
		   <?php
		}
		else
		{
			?>
	 <p style="text-indent:15px;">A. <?php echo $row['opt1']; ?></p>
			<?php
		}
	   
	   ?>
	  


	  
	  
	  
	 <?php
	
	   if($row['correctopt']==$row['opt2'])
	   {
		   ?>
		 <p class="text-success" style="text-indent:15px;">B. <?php echo $row['opt2']; ?></p>
		   <?php
		}
		else
		{
			?>
		 <p style="text-indent:15px;">B. <?php echo $row['opt2']; ?></p>
			<?php
		}
	   
	   ?>

	  




	  
	  <?php

	   if($row['correctopt']==$row['opt3'])
	   {
		   ?>
		    <p class="text-success" style="text-indent:15px;">C. <?php echo $row['opt3']; ?></p>
		   <?php
		}
		else
		{
			?> <p style="text-indent:15px;">C. <?php echo $row['opt3']; ?></p>
			<?php
		}
	   
	   ?>
	   








	   
	  <?php

	   if($row['correctopt']==$row['opt4'])
	   {
		   ?>
	 <p class="text-success" style="text-indent:15px;">D. <?php echo $row['opt4']; ?></p>
		   <?php
		}
		else
		{
			?>
		 <p style="text-indent:15px;">D. <?php echo $row['opt4']; ?></p>
			<?php
		}
	   
	   ?>
	   
	   <div class="panel">
	     <div class="panel-body">
	   <p>    <strong>Your answer : </strong><?php
		   $sql2=mysqli_query($conn,"select * from options where userid='$userid' and testid='$testid' and queid='$i'");
	   $row2=mysqli_fetch_array($sql2);
	   if($row['correctopt']==$row2['answer'])
	   {
       ?>
	   <?php echo($row2['answer'])." "; ?><i style="color:green;" class="fa fa-check-circle"></i></p>
       <?php
	   }
	   else
	   {
		   ?>
		    <?php echo($row2['answer'])." "; ?><i style="color:red;" class="fa fa-times"></i></p>
		   <?php
		   
	   }
	   ?>
	     </div>
	   </div>
	  <hr>
	  <?php
	  $i++;
		}
		?>
    </div>
	</div>
		</div>
		<div class="panel-footer">
		 <div class="row">
              <div class="col-sm-6 col-xl-6 col-md-6 col-xs-6 bg-light" >
                <p><strong>Total Score: </strong>30<?php echo($k['']); ?></p>
              </div>
            
	  
           </div>
		</div>
	   </div>
</div>
</body>
</html>