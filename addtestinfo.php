<?php
include('adminheader.php');
?>
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <form action="addtest.php" method="post">
        <div class="modal-header px-4">
          <h2 class="modal-title text-warning" style="font-family:monospace;" id="exampleModalCenterTitle">Create New Test/Quiz</h2>
        </div>
        <div class="modal-body px-4">


          <div class="row mb-2">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="firstName">Test Title</label>
                <input type="text" class="form-control" name="testtitle" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="lastName">Course name</label>
                <input type="text" class="form-control" name="coursename" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group mb-4">
                <label for="userName">Number of questions</label>
                <input type="number" class="form-control" name="noq" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group mb-4">
                <label for="email">Start date</label>
                <input type="date" class="form-control" name="startdate" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group mb-4">
                <label for="Birthday">End date</label>
                <input type="date" class="form-control" name="enddate" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group mb-4">
                <label for="event">Coins rewarded</label>
                <input type="number" class="form-control" name="coinsrew" required>
              </div>
            </div>
			<div class="col-lg-6">
              <div class="form-group mb-4">
                <label for="event">Coins To unlock</label>
                <input type="number" class="form-control" name="fee" required>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer px-4">
          <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancel</button>
          <button type="submit" name="addtest"class="btn btn-success btn-pill">Save test</button>
        </div>
      </form>
    </div>
  </div>
  </div>
   </div>
  </div>
  </div>
  <?php
  include('footer.php');
  ?>