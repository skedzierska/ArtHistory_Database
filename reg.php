<?php
	include 'db_connection.php';
	$conn = open_connection();
	$set = !empty($_POST['username'] && $_POST['password']);
	
	if($set) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "INSERT INTO users (Usernames, Passwords) VALUES ('$username', '$password')";
		
		if(mysqli_query($conn, $sql)) {
			

			echo header('location: log1.php');
		} else {
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	}
	
	
	$conn->close();

?>
