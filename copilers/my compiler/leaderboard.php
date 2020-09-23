<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Online Guru</title>


                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
.footer ul li
{
	margin:2px;
}
.carde{
	background-color:#ffffff;
	border:1px solid black;
	margin-left:83px;
}
.row{
	border-shadow:2px 2px 2px black; 
}
@media screen and (min-width:786px){
	a{
		color:black;
	}

.footer
{
display:none;	
}
}
</style>




</head>
<body class="bg-light" >
<?php  include('topnav.php');?>
</div>
<div class="container-fluid " >
<div class="container" style="background-color:white;padding:10px;paddinng-bottom:0px;">
<h6 class="text-primary">Leaderboard</h6>
<h2>Leaderboard</h2>
<br>
</div>
<div class="container bg-light" style="height:20px">


</div>

<div class="container bg-white shadow-lg p-3 mb-5 bg-white rounded" > 
<div class="jumbotron " style="background-color:white">
<div class="row">
  <div class="col-md-8" style="background-color:white;padding:10px;border:none;border-shadow:1px 1px 1px white">
 
<table class="table ">
  <thead class="thead-light">
    <tr>
      <th scope="col">Student</th>
      <th scope="col">Rank</th>
      <th scope="col">District</th>
      <th scope="col">Score</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">@sudeep</th>
      <td>1</td>
      <td>Bellary</td>
      <td>20.5</td>
    </tr>
    <tr>
 <th scope="row">@Mahesh</th>
      <td>2</td>
      <td>Bellary</td>
      <td>20.5</td>
    </tr>
    <tr>
      <th scope="row">@Munna</th>
      <td>3</td>
      <td>Bellary</td>
      <td>20.5</td>
    </tr>
  </tbody>
</table>
</div>
<div class="col-md-4 " style="background-color:white;border:none;border-shadow:1px 1px 1px white">
 <h5 class="text-muted"><i class="fa fa-user" style="font-size:20px;"></i> Hackers</h5>
 <input type="radio" style="color:green"> All<br>
 <input type="radio" style="color:green"> Friends<br>
 <br>
  <h5 class="text-muted"><i class="fa fa-filter" style="font-size:20px;"></i> Filter</h5>
 <input type="radio" style="color:green"> Country<br>
 <input type="radio" style="color:green"> Hackers<br>
 <input type="radio" style="color:green"> Ranks
 
</div>
</div>
</div>
</div>

</div>
<?php include('footer.php'); ?>
</body>
</html>


