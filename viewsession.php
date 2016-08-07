<?php 
session_start();
if (isset($_session['jucat'])) {
	echo $_session['jucat'];
}
else {
	echo' naspa';
}
?>