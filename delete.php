<?php
	include 'db_connection.php';
	$conn = open_connection();
	
	if (isset($_POST['usun'])) {
		
		$username1 = mysqli_real_escape_string($conn, $_POST['username1']);
		$sql = "DELETE FROM users WHERE Usernames = '$username1' ";
		
		
		if (mysqli_query($conn, $sql)) {
		echo "Twoje konto zostało usunięte";
		echo "<p><a href='stronka1.php'> Powrót </a></p>";
	}

	}
	$conn->close();
?>
