<?php
include('header.php');

?><div class="container">
  
    
<div class="content-body"><!-- Basic Inputs start -->

<section class="basic-inputs">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/profile.jpg" class="d-block w-100" style="height:50%" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="images/logo1.jpg" class="d-block w-100" style="height:50%" alt="...">
   
    </div>
    <div class="carousel-item">
      <img src="images/profile.jpg" class="d-block w-100" alt="..." style="height:50%">
 
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <div class="listing-page">
 <h3 style="background-color:orange;color:white;border-radius:8px;padding:8px;"><center>Tests List</center></h3>
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
  
    
    
			  <?php
			    $sql=mysqli_query($conn,"select * from test");
				
		
             while(	$test=mysqli_fetch_array($sql)){			
			  ?>
			  
      
              
			<div class="product-listing-m bg-white" style="color:black;">
          <div class="product-listing-img"><img src="images/profile.jpg" class="img-responsive" style="height:200px;width:200px;" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
		  
            <h5 style="color:blue"><?php echo($test['testtitle']);?></h5>
          <br>
			<ul>
             
			 <li><i class="fa fa-calendar" aria-hidden="true"></i>Course : <?php echo($test['course']); ?></li>
			 <li class="list-price">Price : <?php echo($test['coinsfee']);  ?></li>
			 
			 <li><i class="fa fa-car" aria-hidden="true"></i>End Date:<?php echo($test['enddate']); ?></li>
			 
			 <li><i class="fa fa-car" aria-hidden="true"></i> Rewards:<img src="Images/imh.jpg" style="border-radius:50%;width:25px;height:25px;"><?php echo($test['coinsreward']); ?></li>
		   
                  </ul>
		  <?php  
$k=$test['testid'];
		  $checkpay=mysqli_query($conn,"select * from testsreports where userid='$userid' and testid='$k'");
	        $payment=mysqli_fetch_assoc($checkpay); 
			
	     
			?>
				
		   	<a href="instructions.php<?php echo('?testid='.$test['testid']);?>" class="btn btn-danger " style="float:center;background-color:red;" ><i class="la la-edit">Start</i></a>
						   </div>
              </div>
          
      
			<?php
			
			 }?>
 </div>                   
             
      
	  </div>
	  </div></div>
	  </div>
	  </div>
	  </div></div>
	  


	  
<?php
include('footer.php');
?>