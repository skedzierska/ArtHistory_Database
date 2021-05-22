<?php
	include 'db_connection.php';
	$conn = open_connection();
	
	if (isset($_POST['update2'])) {
		
		$password2 = mysqli_real_escape_string($conn, $_POST['password2']);
		$password3 = mysqli_real_escape_string($conn, $_POST['password3']);
		$sql = "UPDATE users SET Passwords = '$password3' WHERE Passwords = '$password2' ";
		
		if (mysqli_query($conn, $sql)) {
		echo "Twoje hasło zostało zmienione";
		echo "<p><a href='stronka1.php'> Powrót </a></p>";
	} 

	}
	$conn->close();
?>
