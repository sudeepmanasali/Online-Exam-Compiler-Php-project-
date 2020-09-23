<?php
include('header.php');


?>

<div class="card mb-3">

  <div class="card-body">
   
  
  
 <div class="col-12 ">
                <div class="card">
				<div class="card-header">
				<h4 class="card-title" style="color:green;font-family:cursive;font-size:25px;"><center>Upload Image</center></h4>
	
	<br><br>
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
                
 

	<form method="post" action="upload.php" class="form-group" enctype="multipart/form-data">

<input type="file" name="file" class="from-control btn-btn-primary btn-min-width mr-1 mb-1">


<button type="submit" name="submit" class="btn btn-primary">Update image</button>







</form>
</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>

<?php  
include('footer.php');
?>