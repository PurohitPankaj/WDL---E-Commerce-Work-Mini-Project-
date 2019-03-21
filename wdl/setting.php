<?php 
require "connect.php";
session_start();
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
	<div class="container" style="margin-top:7.1%;">
				<div class="row">
					<div class="col-xs-4 col-xs-offset-4">
						<div class="panel" id="panel">
							<div class="panel-heading">
								<Label><h3><b>Change Password</b></h3></label>
							</div>
							<div class="panel-body">
								<form class="form-group">
									<div class="form-group">
										<input type="password" name="oldpassword" class="form-control" placeholder="Old-Password"></input><br>
										<input type="password" name="newpassword" class="form-control" placeholder=" New-Password"></input><br>
										<input type="password" name="retypepassword" class="form-control" placeholder=" Re-Type New Password"></input><br>
										
									</div>
									<button type="Submit "class="btn btn-primary" >Change</button>
								</form>
							</div>
						</div>
					</div>
				</div>
	</div>
	
	<div class="footer" style="margin-top:15%;"> 
				<div class="container">
					<center>
					Copyright © <a href="bindex.php">Lifestyle Store.</a> All Rights
					Reserved” and “Contact Us: +91 90000 00000"
					</center>
				</div>
	</div>
	
</body>
</html>