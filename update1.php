<?php
	include 'db_connection.php';
	$conn = open_connection();
	
	if (isset($_POST['update1'])) {
		
		$username2 = mysqli_real_escape_string($conn, $_POST['username2']);
		$username3 = mysqli_real_escape_string($conn, $_POST['username3']);
		$sql = "UPDATE users SET Usernames = '$username3' WHERE Usernames = '$username2' ";
		
		if (mysqli_query($conn, $sql)) {
		echo "Twoja nazwa użytkowania została zmieniona";
		echo "<p><a href='stronka1.php'> Powrót </a></p>";
	} 

	}
	$conn->close();
?>
