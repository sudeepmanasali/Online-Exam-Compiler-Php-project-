<?php
include('header.php');
?>
<section class="basic-inputs">
  <div class="row match-height">
      <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Basic Input</h4>
              </div>
              <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                          <input type="text" class="form-control" id="basicInput" >
                      </fieldset>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Password</h4>
              </div>
              <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                          <input type="password" class="form-control" id="passwordField">
                      </fieldset>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">With Placeholder</h4>
              </div>
              <div class="card-block">
                  <div class="card-body">
                      <fieldset class="form-group">
                          <input type="email" class="form-control" id="placeholderInput" placeholder="Enter Email Address">
                      </fieldset>
                  </div>
              </div>
          </div>
      </div>
<?php
include('footer.php');
?>