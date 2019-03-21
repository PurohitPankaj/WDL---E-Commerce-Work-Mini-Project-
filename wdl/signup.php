<?php 
require "connect.php";
//session_start();
?>
<html>
  <head>
        <link rel="stylesheet" href=" css\bootstrap.min.css" >
        <!--jQuery library--> 
        <script src=" js/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src=" js\bootstrap.min.js"></script>
		<!---<link rel="stylesheet" href="css/bindex.css">--->
		<link rel="stylesheet" href="css/bindex.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SignUp FreeStyle Store</title>
	<style>
	</style>
  </head>
<body>
	<?php 
		include 'header.php';
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
	<div class="container" style="margin-top:7.1%;">
				<div class="row">
					<div class="col-xs-4 col-xs-offset-4">
						<div class="panel" id="panel">
							<div class="panel-heading">
								<Label><h3><b>SIGN UP</b></h3></label>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="signup_script.php">
									<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Enter Name"></input><br>
									
								<input type="Email" name="email" class="form-control" placeholder=" Email " required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
								 <br>
								 <div> <?phpecho $_GET['email_error']?></div>
								<input type="password" name="password" class="form-control" placeholder=" Password (Min 6 Character)" required = "true" pattern=".{6,}">
								</input><br>
									<input type="number" name="mobile" class="form-control" placeholder="Mobile Number" pattern=".{10,10}"></input><br>
									<input type="text" name="city" class="form-control" placeholder=" city"></input><br>
									<input type="text" name="address" class="form-control" placeholder="Address"></input><br>
									</div>
									<button type="Submit "class="btn btn-primary" >Submit</button>
								</form>
							</div>
							<div class="panel-footer">
								Have an account? <a href="login.php">Login</a>
							</div>
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