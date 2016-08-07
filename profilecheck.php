<?php
session_start();
if (isset($_SESSION['username'])) {
	header("location:profile_active.php");
	}
	else {
	header("location:profile_not_active.html");
	}
?> 