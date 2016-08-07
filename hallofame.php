<html>
<head>
<link rel="stylesheet" type="text/css" href="cssfila-halofame.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="cssfila-halofame.css">
<title>Hall of fame</title>
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
<br>
<br>


<h1> HALL OF FAME </h1>
<br>
<br>

<br>
<br>

<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "osutamii";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
//Tabela din halofame
    $sql2 = "SELECT ID, Nume, Data FROM hofwins";
    $result = $conn->query($sql2);


         echo "<table>
         			<tr>
	         			<th>#</th>
	         			<th>Name</th>
	         			<th>Data</th>
         			</tr>";
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<tr>
             <td>" . $row["ID"]. "</td>
             <td>" . $row["Nume"]. " </td>
             <td>". $row["Data"]. "</td></tr>";
         }
         echo "</table>";

    $conn->close();
    ?>
<br>
<br>
<br>
<br>
<br>
<div class="container" id="tryagg">
<a href="http://localhost/" > <button type="button" class="btn btn-danger btn-lg" >Play again</button> </a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>






