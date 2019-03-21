<?php 
	$con=mysqli_connect("localhost","root","","e-commerce"); 
	session_start(); 
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
		include 'check-if-added.php'
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
	<div class="banner" style="margin-top:6%; background:url(banner1.jpg); background-repeat:fixed;">
		<div class="banner-image">
			<h2 align="center" style="padding-top:4%; color:#101010;"><b>Welcome to our Lifestyle Store!</b></h2>
			<p align="center" style=" margin-bottom:4%;" ><b>We have the best cameras, watches and shirts for you. No need to hunt
				around, we have all in one place</b><br><br>
			<!--<button type="button" href="#" class="btn btn-danger btn-lg" >Lets Explore</button>-->
			</p>
		</div>
	</div>
	<div class="row text-center">
	  <div class="container">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\Cannon EOS.jpg" alt="img-responsive"  width="217px"></img>
					<div class="caption">
						<h2>Canon EOS</h2>
						<p>price:Rs.36000</p>

						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(1))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\camera.jpg" alt="img-responsive" ></img>
					<div class="caption">
						<h2>Nikon DSLR</h2>
						<p>price:Rs.40000</p>

									<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(2))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>

									
									
									
						
						<!---<a href="cart.php"><button class="btn btn-primary btn-block" type="button" >Add to cart</button></a>--->
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\sonydslr.jpeg" alt="img-responsive " width="216px"></img>
					<div class="caption">
						<h2>Sony DSLR</h2>
						<p>price:Rs.46000</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(3))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\olympus.jpg" alt="img-responsive" width="190px"></img>
					<div class="caption">
						<h2>Olympus DSLR</h2>
						<p>price:Rs.50000</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(4))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>

	  </div>
	</div>
	<div class="row text-center">
	  <div class="container">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\hmtmilan.jpg" alt="img-responsive"></img>
					<div class="caption">
						<h2>HMT Milan</h2>
						<p>price:Rs.8000</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(5))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\H&W.jpg" alt="img-responsive"></img>
					<div class="caption">
						<h2>H&W</h2>
						<p>price:Rs.800</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(6))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\johnzok.jpg" alt="img-responsive"></img>
					<div class="caption">
						<h2>John Zok</h2>
						<p>price:Rs.1500</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(7))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\luisphil.jpg" alt="img-responsive"></img>
					<div class="caption">
						<h2>Luis Phil</h2>
						<p>price:Rs.1000</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(8))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>

	  </div>
	</div>
	

	<div class="row text-center">
	  <div class="container">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\Cannon EOS.jpg" alt="img-responsive"  width="217px"></img>
					<div class="caption">
						<h2>Canon EOS</h2>
						<p>price:Rs.36000</p>

						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(1))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\camera.jpg" alt="img-responsive" ></img>
					<div class="caption">
						<h2>Nikon DSLR</h2>
						<p>price:Rs.40000</p>

									<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(2))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>

									
									
									
						
						<!---<a href="cart.php"><button class="btn btn-primary btn-block" type="button" >Add to cart</button></a>--->
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\sonydslr.jpeg" alt="img-responsive " width="216px"></img>
					<div class="caption">
						<h2>Sony DSLR</h2>
						<p>price:Rs.46000</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(3))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\olympus.jpg" alt="img-responsive" width="190px"></img>
					<div class="caption">
						<h2>Olympus DSLR</h2>
						<p>price:Rs.50000</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(4))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>

	  </div>
	</div>
	<div class="row text-center">
	  <div class="container">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\hmtmilan.jpg" alt="img-responsive"></img>
					<div class="caption">
						<h2>HMT Milan</h2>
						<p>price:Rs.8000</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(5))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\H&W.jpg" alt="img-responsive"></img>
					<div class="caption">
						<h2>H&W</h2>
						<p>price:Rs.800</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(6))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\johnzok.jpg" alt="img-responsive"></img>
					<div class="caption">
						<h2>John Zok</h2>
						<p>price:Rs.1500</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(7))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
						<img src="img\luisphil.jpg" alt="img-responsive"></img>
					<div class="caption">
						<h2>Luis Phil</h2>
						<p>price:Rs.1000</p>
						
						<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(8))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>
						
					</div>
				</div>
			</div>

	  </div>
	</div>	
 </div> <!---End of Container-->
	
	<!--<div class="footer">
				<div class="container">
					<center>
					Copyright © <a href="bindex.php">Lifestyle Store.</a> All Rights
					Reserved” and “Contact Us: +91 90000 00000"
					</center>
				</div>
	</div>	--->
	<?php 
		include 'footer.php';
	?>
	
	
</body>
</html>