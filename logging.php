<?php
	include 'db_connection.php';
	$conn = open_connection();

	if (isset($_POST['zaloguj'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		
		
		$sql = "SELECT * FROM users WHERE Usernames='$username' AND Passwords='$password'";
		$result = mysqli_query($conn, $sql);
		$results = mysqli_num_rows($result);
		
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['username'] = $username;
			echo "Zalogowano poprawnie!";
			echo "<p><a href='stronka1.php'> Powrót do strony głównej </a></p>";
		} else {
			echo "Zła nazwa użytkownia, bądź hasło.";
			echo "<p><a href='log1.php'> Powrót do panelu logowania </a></p>";
		}
	}
	
	$conn->close();
?>
