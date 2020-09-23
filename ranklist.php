<?php
include('adminheader.php');
?>
	  <div class="col-12 ">
                <div class="card">
				<div class="card-header">
				<h4 class="card-title" style="color:green;font-family:cursive;font-size:25px;"><center>Ranking list</center></h4>
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
                          <th> User </th>
                          <th> First name </th>
						     <th> Ranking </th>
                        
						<th >Place</th>
                          <th> Coins earned </th>
                   
						
                        </tr>
                      </thead>
                      <tbody>
					  
					  <?php
					  $rank=mysqli_query($conn,"select * from users order by coins desc limit 5");
					  $i=1;
					  while($rankrow=mysqli_fetch_assoc($rank))
					  {
						  ?>
                        <tr>
                          <td class="py-1">
                            <img src="Images/faces-clipart/pic-1.png" alt="image" /> </td>
                          <td> <?php echo $rankrow['firstname'] ;  ?> </td>
                       
                          <td><?php echo $i ;  ?>  </td>
						          <td> <?php echo $rankrow['place'] ;  ?></td>
                          <td> <?php echo $rankrow['coins'] ;  ?></td>
						
                        </tr>
					  <?php  $i++;}?>
                        
                    
                    
                    
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