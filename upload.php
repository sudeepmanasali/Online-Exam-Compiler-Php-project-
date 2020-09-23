<?php
session_start();
$userid=$_SESSION['userid'];
include('connection.php');
if(isset($_POST['submit']))
{   
    $file=$_FILES['file'];
	
    $fileName = $_FILES['file']['name'];
	   $fileTmpname = $_FILES['file']['tmp_name'];
	   $fileSize = $_FILES['file']['size'];  
	   $fileError = $_FILES['file']['error'];
	   	   $fileType = $_FILES['file']['type'];
	   
	   $fileExt = explode('.',$fileName);
	   $fileActualExt = strtolower(end($fileExt));
	   $allowed = array('jpg','jpeg','png','pdf');
      if(in_array($fileActualExt, $allowed))
	  {
		  if($fileError==0)
		  {
			  if($fileSize < 1000000)
			  {
				  $fileNewName = uniqid('', true).".".$fileActualExt;
				  $fileDestination = 'profilephotos/'.$fileNewName;
                  move_uploaded_file($fileTmpname, $fileDestination);		
                   
                   
	
                	$tro="update users set images='$fileNewName' where userid='$userid' ";
	              $joi=mysqli_query($conn,$tro);					
				  header('location:userhome.php');
			  }
			  else
			  {
				  echo"your file is too big!";
			  }
		  }
		  else
		  {
			  echo"theere was an error in uploading this file";
		  }
	  }
	  else
	  {
		  echo"you cannot upload the file of this type";
	  }
}
?>
