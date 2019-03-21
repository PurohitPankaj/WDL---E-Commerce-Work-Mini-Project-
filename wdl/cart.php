<?php require "connect.php";  session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="css\bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="js/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="js\bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bindex.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Product FreeStyle Store</title>
    </head>
<body>
<?php 
		include 'header.php';
		$price=0;
		$_SESSION['price']=$price;
	?>
	<!---nav class="navbar navbar-inverse navbar-fixed-top navbar-responsive">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="product.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-user"></span> Cart</a></li>
                        <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>Setting</a></li>
                        <li><a href="bindex.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
	</nav>--->
		<div class="container">
		  <div class="table-responsive">
            <table class="table table-striped table-hover table-responsive" style=" margin-top:10%; margin-left:25%; max-width:50%;">
				
                <tbody>
                    <tr><th>Item Number </th> <th>ItemName </th> <th>Price </th><th> </th></tr>
					<tr><td><br>
					<?php 
					
					$email=$_SESSION['email'];
					//echo $email;
							$select_query="select item_id from users_items ui inner join  users u on ui.user_id=u.id where u.email='$email'";
						$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
						
						if(mysqli_num_rows($select_query_result) == 0)
						{
							?><h1><a href="product.php"><?php echo 'First Add to Cart!';?></h1></a>
							<?php
						}
						else{
						while($check_email= mysqli_fetch_array($select_query_result))
						{
						echo $check_email['item_id'];
						?><br><br><?php
						}}?>
					
					
					</td>
					<td>
					<br>
					<?php
						$select_query="select i.name,i.price,i.pid from items i inner join users_items ui on i.pid=ui.item_id 
						inner join users u on u.id=ui.user_id where u.email='$email'";
						$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
						
						while($check_email= mysqli_fetch_array($select_query_result))
						{
						echo $check_email['name'];
						
						?><br><br><?php
						}?>
					
					</td>
					<td>
					<br>
					<?php
						$select_query="select i.name,i.price from items i inner join users_items ui on i.pid=ui.item_id 
						inner join users u on u.id=ui.user_id where u.email='$email'";
						$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
						
						while($check_email= mysqli_fetch_array($select_query_result))
						{	
						echo $price1=$check_email['price'];
						$price=$price+$price1;
						$_SESSION['price']=$price;
						?><br><br><?php
						}?>
					
					</td>
					<td>
					
					<?php
						$email=$_SESSION['email'];
					//echo $email;
							$select_query="select item_id from users_items ui inner join  users u on ui.user_id=u.id where u.email='$email'";
						$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
						
						if(mysqli_num_rows($select_query_result) == 0)
						{
							
						}
						else
						{
						while($row= mysqli_fetch_array($select_query_result))
						  {
						//$var=$check_email['item_id'];
						if($row['item_id']==1)
							{
								?><br><a href='cart-remove.php?id=1' class='remove_item_link'> Remove</a><br><?php
							}
							if($row['item_id']==2)
							{
								?><br><a href='cart-remove.php?id=2' class='remove_item_link'> Remove</a><br><?php
							}
							if($row['item_id']==3)
							{
								?><br><a href='cart-remove.php?id=3' class='remove_item_link'> Remove</a><br><?php
							}
							if($row['item_id']==4)
							{
								?><br><a href='cart-remove.php?id=4' class='remove_item_link'> Remove</a><br><?php
							}
							if($row['item_id']==5)
							{
								?><br><a href='cart-remove.php?id=5' class='remove_item_link'> Remove</a><br><?php
							}
							if($row['item_id']==6)
							{
								?><br><a href='cart-remove.php?id=6' class='remove_item_link'> Remove</a><br><?php
							}
							if($row['item_id']==7)
							{
								?><br><a href='cart-remove.php?id=7' class='remove_item_link'> Remove</a><br><?php
							}
							if($row['item_id']==8)
							{
								?><br><a href='cart-remove.php?id=8' class='remove_item_link'> Remove</a><br><?php
							}
						
						  }
						}?>
					
					</td>
					</tr>
					<tr>
					<td></td>
					<td>Total</td><td>₹ <?php echo $_SESSION['price'] ?></td>
					<td>
					<?php
					 if($_SESSION['price']==0)
					 { 
							echo '<a href="#" class="btn btn-block btn-danger" disabled>Confirm Order</a>';
						 
					 }
					 else 
					 {
					
				    ?>
						
					
					<button type="button" class="btn btn-primary" name="confirm" ><a href="success.php" style="color:white;">Confirm Order</a></button>
					<?php
					 }
					?>
					</td>
					</tr>
                </tbody>
            </table>
		  </div>
        </div>
		
	<div class="footer" style="margin-top:25.5%;"> 
				<div class="container">
					<center>
					Copyright © <a href="bindex.php">Lifestyle Store.</a> All Rights
					Reserved” and “Contact Us: +91 90000 00000"
					</center>
				</div>
	</div>
	
	
</body>
</html>