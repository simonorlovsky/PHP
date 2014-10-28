<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<div class= "container">
	<body>
	<?php 
	// $firstName = (string)$_POST["firstName"];
	// $lastName = (string)$_POST["lastName"];
	// $email = (string)$_POST["email"]; 
	?>

	Welcome <?php echo $_POST["firstName"]; ?><br>
	Your last name is: <?php echo $_POST["lastName"]; ?><br>

	<?php
	$servername = "localhost";
	$username = "simon";
	$password = "aPs55NfANfbNEr7Q";
	$dbname = "PHP_application";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$result = mysqli_query($con,"SELECT * FROM MyGuests
	WHERE firstname=");

	while($row = mysqli_fetch_array($result)) {
	  echo $row['firstname'] . " " . $row['lastname'];
	  echo "<br>";
	}
	?>

	
</div>

</body>
</html>