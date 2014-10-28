<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<div class= "container">
	<body>
	<?php 
	
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST["email"];

	$servername = "localhost";
	$username = "simon";
	$password = "aPs55NfANfbNEr7Q";
	$dbname = "PHP_application";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('$firstName', '$lastName', '$email')";

	if ($conn->query($sql) === TRUE) {
	    echo "<h1> Congratulations! You're signed up! </h1>";
	    echo '<form action="home.php"> <button type="submit" type="button" class="btn btn-primary">Continue to site!</button></form>';
	} else {
	    echo "Oh shit " . $sql . "<br>" . $conn->error;
	}
	echo "Connected successfully";
		?>

</div>
	
</body>
</html>