<?php

include('connection.php');
if(isset($_POST['Login']))
{
    session_start();

    $email=$_POST['email'];
    $pass=mysqli_real_escape_string($conn,$_POST['password']);


    $sql=mysqli_query($conn,"select * from users where email='$email' and password='$pass' ");
    
    $res=mysqli_fetch_array($sql);
    if($res)
    {
        $_SESSION['user']=$res['userid'];
        header("location:Profile.php");
     
    }
    else{
        ?><script>alert('Invalid email or password ');</script><?php
       
    }
   

}

?>