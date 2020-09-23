<?php
session_start();
if(!isset($_SESSION['user']))
{
	headers('location:login.php');
}
include('connection.php');
$id=$_GET['testid'];
$_SESSION['testid']=$id;
$userid=$_SESSION['user'];
  
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Online Guru</title>
	    <link rel="icon" href="images/logo2.jpg" type="image/icon type">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
   
  <!-- inject:css -->
 <!-- BEGIN VENDOR CSS-->
     <!-- plugin css for this page -->
    
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
	body{
	
		font-family: 'Varela Round', sans-serif;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {		
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #d6d6d6;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.nav-link img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #555;
		padding-left: 0;
		font-size: 20px;
		padding-right: 50px;
		font-family: 'Raleway', sans-serif;
	}
	.navbar .navbar-brand b {
		font-weight: bold;
		color: #eb5844;
	}
	.navbar ul.nav li a:hover, .navbar ul.nav li a:focus {
		color: #f08373 !important;
	}
	.navbar ul.nav li.active a, .navbar ul.nav li.active a:hover, .navbar ul.nav li.active a:focus {
		color: #eb5844 !important;
		background: transparent !important;
	}
	.search-box {
        position: relative;
    }	
    .search-box input.form-control {		
        padding-right: 35px;
        border-radius: 0;
		padding-left: 0;
		border-width: 0 0 1px 0;
		box-shadow: none;
    }
	.search-box input.form-control:focus {		
		border-color: #f08373;		
	}
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px 0 7px 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }
	.navbar .nav-item i {
		font-size: 18px;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar .nav-item.open > a {
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .navbar-form {
		margin-right: 0;
		margin-left: 0;
		border: 0;
	}
	@media (min-width: 992px){
		.form-inline .input-group {
			width: 250px;
			margin-right: 30px;
		}
	}
	@media (max-width: 991px){
		.form-inline {
			display: block;
			margin-bottom: 10px;
			margin-top: 0;
		}
		.input-group {
			width: 100%;
		}
        .small{
            height:180px;
            margin-right:15px;
            margin-left:0px;
        }
	}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  font-family: "Lato";
}
.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
  background-color: #341f97;
}

.welcome_text {
  width: 400px;
}

.welcome_form {
}

.welcome_form input,
.welcome_form button {
  display: block;
  width: 100%;
}

.welcome_form input {
  background-color: transparent;
  color: #fff;
  font-size: 30px;
  text-align: center;
  border: none;
  border-bottom: 1px solid #fff;
  margin-bottom: 15px;
}

.welcome_form input:focus {
  outline: none;
}

.welcome_form button {
  padding: 20px 0;
  border: none;
  border-radius: 100px;
  background-color: #fff;
  color: #341f97;
  font-size: 22px;
  transition: 0.4s all;
}

.welcome_form button:hover {
  box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.2);
  transform: translateY(-5px);
  cursor: pointer;
}

.quiz {
  display: grid;
  grid-template-rows: 60px auto;
  width: 800px;
  height: 500px;
  background-color: #fff;
  box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.3);
  border-radius: 2px;
}

.quiz2 {
  display: grid;
  grid-template-rows: 60px auto;
  width: 300px;
  height: 500px;
  background-color: #fff;
  box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.3);
  border-radius: 2px;
}
.quiz_header {
  display: flex;
  justify-content: space-between;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  background-color: #fff;
  box-shadow: 0px 2px 5px 1px rgba(0, 0, 0, 0.1);
  z-index: 1;
}
.quiz_body {
  padding: 30px 30px;
}
.quiz_user {
  display: flex;
  align-items: center;
  height: 100%;
  padding-left: 30px;
}

.quiz_timer {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 250px;
  background-color: #341f97;
  color: #fff;
}
.quiz_body {
  background-color: #ecf0f1;
}

.option_group {
  list-style-type: none;
  margin: 30px 0;
}


.option_group2 {
  list-style-type: none;
  margin: 30px 0;
}
.option {
  display: block;
  width: 300px;
  background-color: #fff;
  margin-bottom: 20px;
  padding: 15px 20px;
  border-radius: 100px;
  border: 2px solid transparent;
  transition: 0.4s all;
}

.option2 {
	float:left;
	margin-left:5px;
  display: block;
  width: 30px;
  color:white;
  background-color: red;
  margin-bottom: 20px;
  padding: 15px 20px;
  border-radius: 10px;
  border: 2px solid transparent;
  transition: 0.4s all;
}

.option:hover {
  cursor: pointer;
  /* background-color: rgba(255, 255, 255, 0.1); */
  border: 2px solid #341f97;
  color: #341f97;
}
.option.active {
  background-color: #341f97;
  color: #fff;
}
.option2:hover {
  cursor: pointer;
  /* background-color: rgba(255, 255, 255, 0.1); */
  border: 2px solid #341f97;
  color: #341f97;
}
.option2.active {
  background-color: #341f97;
  color: #fff;
}
.btn-next {
  border: none;
  padding: 15px 35px;
  background-color: green;
  color: #fff;
  border-radius: 27px;
  transition: 0.4s all;
}
.btn-sub {
  border: none;
  padding: 15px 35px;
  background-color: red;
  color: #fff;
  border-radius: 27px;
  transition: 0.4s all;
}


.btn-next:hover {
  cursor: pointer;
  background-color: #fff;
  color: #341f97;
  box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.1);
}

.award_icon {
  display: block;
  font-size: 300px;
  color: #fff;
}

.username,
.userpoints,
.usertime {
  color: #fff;
  text-align: center;
  margin-top: 15px;
}
.small 
{
  width:60%
}

@media screen and (max-width:786px)
{
  .small 
  {
       width:50%;
       height:100%;
  }
}
    </style>
</head>
<body>

<?php      $sql=mysqli_query($conn,"select * from test where testid='$id'");
				$test=mysqli_fetch_assoc($sql);
				?>	
<div class="wrapper">
      <div class="quiz">
        <div class="quiz_header" style="back">
          <div class="quiz_user">
          <img src="images/logo1.jpg"  alt="" class="small"> 	
             <h3 style="margin-left:30px;color:orange"><center><strong><?php echo($test['testtitle']); ?></strong></center></h3>
          </div>
      
        </div>
        <div class="quiz_body">
       
          <div id="questions">
          <h3 style="color:dodgerblue"><center><b>Please red the instructions carefully  before you start the test</b></center></h3>

<ul style="list-type-circle;" style="font-family:cursive;color:blue;">
  <li >Please complete the test within the time given .</li>
  <li >Click one of the correct option in four choices. </li>
  <li >If the time limit is exceeded , the quiz session will be over automatically.</li>
  <li >Dont-try to open the other page in your brouser or else the test will be submitted automatically.</li>
  <li>   No of Que: <?php echo($test['numberofque']); ?></li>
  <li >You cannot attend the same test more than once.</li>
  <li >Please do not practice unethical means to complete the quiz</li>
  <li >Please complete the feedback form after completing the quiz. </li>
 


</ul>
<br><br>
  <center><a href="testslistuser.php" class="btn-next" style="background-color:red">Back </a> <a href="enquiry.php<?php echo('?testid='.$id);?>" style="margin-left:30px;" class="btn-next">Start Test</a></center>
 
          </div>

</div>
</div>
</div>

  
 

	
	
  </div>
  </div>
</div>
<div class="container">
<div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2019  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">Online Guru</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="#" target="_blank"> Designed By:</a></li>
          <li class="list-inline-item"><a class="my-1" href="#" target="_blank"> Sudeep Manasali</a></li>
          
        </ul>
      </div>
</div>
</div>
</body>
</html>
