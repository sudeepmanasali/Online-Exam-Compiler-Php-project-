<?php
include('connection.php');
$id=$_GET['testid'];
$delete="delete from test where testid='$id'";
$deletetest=mysqli_query($conn,$delete);
if($deletetest)
{
  header('location:testlistadmin.php');
}
?>