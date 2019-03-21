<!DOCTYPE php>
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
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-responsive">
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
	</nav>
	  <div class="container-fluid">
		<div id="banner_image" style="background-image:url(banner1.jpg);" >
			<div class="container">
				<div id="banner_content">
						<h1>We sell lifestyle.</h1>
						<p>Flat 40% OFF on premium brands</p>
						<br>
						<a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
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
	
		<div>
    </body>
</html>