<?php
error_reporting(0);
session_start();
include('connection.php');
   $queid = $_GET['queid'];
 
?><html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>OnlineGuru</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway" rel="stylesheet">
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

@media screen and (max-width:786px){
  .quiz2{
    display:none;
  }
}

    </style>
</head> 
<body style="background-image:url('images/library-science.jpg');background-repeat:no-repeat;background-size:cover;">
<nav class="navbar navbar-default navbar-expand-lg navbar-light " style="background:transparent;border:none;">
	<div class="navbar-header d-flex col">
		<img src="images/logo1.jpg" alt="" class="small"> 		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start bg-light">
		<script type="text/javascript">
            //function that submits the quiz
           
    
            //function that keeps the counter going
               function timer(secs){
                   var ele = document.getElementById("countdown");
                   ele.innerHTML = "Your Time Starts Now";			
                   var mins_rem = parseInt(secs/60);
                   var secs_rem = secs%60;
                   
                   if(mins_rem<10 && secs_rem>=10)
                       ele.innerHTML = "Time: "+"0"+mins_rem+":"+secs_rem+"";
                   else if(secs_rem<10 && mins_rem>=10)
                       ele.innerHTML = "Time: "+mins_rem+":0"+secs_rem+"";
                   else if(secs_rem<10 && mins_rem<10)
                       ele.innerHTML = "Time: "+"0"+mins_rem+":0"+secs_rem+"";
                   else
                       ele.innerHTML = "Time: "+mins_rem+":"+secs_rem+"";
    
                   if(mins_rem=="00" && secs_rem < 1){
                       document.forms['myfrm']['submit'].submit();                   }
                   secs--;
                //to animate the timer otherwise it'd just stay at the number entered
                //calling timer() again after 1 sec
                   var time_again = setTimeout('timer('+secs+')',1000);
               }
    
            //wwarning confirmation that appears on closing/refreshing the quiz window/tab
               
           </script>
          
		<ul class="nav navbar-nav navbar-right ml-auto">
			
			<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user"></i>  M S Sudeep</a></li>
			<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-phone"></i> 9380216994</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-google-plus"></i> SudeepManasali@gmail.com</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-time"></i> <div id="countdown" class="text-danger ">
                <script type="text/javascript">
                    timer(30);
                </script>
            
               </div>  </a></li>
			<li class="nav-item"><img src="images/sudeep.jpg" alt="" class="nav-link" style="height:130px;"> </a></li>
		</ul>
		
	</div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-9">
		<form action="config.php" method="POST" name="myfrm">
	 <?php
	   
	$id=$_SESSION['testid'];
	  $question=mysqli_query($conn,"select * from questions where questionid ='$queid' and testid='$id'");
	  $row=mysqli_fetch_array($question);
	  
	  ?>
	  <div style="padding-left:20px;">
	 
	  <div class="col-md-6">
	  <div class="form-group row">
                           
						   <div class="col-sm-8">
		  <div class="quiz">
			  <div class="quiz-header">
			  
          <div class="quiz_timer">
            <span class="time"><strong>Question no <?php echo($queid);?>:</strong> </span>
          </div>
			  </div>
			  <div class="quiz_body">
				  <p style="font-size:20px;"> <?php echo($row['question']);?></p>
				  <ul class="option_group">
					  <li class="option">  <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="quizcheck" value="<?php echo($row['opt1']);?>"><span style="margin-left:20px;" > <?php echo(($row['opt1']));?> </span></label>
								</li>
								<li class="option">  <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="quizcheck"  value="<?php echo($row['opt2']);?>"><span style="margin-left:20px;" > <?php echo($row['opt2']);?> </span></label>
								</li>
								<li class="option">  <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="quizcheck"  value="<?php echo($row['opt3']);?>"><span style="margin-left:20px;" > <?php echo($row['opt3']);?> </span></label>
								</li>
								<li class="option">  <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="quizcheck"  value="<?php echo($row['opt4']);?>"> <span style="margin-left:20px;" ><?php echo($row['opt4']);?> </span></label>
								</li>
				  </ul>
				  <input type="hidden" name="queid"  value="<?php echo $queid;?>">
			          
						<input type="submit" name="submit" class="btn-sub">
			  </div>
		  </div>
                          
                            
                            </div>
                          </div>
                        </div>
				
						<br>
						
							
						
						
						
	
	</form>
		</div>
		<div style="padding-top:20px;">
	  
	  </div>
	 
   </div>
		<div class="col-md-3">
<div class="quiz2">
	  <div class="quiz_header">
               
                <div class="quiz_timer">
                    <span class="time">Questions</span>
                </div>
</div>
            
            <div class="quiz_body">
    
    

         <ul class="option_group2">
            <li class="option2">1</li>
            <li class="option2">  2</li>
            <li class="option2">3</li>
			<li class="option2">
4</li>
			
	
          </ul> 
        </div>
</div>
		
		</div>
	</div>
</div>

   
     
        
	  </div></div>
	  </div>
	  </div>
	  </div>
	  </div>
	  <div class="" style="float:left;background-color:black;width:100%;margin-top:40px;">
	   <ul list-style-type="none" >
		   <li><button class="btn btn-next" style="margin-left:20px;">Attended</button>
		   

		   <button class="btn btn-next" style="margin-left:20px;background-color:red">Not Attended</button></li>
	   </ul>
		  
	  </div>
	  </div>
	  </div>
	 
</div>
</body>
</html>