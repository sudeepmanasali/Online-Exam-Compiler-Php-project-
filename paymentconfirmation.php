<?php
include('header.php');
$id=$_GET['tesid'];
?>

   
  
  
 <div class="col-12 ">
                <div class="card">
				<div class="card-header">
			
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
			<center>
                <div class="container">
         <?php
			    $sql=mysqli_query($conn,"select * from test where testid='$id'");
				$test=mysqli_fetch_assoc($sql);
				
			  ?>
			  
			  
			  <h2 class="card-title  text-success" ><center>Order Summary </center></h2>
                  <h4 class="card-title text-danger"><span class="text-dark"><strong>Test Title :</strong></span> <?php echo($test['testtitle']);?> </h4>
              </div>
              <div class="card-block">
                  <div class="card-body">
			<table class="table-responsive" style="text-align:left;position:relative;left:40%;">
			  <tr>
			  <td ><b>Test Title :</b></td>
			  <td> <?php echo($test['testtitle']);?> </td>
			  </tr>
			   <tr>
			  <td><b>Course :</b></td>
			  <td> <?php echo($test['course']);?> </td>
			  </tr>
			   <tr>
			  <td><b>Questions</b></td>
			  <td><?php echo($test['numberofque']);  ?></td>
			  </tr>
			   <tr>
			  <td><b>lastdate</b></td>
			  <td><?php echo($test['enddate']); ?></td>
			  </tr>
			   <tr>
			  <td><b>Test-fee</b></td>
			  <td><?php echo($test['coinsfee']); ?></td>
			  </tr>
			  <tr>
			  <td><b>Coins awarded</b></td>
			  <td><img src="Images/imh.jpg" style="border-radius:50%;width:25px;height:25px;"><?php echo($test['coinsreward']); ?></td>
			  </tr>
			  </table>
  <!-- Trigger the modal with a button -->
  <p>Click here to pay </p>
<button class="btn btn-info" data-toggle="modal" data-target="#myModal"><img src="Images/imh.jpg" style="border-radius:50%;width:25px;height:25px;"><?php echo($test['coinsfee']);?></button>
	
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		  <h4 class="modal-title" style="color:red;"><center>Payment Gateway</center></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body bg-white">
		    
		<p class="text-success"> <center><img src="Images/payment.jpg" style="background-cover:content;width:68%;height:200px;"></center></p>
		<p style="font-size:30px;"><center>Pay: <img src="Images/imh.jpg" style="border-radius:50%;width:25px;height:25px;"><?php echo($test['coinsfee']);?>
         To unlock this test		</center></p>
		 
		 <form class="form" action="payment.php" method="post">
		 <label class="for-control " style="color:blue;">Enter the login password</label>
		      <p><input type="password"  class="form-control" name="walletkey"></p>
			  <input type="hidden" name="testid" value="<?php echo($id);?>"> 
          <p><input type="submit" name="pay" value="pay" class="form-control btn btn-primary text-white"></p>
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
		
      </div>
      
    </div>
  </div>
  
                </div>
              </div>
			  </div></center>
			  </div></div></div>



  </div>
  </div>
  <?php
  include('footer.php');
  ?>