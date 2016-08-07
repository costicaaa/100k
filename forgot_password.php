<?php
$email = $_POST["forgot_password"];

$host='localhost';
$username='root';
$password='';
$db_name='osutamii';
$tbl_name='members';
$conn = new mysqli($host,$username,$password,$db_name);
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
$sql="SELECT * from members WHERE email like '{$email}' ";
$result=$conn->query($sql);

	if (!$result->num_rows == 1) {
		echo "<p>Entered email is not in our database.</p>";
		echo "<a href='index.php'>Click here to return to the main page</a>";
	} 
	else {
		 while ($row= $result->fetch_assoc()) {
		$pass=$row["pass"];
		$account=$row["user"];

	}

	$to = "localhost";
	$subject = "Password recovery";
	$message = "Your username is " . $account . "\r\n" ."Your password is ". $pass . ".";
	$headers = "Password recovery";

	mail($to,$subject,$message,$headers);
	header("location:mail_sent_succesfully.html");

		        
        
		
	}	
	

?>