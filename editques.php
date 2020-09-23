<?php 
include('adminheader.php');
$id=$_GET['testid'];
$qid=$_GET['queid'];
$checkque=mysqli_query($conn,"select * from test where testid='$id'");
$checknum=mysqli_fetch_assoc($checkque);
?>


<div class="col-12 grid-margin">

                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title" style="color:slateblue;font-size:20px"><center><?php echo($checknum['testtitle']); ?></center></h2>
                    <form class="form-sample" action="editquesprocess.php" method="post">
                      <h3 class="card-description text-danger"> Test Questions info </h3>
                      <div class="row">
                        <div class="col-md-6">
						<?php
						$question=mysqli_query($conn,"select * from questions where testid='$id' and questionid='$qid'");
						$querow=mysqli_fetch_array($question);
						
						?>
					
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Question  no 1</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="question" value="<?php echo $querow['question']; ?> " required>
                            </div>
                          </div>
                        </div>
						<p class="card-description"></p>
                        
                      </div>
                      
                 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Option 1</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="opt1" value="<?php echo $querow['opt1']; ?> " required>
                            </div>
                          </div>
                        </div>
						
						  <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Option 2</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="opt2" value="<?php echo $querow['opt2']; ?>" required>
                            </div>
                          </div>
                        </div>
						  <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Option 3</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="opt3" value="<?php echo $querow['opt3']; ?>" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">option 4</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="opt4" value="<?php echo $querow['opt4']; ?>"required>
                            </div>
                          </div>
                        </div>
						  <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Correct option</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="correctopt" value="<?php echo $querow['correctopt']; ?>" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      
               
                        <div class="col-md-6 float-right">
                          <div class="form-group row">
                           
                            <div class="col-sm-5">
					
					<input type="hidden" name="testid" value="<?php echo($id); ?>">
                     <input type="hidden" name="queid" value="<?php  echo($qid); ?>">				
                          <input type="submit" class="form-control btn btn-secondary" value="edit question" name="edit" style="background-color:slateblue;color:white;" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
					
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
include('footer.php');
?>