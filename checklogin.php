<?php
$host='localhost';
$username='root';
$password='';
$db_name='osutamii';
$tbl_name='members';
$conn = new mysqli($host,$username,$password,$db_name);
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];



// Against mysql injectie
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);


$sql="SELECT * from members WHERE user like '{$myusername}' and pass like '{$mypassword}' ";
$result=$conn->query($sql);

	if (!$result->num_rows == 1) {
		echo "<p>Invalid username/password combination</p>";
	} 
	else {
        session_start();
        $_SESSION['username']=$myusername;
        $_SESSION['password']=$mypassword;
        
		header('location:index.php');
	}	
	
?>
 