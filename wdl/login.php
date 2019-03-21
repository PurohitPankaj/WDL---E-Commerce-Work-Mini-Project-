<?php 
require "connect.php";
?>
<html>
    <head>
        <link rel="stylesheet" href="css\bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="js/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="js\bootstrap.min.js"></script>
		<!---<link rel="stylesheet" href="css/bindex.css">--->
		<link rel="stylesheet" href="css/bindex.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login FreeStyle Store</title>
	<style>
		#panel{margin-top:28.5%; border:;}
		.content{ padding-top:4%; }
		.footer{ margin-top:9%; }
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
	</div>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-5 col-xs-offset-3">
						<div class="panel panel-primary" id="panel">
							<div class="panel-heading">
								<h3>LOGIN</h3>
							</div>
							<div class="panel-body">
								<p class="text-warning">Login to make a purchase</p>
								<form class="form-group" method="POST" action="login_submit.php">
									<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder=" Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></input><br>
									<input type="password" name="password" class="form-control" placeholder=" Password" required = "true" pattern=".{6,}"></input>
									<div> <?phpecho $_GET['email_error']?></div>
									</div>
									<button type="Submit "class="btn btn-primary"  >Login</button>
								</form>
							</div>
							<div class="panel-footer">
								Don't have an account? <a href="signup.php">Register</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="footer">
				<div class="container">
					<center>
					Copyright © <a href="bindex.php">Lifestyle Store.</a> All Rights
					Reserved” and “Contact Us: +91 90000 00000"
					</center>
				</div>
	</div>
</body>
</html>