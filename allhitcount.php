<?php 
function allhit_count() {
	$filename = 'allhitcount.txt';
	$handle = fopen($filename, 'r');
	$current = fread($handle, filesize($filename));
	fclose($handle);
	global $current_inc;
	$current_inc =  $current + 1;
	

	$handle = fopen($filename, 'w');
	fwrite($handle, $current_inc);
	fclose($handle);



 }

?>
