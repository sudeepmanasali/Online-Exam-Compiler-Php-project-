<?php
session_start();
include('connection.php');
if(isset($_POST['update']))
{       $ip=$_SESSION['userid'];

 
                   $firstname=mysqli_real_escape_string($conn,$_POST['firstName']);
				   $lastname=mysqli_real_escape_string($conn,$_POST['lastName']);
				   $phone=mysqli_real_escape_string($conn,$_POST['phone']);
				   $place=mysqli_real_escape_string($conn,$_POST['place']);
				   $email=mysqli_real_escape_string($conn,$_POST['email']);
				 $password=mysqli_real_escape_string($conn,$_POST['password']);
					   $tro="update users set  firstname='$firstname', lastname='$lastname', place='$place',
                       email='$email', phone='$phone' where userid='$ip'";
                	
	              $joi=mysqli_query($conn,$tro);					
				  header('location:profile.php');
				   
}
?>
