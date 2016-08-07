<!DOCTYPE html>
<html lang="en">
<head>
	<title>Get to 100000</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="butoane.js"></script>
	<link rel="stylesheet" type="text/css" href="cssfila_index.css">
</head>
<body>
<div class="row" >
	<div style="text-align:center">
		<div class="col-md-2"> <a href="index.php">The game</a> </div>
		<div class="col-md-2"> <a href="profilecheck.php">Profile</a> </div>
		<div class="col-md-2"> <a href="hallofame.php">HALL OF FAME</a> </div>
		<div class="col-md-2"> <a href="about.html">About</a> </div>
		<div class="col-md-2"> <a href="faq.html">F.A.Q.</a> </div>
		<div class="col-md-2"> <a href="contact.html">Contact</a> </div>
	</div>
</div>

<!-- Login & register div -->
<div class="row" >
	<div style="text-align:center">
		<div class="col-md-10"> </div>
		<div class="col-md-1"> <button type="button" class="btn btn-info " onclick=$('#loginmodal').modal('toggle')>Log in!</button> </div>
		<div class="col-md-1"> <button type="button" class="btn btn-info " onclick="location.href ='registerpage.php' ">Register </button> </div>
	</div>
</div>
<br>
<?php
session_start();
include 'userhitcount.php';
userhit_count();
?>
<?php // Game played xxxxx times
include 'allhitcount.php';
allhit_count();
?>
<p>Game played <?php echo $current_inc ?> times</p>
<br>
<div class="container">
	<h1 class="text-center">Try to get 100000 ! </h1>
</div>
<br>
<img src="adsleft.jpg" style="float:left; width:10%; height:10%;">
<img src="adsright.jpg" style="float:right; width:10%; height:10%;">
<br><br><br><br><br>
<p id="demo">0</p>
<br><br><br><br>
<div class="container-fluid"> <!-- Butoanele aranjate cu boostrap-->
  <div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-1"><button type="button" class="btn btn-warning btn-lg" onclick="adunare1()">&#160;&#160;1 - 100&#160;&#160;&#160;&#160;</button></div>
	<div class="col-sm-1"><button type="button" class="btn btn-warning btn-lg" onclick="adunare2()">&#160;100 - 500&#160;</button></div>
	<div class="col-sm-1"><button type="button" class="btn btn-warning btn-lg" onclick="adunare3()">500 - 1000</button></div>
	<div class="col-sm-1"><button type="button" class="btn btn-warning btn-lg" onclick="adunare4()">1000 - 5000</button></div>
	<div class="col-sm-4"></div>
  </div>
</div>
<br><br>
<!-- Buton de play again -->
<div class="container" id="tryagg">
	<button type="button" class="btn btn-danger btn-lg" id="b1" style="visibility: hidden" onclick="riload()">Play again</button>
</div>


<div class="container">  <!-- Modalu drq -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	
	  <!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Congratulations!</h4>
		</div>
			<div class="modal-body">
				<p>You scored  ONE HUNDRED THOUSAND! You are a lucky bastard! You should buy a lottery ticket this week ! </p>
				<p> If you want to appear on the HallOfFame, enter your name. Also, if you want to receive your 1$ prize, enter your paypal email. </p>
				<form action="insertintohallofame.php" method="post">
				<table>
				<tr>
				<td>Name: </td>
				<td> <input type="text" name="Nume" minlength="3" maxlength="12" required > 
				</td></tr><br>
				<td> Paypal Email:</td> <td><input type='mail' name='pp_email'> </td>
				</table>
				<div style="text-align:center"> 
					<input type="submit"> 
				</div>
		</form>
		  
			</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	  </div>
	  
	</div>
  </div>
  
</div>
<br>

<p id="par"><a href="http://localhost/Hallofame.php"> HALL OF FAME </a></p>
<div class="container" style="text-align:center">  <!-- Loginmodal -->
<!-- Modal -->
<div class="modal fade" id="loginmodal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title">Enter your username and password to log in. </h4>
</div>
<div class="modal-body">
<form name='form1' method='post' action='checklogin.php'>
<table>
<tr>
<td>Username:
</td>
<td><input type="text" name='myusername' required >
</td>
</tr>

<tr>
<td>Password: 
</td>
<td><input type="password" name="mypassword" required > 
</td>
</tr>
</table>
<div id="button_login_modal">
<br> <br>
<button  type="submit" class="btn btn-warning btn-lg">Submit</button>
</div>
</form>

</div>
<h3> Forgot your password? </h3> <br>
<!-- Email form for password reset HERE -->
<form action="forgot_password.php" method="post">
Enter your registration email(not necessarily your payment email) :
<br><br>
<input type="email" name="forgot_password" required>
<input type="submit" value="Submit">
</form>


<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>

</div>

</body>

</html>