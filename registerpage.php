<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="butoane.js"></script>
	<link rel="stylesheet" type="text/css" href="cssfila_registerpage.css">
	
	
</head>
<body>
<div class="row" >
<div style="text-align:center">
	<div class="col-md-2"> <a href="index.php">The game</a>
	</div>
	<div class="col-md-2"> <a href="profilecheck.php">Profile</a>
	</div>
	<div class="col-md-2"> <a href="hallofame.php">HALL OF FAME</a>
	</div>
	<div class="col-md-2"> <a href="about.html">About</a>
	</div>
	<div class="col-md-2"> <a href="faq.html">F.A.Q.</a>
	</div>
	<div class="col-md-2"> <a href="contact.html">Contact</a>
	</div>
	</div>
</div>
<?php 
session_start();
session_destroy();
?>
<br><br><br><br><br><br><br>
<p> Complete the following form to create an account :) </p>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container" >
								<form action="insertintomembers.php" method="post">
								<table>
									<tr>
										<td>Username:
										</td>
										<td><input type="text" name="user" required >
										</td>
									</tr>

									<tr>
										<td>Password: 
										</td>
										<td><input type="password" name="pass" required > 
										</td>
									</tr>
									<tr>
										<td>Mail (for recovery): 
										</td>
										<td><input type="email" name="email" required > 
										</td>
									</tr>
									
								</table>
									<div id="submit_button_reg_page">
									<br><br>
									<button type="submit" class="btn btn-warning btn-lg">Submit</button>
									</div>
								</form>
</div>


</body>
</html>