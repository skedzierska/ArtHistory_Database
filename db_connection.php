<?php
function open_connection()
{
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "art_project";
	$conn = new mysqli($host, $user, $password, $db) or die("Connect failed: %s\n". $conn -> error);
 
	return $conn;
}
 
function close_connection($conn)
{
	$conn -> close();
} 
?>
