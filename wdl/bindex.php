<?php 
	require "connect.php";
	session_start(); 
		include 'header.php';
?>
<?php>
		if (isset($_SESSION['email'])) 
		{
			header('location: product.php'); 
		}
?>	
<html>
    <head>
        <link rel="stylesheet" href=" css\bootstrap.min.css" >
        <!--jQuery library--> 
        <script src=" js/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src=" js\bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bindex.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap FreeStyle Store</title>
    </head>
<body>
	<?php 
		include 'header.php';
		if (isset($_SESSION['email'])) 
		{
			header('location: product.php'); 
		}
	?>
	
	
	<!---<nav class="navbar navbar-inverse navbar-fixed-top navbar-responsive">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="bindex.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="bindex.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
	</nav>--->
	
	<div class="banner-image" style="background:url(banner1.jpg);">
		<div class="container">
			<center>
				<div id="banner_content" >
						<font color="white"><h1>We sell lifestyle.</h1>
						<p>Flat 40% OFF on premium brands</p><font>
						<br>
						<a href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
				</div>
			</center>
		</div>
	
	</div>
	
	<div class="container">
		<div class="row text-center">
			
				<div class="col-md-4 col-sm-4">
					<div class="thumbnail">
						<a href="bindex.php">
						<img src="img\watch.jpg" alt="Watches" width="350px"></img>
							<div class="caption">
								<h3>Watches</h3>
								<p>Choose among the best available in the world.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="thumbnail">
						<a href="bindex.php">
						<img src="img\shirt.jpg" alt="shirt" width="350px" ></img>
							<div class="caption">
								<h3>Shirts</h3>
								<p>Choose among the best available in the world.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="thumbnail">
						<a href="bindex.php">
						<img src="img\camera.jpg" alt="Camera" width="350px"></img>
							<div class="caption">
								<h3>Camera</h3>
								<p>Choose among the best available in the world.</p>
							</div>
						</a>
					</div>
				</div>
		
		</div>
	</div>
	
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