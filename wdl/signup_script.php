<?php
 require "connect.php";
 session_start();
 //$conn=mysqli_connect("localhost","root","","e-commerce");

$Name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$pass = $_POST['password'];
$password = md5($pass);
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$address = $_POST['address'];
$select_query="select email from users where email='".$_POST['email']."'";
$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
$check_email= mysqli_fetch_array($select_query_result);
 if($check_email>0)
 {
	header('location: bindex.php?email_error=Enter Email is Already register');
 }
 else
 {
$user_registration_query = "insert into users(Name,email,password,mobile,city,address) values ('$Name', '$email', '$password', '$mobile', '$city' , '$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
 $_SESSION['email']=$email;
 $_SESSION['id']= mysqli_insert_id($con);
 header('location:product.php');
 }
?>