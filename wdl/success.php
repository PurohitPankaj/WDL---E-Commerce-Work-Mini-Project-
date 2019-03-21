<style>
	.col{
		border:1px solid #000;
	}
</style>
<?php
	include'links.php';
	include'connect.php';
	session_start();
	$price1=$_SESSION['price'];
	if(!isset($_SESSION['email'])) 
	{
		header('location:bindex.php'); 
	}
	else
	{
		?>
		<br>
		<div class="container">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
            <div class="jumbotron">
                <h1></h1>
			<div class="row">
				
			<div class=" col-xs-5 col-xs-offset-4">
				<h2>Total Price ₹<?php echo $price1;
				?></h2>
			</div>
			</div>
			
			<div class="row text-center">		
			<div class=" col-xs-11 col-xs-offest-4 col">
				<h3>Your order is confirmed. Thank you for shopping with us. <a href="product.php">Click here </a>to purchase any other item.</h3>
			</div>
			</div>	
            </div>
        </div>
	<?php	
	}
	//echo $_SESSION['id'];
	//echo $email=$_SESSION['email'];
	//echo $id=$_SESSION['id'];
	$select_query="select item_id from users_items ui inner join  users u on ui.user_id=u.id where u.email='$email'";
	$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
	while($row= mysqli_fetch_array($select_query_result))
	{
		$delete_query="delete from users_items where item_id='$row[0]' and user_id='$id'";
		$delete_query_result= mysqli_query($con,$delete_query) or die(mysqli_error($con));
	}
						
?>