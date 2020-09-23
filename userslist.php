<?php 
include('adminheader.php');
include('connection.php');
?>
<div class="col-12 ">
                <div class="card">
				<div class="card-header">
				<h4 class="card-title text-warning" style=";font-family:cursive;font-size:25px;"><center>Users List</center></h4>
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
                
                    <div class="table-responsive">
                    
                    <table class="table table-striped ">
                      <thead>
                        <tr>
                          <th> Photo </th>
                          <th> Name </th>
						     <th> Email </th>
                          <th> Refferals </th>
						<th>Testattemp</th>
						<th>Phonen</th>
                          <th> Coins earned </th>
                         <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					    <?php
					  $demo="select * from users";
					  $demoinfo=mysqli_query($conn,$demo);
					  
					  while($row=mysqli_fetch_array($demoinfo))
					  {
					  ?>
                        <tr>
                          <td class="py-1">
                            <img src="profilephotos/<?php echo($row['images']); ?>" alt="image" style="width:30px;height:30px;border-radius:20%;" /> </td>
                          <td> <?php echo($row['firstname']); ?></td>
                               <td> <?php echo($row['email']); ?></td>
						      <td> <?php echo($row['phone']); ?></td>
							  
							  <?php
							  $id=$row['userid'];
							  $testnum=mysqli_query($conn,"select * from testresults where userid='$id'");
						      $numtest=mysqli_num_rows($testnum);
							  
							  ?>
							  
					      <td> <?php echo($numtest);?></td>
						  	  <td>93802169444</td>
                          <td> $ 77.99 </td>
                          <td> <a href="deleteuser.php<?php echo'?userid='.$row['userid'];?>" class="btn btn-danger" style="padding:4px;"><i class="la la-trash"></i></a>	 </td>
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
			  </div></div></div>
			  
<?php 
include('footer.php');
?>