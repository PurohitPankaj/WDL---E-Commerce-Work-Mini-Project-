<?php 
require "connect.php";
session_start();
echo $pid=$_GET['id'];
echo $id=$_SESSION['id'];
	 $select_query="delete 	from users_items where item_id='$pid' and user_id='$id'";
	 $select_query_result= mysqli_query($con,$select_query) ;
	 if(!mysqli_error($con))
	 {
		 header('location:cart.php');
	 }
	 else
	 {
		echo "Something Went Wrong !! please try Again Later";
	 }
?>