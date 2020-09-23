<?php
include('adminheader.php');
if(isset($_POST['send']))
{
	

$to = "sudeepmanasali@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = mysqli_real_escape_string($conn,$_POST['msg']);


$k=mail($to,$subject,$txt,$headers);

if($k)
{
	
$insert=mysqli_query($conn,"insert into messages (message,sentto)values('$headers','$to')");
	echo("<script>
	alert('The message is sent');
	</script>");
	header('location:addmessage.php');
}
}
?>


  
<div class="card mb-3">

  <div class="card-body">
   
  
  
 <div class="col-12 ">
        <div class="card">
		
			   	<div class="card-header">
		            <h3 class="card-title text-success text-center" style="font-size:25px;">Text-Message</h3>		
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
<form method="post" action="">
				<div class="card-content collapse show">
						
						   <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="font-size:20px;"><i class="la la-edit"></i>Message</label>
                 
                              <input type="text" class="form-control" name="msg" required>
							  <br>
                           
                          </div>
						   <button type="submit" name="send" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-edit"></i> Primary</button>
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
<?php
include('footer.php');


?>