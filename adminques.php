<?php
include('adminheader.php');
$id=$_GET['testid'];
?>
<div class="card mb-3">

  <div class="card-body">
   
  
  
 <div class="col-12 ">
                <div class="card">
				<div class="card-header">
				
				<h4 class="card-title" style="color:green;font-family:cursive;font-size:25px;"><center>QUestions list</center></h4>
				<?php
				
$checkque=mysqli_query($conn,"select * from test where testid='$id'");
$checknum=mysqli_fetch_assoc($checkque);

$questions=mysqli_query($conn,"select * from questions where testid='$id'");
$questionNum=mysqli_num_rows($questions);
if($questionNum<$checknum['numberofque'])
{
				?>
				  <a href="addquestions.php<?php echo('?testid='.$id);?>" class="btn btn-primary float-right">Add question</a>
<?php } ?>
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
                
                    <div class="table-responsive">
                    
                    <table class="table table-striped ">
                      <thead>
                        <tr>
						  <th>Qu id</th>
                        
					
						     <th> Questions </th>
                          <th> op1 </th>
						   <th> op2 </th>
						    <th> op3 </th>
							 <th> op4 </th>
							  <th> Correct opt </th>
						
                          <th> Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>
					  <?php
					  $quess=mysqli_query($conn,"select * from questions where testid='$id'");
				
					  while($rowq=mysqli_fetch_assoc($quess))
					  {
					  ?>
                        <tr>
                         <td><?php echo($rowq['questionid']); ?></td>
                         <td><?php echo($rowq['question']); ?></td>
                          <td><?php echo($rowq['opt1']); ?></td>
						   <td><?php echo($rowq['opt2']); ?></td>
						    <td><?php echo($rowq['opt3']); ?></td>
							 <td><?php echo($rowq['opt4']); ?></td>
							  <td><?php echo($rowq['correctopt']); ?></td>
                          <td style=""> 
						    <a href="editques.php<?php $qid=$rowq['questionid']; echo('?testid='.$id.'&queid='.$qid); ?>" class="btn btn-primary" style="padding:4px;"><i class="la la-edit"></i></a>
						  
						  <a href="deleteques.php<?php $qid=$rowq['questionid']; echo('?testid='.$id.'&queid='.$qid); ?>" class="btn btn-danger" style="padding:4px;"><i class="la la-trash"></i></a>
						  </td>
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



  </div>
  </div>
  <?php
  include('footer.php');
  ?>