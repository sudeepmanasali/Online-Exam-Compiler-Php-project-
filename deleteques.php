<?php

include('connection.php');

						
						
					
					
					
					
					
						$id=$_GET['testid'];
						$queid=$_GET['queid'];


	
                    $ins="delete from questions 
					      where testid='$id'and questionid='$queid'";
			        $insert=mysqli_query($conn,$ins);
					if($insert)
					{
						header('location:adminques.php?testid='.$id);
					}
					?>