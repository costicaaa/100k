<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="butoane.js"></script>
	<link rel="stylesheet" type="text/css" href="cssfila_profile_active.css">
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
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<p> Profile </p>
<table>
									<tr>
										<td>Username:
										</td>
										<td><?php echo $_SESSION["username"]; ?>
										</td>
									</tr>

									<tr>
										<td>Recovery mail:  
										</td>
										<td><?php echo $_SESSION["email"]; ?>
										</td>
									</tr>
									<tr>
										<td>Register date:
										</td>
										<td><?php echo $_SESSION["date_joined"]; ?>
										</td>
									</tr>
									<tr>
										<td>Times played since: 
										</td>
										<td><?php echo $_SESSION["times_played"]; ?>
										</td>
									</tr>
									
								</table>
									
								</form>

</body>
</html>