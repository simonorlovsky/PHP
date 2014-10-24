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
	Your email address is: <?php echo $_POST["email"]; ?> <br>

	<?php
	$servername = "localhost";
	$username = "simon";
	$password = "aPs55NfANfbNEr7Q";
	$dbname = "PHP_application";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('Simon', 'Orlovsky', 'simon.orlovsky@yahoo.com')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	?>
</div>

</body>
</html>