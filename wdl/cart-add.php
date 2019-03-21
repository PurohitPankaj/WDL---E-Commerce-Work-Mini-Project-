<?php 
require "connect.php";
session_START();
include "header.php";
?>
<?PHP
$item_id=$_GET['id'];
echo $item_id;
	 $select_uid="select id from users where email='".$_SESSION['email']."'";
	 $select_uids= mysqli_query($con,$select_uid) or die(mysqli_error($con));
	 $check_uid= mysqli_fetch_array($select_uids);
	 echo $check_uid[0];
$select_query="insert into users_items (user_id,item_id,status) values ('$check_uid[0]','$item_id','Added to cart')";
$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
$check_email= mysqli_fetch_array($select_query_result);
header('location:product.php?signup_connected=Successfully Register ');
?>