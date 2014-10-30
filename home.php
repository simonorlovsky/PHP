<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<body>
<div class= "container">

	<h1>You made it in!</h1>
	<h5>yipee!</h5>
	<br>
	<?php
	$servername = "localhost";
	$username = "simon";
	$password = "aPs55NfANfbNEr7Q";
	$dbname = "libstats";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT full_name FROM libraries";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "name: " . $row["full_name"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
	?>
	

</div>



</body>
</html>