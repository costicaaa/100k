<?php
    // ============================
    // Insert shit into a DB 
    // ============================
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "osutamii";

    $Nume=$_POST["Nume"];
    $pp_email=$_POST["pp_email"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //Insert shit into DB
    //Check if the retard wrote something decent not only free spaces ( but spaces allowed) || merge redirect din index de la link catre hall of fame / hallofame2.php no longer needed
    if (ctype_alnum(str_replace(' ', '',$Nume))) {
    	$sql = "INSERT INTO hofwins (Nume, pp_email)
        VALUES ('$Nume', '$pp_email')";
        $conn->query($sql);
        header('location:hallofame.php');
    }
?>