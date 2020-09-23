<!DOCTYPE html>
<?php
include('connection.php');

if(isset($_POST['register']))
{   $fname=mysqli_real_escape_string($conn,$_POST['firstname']);
	$lname=mysqli_real_escape_string($conn,$_POST['lastname']);
	$pass=mysqli_real_escape_string($conn,$_POST['password']);
	$phone=mysqli_real_escape_string($conn,$_POST['phone']);
	$place=mysqli_real_escape_string($conn,$_POST['place']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$gender=mysqli_real_escape_string($conn,$_POST['gender']);
	$referal=mysqli_real_escape_string($conn,$_POST['refcode']);
	
	$checkdup="select * from users where email='$email'";
	$dupdata=mysqli_query($checkdup);
	$duprow=mysqli_fetch_array($dupdata);
	
	
	$checkemail=$duprow['email'];
	if($checkemail==$email)
	{
		echo("<strong style='color:red;'>Error:</strong> The is email already exists ! ");
		return(false);
	}

	if($referal!=NULL)
	{
			$checkref="select * from users where userid='$referal'";
	$refdata=mysqli_query($checkref);
	
	$rowt=mysqli_fetch_array($refdata);
	
	$coins=$rowt['coins']+200;
	$noref=$rowt['Noref']+1;
	
	$update=mysqli_query($conn,"update users set coins='$coins' , Noref='$noref' where where userid='$referal'");
	}
	

	
                    $ins="insert into users(firstname,lastname,email,phone,gender,place,password,referalc)
					      values('$fname','$lname','$email','$phone','$gender','$place','$pass','$referal')";
			        $insert=mysqli_query($conn,$ins);
					if($insert)
					{
						header('location:login.php');
					}
}
?>

<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Sign up Form with Rounded Social Buttons</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body {
		background: #dfe7e9;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
		font-size: 16px;
		transition: all 0.4s;
		box-shadow: none;
	}
	.form-control:focus {
        border-color: #5cb85c;
    }
    .form-control, .btn {
        border-radius: 50px;
		outline: none !important;
    }
	.signup-form {
		width: 480px;
    	margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		border-radius: 5px;
    	margin-bottom: 20px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 40px;
    }
	.signup-form a {
		color: #5cb85c;
	}    
	.signup-form h2 {
		text-align: center;
		font-size: 34px;
		margin: 10px 0 15px;
	}
	.signup-form .hint-text {
		color: #999;
		text-align: center;
		margin-bottom: 20px;
	}
	.signup-form .form-group {
		margin-bottom: 20px;
	}
    .signup-form .btn {        
        font-size: 18px;
		line-height: 26px;
        font-weight: bold;
		text-align: center;
    }
	.signup-btn {
		text-align: center;
		border-color: #5cb85c;
		transition: all 0.4s;
	}
	.signup-btn:hover {
		background: #5cb85c;
		opacity: 0.8;
	}
    .or-seperator {
        margin: 50px 0 15px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
        padding: 0 10px;
		width: 40px;
		height: 40px;
		font-size: 16px;
		text-align: center;
		line-height: 40px;
		background: #fff;
		display: inline-block;
        border: 1px solid #e0e0e0;
		border-radius: 50%;
        position: relative;
        top: -22px;
        z-index: 1;
    }
    .social-btn .btn {
		color: #fff;
        margin: 10px 0 0 15px;
		font-size: 15px;
		border-radius: 50px;
		font-weight: normal;
		border: none;
		transition: all 0.4s;
    }	
	.social-btn .btn:first-child {
		margin-left: 0;
	}
	.social-btn .btn:hover {
		opacity: 0.8;
	}
	.social-btn .btn-primary {
		background: #507cc0;
	}
	.social-btn .btn-info {
		background: #64ccf1;
	}
	.social-btn .btn-danger {
		background: #df4930;
	}
	.social-btn .btn i {
		float: left;
		margin: 3px 10px;
		font-size: 20px;
	}
</style>

</head>

<body class="bg-gradient-primary">


  <div class="signup-form">
  
              <form class="user" action="" method="post" enctype="multipart" >
              <h2>Create an Account</h2>
              <p class="hint-text">Sign up with your social media account or email address</p>
		<div class="social-btn text-center">
			<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
			<a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
			<a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
		</div>
		<div class="or-seperator"><b>or</b></div>
                <div class="form-group">
              
				  
                    <input type="text" class="form-control input-lg" placeholder="First Name" name="firstname" required> 
</div><div class="form-group">
                    <input type="text" class="form-control input-lg"  placeholder="Last Name" name="lastname" required>
                  
                </div>
                <div class="form-group">
                  <input type="email" class="form-control input-lg"  placeholder="Email Address" name="email" required>
                </div>
				    <div class="form-group">
                  <input type="text" class="form-control input-lg"  placeholder="Gender" name="gender" required>
                </div>
				
				  <div class="form-group">
				  
                  <input type="number" class="form-control finput-lg"  placeholder="Phone number" name="phone" required>
                </div>
				    <div class="form-group">
					  
                  <input type="text" class="form-control input-lg"  placeholder="Place" name="place" required>
                </div>
				 <div class="form-group">
         <small style="color:red;">  *Optional</small>
                  <input type="text" class="form-control input-lg"  placeholder="Refferal code" name="refcode" >
                </div>
                <div class="form-group ">
                 
                  
                    <input type="password" class="form-control input-lg"  placeholder=" Password" name="password" required>
				
                  </div>

				  <br>
				  <div class="form-group">
				   
                    <input type="submit" class="btn btn-primary btn-lg btn-block signup-btn"  value="Sign Up" name="register">
                  </div>
                  <h4 style="text-align:center;">Already Registered , <a href="login.php">SignIn</a></h4>
                </div>
             
                <hr>
            
              </form>
              <hr>
            
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>