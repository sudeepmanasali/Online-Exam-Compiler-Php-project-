<?php  
include('header.php');
$userid=$_SESSION['user'];
$profile=mysqli_query($conn,"select * from users where userid='$userid'");
$info=mysqli_fetch_array($profile);

?>
<div class="content-wrapper">

        <div class="container-fluid">							<div class="bg-white ">
								<div class="row no-gutters">
									<div class="col-lg-4 col-xl-3">
										<div class="profile-content-left pt-5 ">
											<div class="card text-center ">
												<div class="card-img ">
												<br>
											     <img src="profilephotos/<?php echo($info['images']); ?>" alt="image" style="width:250px;height:250px;border-radius:20%;" />
												</div>
												<div class="card-body">
													<h4 class="py-2 text-dark"></h4>
													<h2><strong><?php  echo($info['firstname']." ".$info['lastname']); ?></strong></h2>
													<center><img src="Images/ssbag.jpg" alt="user image" style="border-radius:50%;width:200px;height:200px;"></center>
													<h2 >Coins : $ <?php  echo($info['coins']); ?></h2>
														<p style="color:green;">Rank : </p>
												
												</div>
											</div>
											<div class="d-flex justify-content-between ">
												
											</div>
											<hr class="w-100">
											<div class="contact-info pt-4">
												
												<p class="pb-3 social-button">
													
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-xl-9">
										<div class="profile-content-right py-5">
											<ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link bg-warning text-white" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">Profile</a>
												</li>
												<li class="nav-item">
													<a class="nav-link bg-warning text-white" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
												</li>
												<li class="nav-item bg-warning text-white">
													<a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
												</li>
											</ul>
										
											<div class="tab-content px-3 px-xl-5" id="myTabContent">
												<div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
													<div class="media mt-5 profile-timeline-media">
														
														<div class="media-body">
													
                                  <div class="card-body pt-0 pb-5">
                                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
														   <tbody>
														   <tr><td>Username:</td>
														   <td><?php echo($info['firstname']." ".$info['lastname']); ?></td>
														   </tr>
														   <tr>
														   <td>Email:</td>
														   <td><?php echo($info['email']); ?></td>
														   </tr>
														   <tr>
														   <td>Phone no:</td>
														   <td><?php echo($info['phone']); ?></td>
														   </tr>
														   <tr>
														   <td>Place:</td>
														   <td><?php echo($info['place']); ?></td>
														   </tr>
														    <tr>
															<td>Number of referals:</td>
															<td><?php echo($info['Noref']); ?></td>
															</tr>
														   </tbody>
														   </table>
														</div>
													<br><br><hr>
													
													<div class="card-header justify-content-between">
                                    <h2 class="text-danger">Referal earned</h2>
                                    <div class="date-range-report ">
                                      <span></span>
                                    </div>
                                  </div>
                                  <div class="card-body pt-0 pb-5">
                                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                                      <thead>
                                      <tr>
									
                                          <th>Id</th>
                                          <th>Paid Date</th>
                                          <th class="">userjoined</th>
                                          <th class="">Coins credited</th>
                                          <th class="">status</th>
                                         
                                          <th></th>
                                        </tr>
								
                                      </thead>
                                      <tbody>
									    <?php
										
										$id=$_SESSION['userid'];
									  $testresults=mysqli_query($conn,"select * from users where referalc='$id'");
									while($row=mysqli_fetch_array($testresults))
									{
									  
									  ?>
                                      <tr>
										
                                         <td><?php  echo($row['userid']);?></td>
                                          <td><?php  echo($row['date']);?></td>
                                          <td ><?php  echo($row['firstname']);?></td>
                                          <td ><?php  echo($row['place']);?></td>
                                        
                                         
                                          
                                          <td>
                                            <span class="badge badge-success">Paid</span>
                                          </td>
                                        
                                        </tr>
									
									<?php  }?>
                                        
                                       
                                          
                                      
                                    
                                      </tbody>
                                    </table>
                                  </div>
													</div>
													</div>
													
												</div>
												<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="mt-5">
                            <div class="row">
                              
                            
                             
                            </div>
                            <div class="row">
                              <div class="col-xl-6"> 
                        <!-- Notification Table -->
                        <div class="card card-defalt" data-scroll-height="550">
                          

                        </div>
 </div>
                             
                              <div class="col-12">
                                <!-- Recent Order Table -->
                                <div class="card card-table-border-none" id="recent-orders">
                                  <div class="card-header justify-content-between">
                                    <h2 class="text-danger">Recent Submissions</h2>
                                    <div class="date-range-report ">
                                      <span></span>
                                    </div>
                                  </div>
                                  <div class="card-body pt-0 pb-5">
                                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                                      <thead>
                                      <tr>
									
                                          <th>Test tile</th>
                                          <th>Submission Date</th>
                                          <th class="">Score</th>
                                          <th class="">Coins credited</th>
                                          <th class="">status</th>
                                         
                                          <th></th>
                                        </tr>
								
                                      </thead>
                                      <tbody>
                                        <tr>
										
										  <?php
									  $testresults=mysqli_query($conn,"select test.testid, test.testtitle, testresults.date, testresults.totalmarks,
                                       testresults.testrewards from testresults inner join test on testresults.testid=test.testid where userid='$userid'");
									while($row=mysqli_fetch_array($testresults))
									{
									  
									  ?>
                                         <td><a href="reviewanswerssheet.php?testid=<?php echo($row['testid']); ?>" ><?php  echo($row['testtitle']);?></a></td>
                                          <td><?php  echo($row['date']);?></td>
                                          <td ><?php  echo($row['totalmarks']);?></td>
                                          <td ><?php  echo($row['testrewards']);?></td>
                                        
                                         
                                          
                                          <td>
                                            <span class="badge badge-success">Completed</span>
                                          </td>
                                         </a>
                                        </tr>
									<?php  }?>
                                        
                                       
                                          
                                      
                                    
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
												<div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                          <div class="mt-5">
                            <form action="profileupdate.php" method="post">
                              <div class="form-group row mb-6">
                             
                              </div>
                              <div class="row mb-2">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" name="firstName" value="<?php echo($info['firstname']); ?>">
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" name="lastName" value="<?php echo($info['lastname']); ?>">
                                  </div>
                                </div>
                              </div>


                              <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo($info['email']); ?>">
                              </div>

                              <div class="form-group mb-4">
                                <label for="oldPassword"> Password</label>
                                <input type="password" class="form-control" name="Password" value="<?php echo($info['password']); ?>">
                              </div>

                              <div class="form-group mb-4">
                                <label for="newPassword">Phone</label>
                                <input type="number" class="form-control" name="phone" value="<?php echo($info['phone']); ?>">
                              </div>

                              <div class="form-group mb-4">
                                <label for="conPassword">place</label>
                                <input type="text" class="form-control" name="place" value="<?php echo($info['place']); ?>">
                              </div>

                              <div class="d-flex justify-content-end mt-5">
                                <button type="submit" class="btn btn-primary mb-2 btn-pill" name="update">Update Profile</button>
                              </div>

                            </form>
                          </div>
                        </div>
											</div>
										</div>
									</div>
								</div>
							</div>
</div>

        

      </div>

    </div>
  </div>

</div>

      </div>
<?php
include('footer.php');
?>