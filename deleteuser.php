<?php
include('connection.php');
$id=$_GET['userid'];
$delete="delete from users where userid='$id'";
$deleteuser=mysqli_query($conn,$delete);
if($deleteuser)
{
  header('location:userslist.php');
}
?>