<?php
    // ============================
    // Insert shit into a DB 
    // ============================
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "osutamii";

$user=$_POST["user"];
$pass=$_POST["pass"];
$email=$_POST["email"];


// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   $sql="SELECT * FROM members WHERE email='$email'";
   $result=$conn->query($sql);

    if ($result->num_rows == 0) {
        $sql2 = "INSERT INTO members (user, pass, email) values ('$user', '$pass', '$email') ";
        $conn-> query($sql2); 
        header('location:index.php');
    }
    else {
        header("location:already_registered.php");
    }

   
?>