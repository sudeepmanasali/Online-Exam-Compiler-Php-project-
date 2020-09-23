<?php 
include('adminheader.php');
include('connection.php');

?>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 20px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 13px;
  width: 13px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style> 
 <div class="col-12 ">
                <div class="card">
				<div class="card-header">
				<h4 class="card-title " style="font-size:20px;"><strong>Online test series</strong></h4>
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
			<a href="addtestinfo.php" style="" class="btn btn-primary">Add Test</a>
    <br>
	
			<div class="card-content collapse show">
                
                    <div class="table-responsive" style="align:center;">
                    
                    <table class="table table-striped ">
                      <thead>
                        <tr>
                          <th> Test </th>
                          <th> Test name </th>
						  <th>Course</th>
						     <th> Completion </th>
                          <th> coinsreward</th>
						     <th> Attempts</th>
                          <th> Enable  </th>
                           <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
					   $test="select * from test";
					   $testlist=mysqli_query($conn,$test);
					  $n=mysqli_num_rows($testlist);
					
					   while($row=mysqli_fetch_assoc($testlist))
					   {
					   ?>
                       <tr>
                         
                         <td><?php echo($row['testid']); ?>  </td>
						  	 <td><?php echo($row['testtitle']); ?>  </td>
							 <td> <?php echo($row['course']); ?>  </td>
                          <td>
                            <div class="progress">
							<?php
							$tq=$row['numberofque'];
							$tid=$row['testid'];
								   $que="select * from questions where testid='$tid'";
					   $quen=mysqli_query($conn,$que);
					  $questionNum=mysqli_num_rows($quen);
					     $w=100*($questionNum/$tq);
							
							?>
                              <div class="progress-bar-striped bg-warning" role="progressbar" style="width:<?php echo($w."%");?>" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span style="color:white;"><?php echo($w."%");?></span></div>
                            </div>
                          </td>
                       
					
						  <td><?php echo($row['coinsreward']) ; ?>  </td>
						
						 	 <td> 0</td>
                          <td> <label class="switch">
  <input type="checkbox" >
  <span class="slider"></span>
</label> </td>
 <td style=""> <a href="adminques.php<?php echo'?testid='.$row['testid'];?>" class="btn btn-primary" style="padding:4px;"><i class="la la-edit"></i></a>
<a href="deletetest.php<?php echo'?testid='.$row['testid'];?>" class="btn btn-danger" style="padding:4px;"><i class="la la-trash"></i></a>						  </td>
                       
                        </tr>
                     <?php
					   }
					   ?>
					    
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
		
  
  </div>
    </div>
	  </div>
    </div>
			  </div>
			  </div></div></div>
			  
	  <?php 
include('footer.php');
?>
