<?php 
include('header.php');
?>

<div class="col-12 grid-margin">

                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title text-warning" style=";font-size:20px"><center>Test title</center></h2>
                    <form class="form-sample">
                      <h3 class="card-description text-danger"> Test Questions info </h3>
                      <div class="row">
                        <div class="col-md-6">
						<form action="" method="POST">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Question  no 1</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
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
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
						
						  <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Option 2</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
						  <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Option 3</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">option 4</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
						  <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Correct option(in numbers) </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      
               
                        <div class="col-md-6 float-right">
                          <div class="form-group row">
                           
                            <div class="col-sm-5">
                          <input type="submit" class="form-control btn btn-secondary" value="Update question" style="background-color:slateblue;color:white;" />
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