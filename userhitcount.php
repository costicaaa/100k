<?php
function userhit_count() {
	if (isset($_SESSION['password'])) {
	    $servername = "localhost";
	    $username = "root";
	    $password = "";
	    $dbname = "osutamii";
	    $conn = new mysqli($servername, $username, $password, $dbname);
	    $sql="SELECT * from members WHERE pass like '{$_SESSION['password']}'  ";
		$result=$conn->query($sql);
	    
		    while ($row= $result->fetch_assoc()) {
		        $jucat=$row['times_played'];
		        $_SESSION["date_joined"]=$row["Date_joined"];
		        $_SESSION["email"]=$row["email"];
		        $_SESSION["times_played"]=$row["times_played"]+1;
		    };
		$jucatup=$jucat+1; 
		$sql2 = "UPDATE members SET times_played={$jucatup} WHERE pass like '{$_SESSION['password']}'";
		$conn->query($sql2);
		echo "<a href='logout.php'>Logout</a>";
		echo '<br>';
		echo 'Hello, ' . $_SESSION['username'];
		echo '<br>';
		echo 'You played this game ' . $jucatup . ' times' ;
	}
    
}

?>
