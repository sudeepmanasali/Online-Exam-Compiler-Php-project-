<?php
session_start();
include('connection.php');

if(isset($_SESSION['user']))
{
?>
<html>
<head>
<style>

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
  width: 100px;
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
.btn-next {
  border: none;
  padding: 15px 35px;
  background-color: #341f97;
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

    </style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>OnlineGuru</title>
	    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
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
</head>
<body>
<div class="wrapper">
      <div class="quiz">
        <div class="quiz_header">
          <div class="quiz_user">
            <img src="images/logo1.jpg" alt="">
          </div>
       
        </div>
        <div class="quiz_body">
          <div id="questions">
		  <h2 style="font-family:cursive;color:Green"><center>Result </center></h2>
		  <?php
			$tid=$_GET['testid'];
			$uid=14;
			  $sql=mysqli_query($conn,"select * from testresults where testid='$tid' and userid='$uid' ");
			  
			  $row=mysqli_fetch_array($sql);
			  
			  			  $sql2=mysqli_query($conn,"select * from test where testid='$tid'");
						  $row2=mysqli_fetch_array($sql2);
						  
			?>

            <ul class="option_group">
			<li class="option">Rewards: $ <?php echo($row['testrewards']); ?> </li>
			  <li class="option">Number of questions: <?php echo($row2['numberofque']); ?></li>
			  
            
              <li class="option"><i style="color:green;" class="fa fa-check-circle"></i>Attended: <?php echo($row['attended']); ?></li>
              <li class="option">Not attended <?php echo($row['notattended']); ?></li>
			  <li class="option">Marks : <?php echo($row['totalmarks']); ?></li>
			  <a href="testslistuser.php" class="btn-next" style="background-color:red;">close</a>
            </ul> 
          </div>
        </div>
      </div>
	</div>
	
    
  </div>
	     </div>
	  </div>
	  </div>
	  </div>
	  </body>
	  </html>
	  <?php
}
?>