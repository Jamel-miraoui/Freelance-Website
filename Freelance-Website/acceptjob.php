<?php
include 'navANDhead.php';
require_once('sessonchekadmin.php');

ini_set("display_errors",'1');
error_reporting(E_ALL);
// Connect to the databases
$servername = "localhost";
$username = "sammy";
$password = "password";
$dbname = "FreeLance";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed:" . $conn->connect_error);
}
// Retrieve the book information from the pending database
$book_id = $_GET["id"];
$sql = "SELECT * FROM jobspending WHERE id=".$book_id;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
	$row = $result->fetch_assoc();
	$title = $row["title"];
	$cat = $row["categorie"];
	$description = $row["description"];
	$cover_path = $row["cover_path"];
	$prix = $row["prix"];
	$user_id = $row["user_id"];

	

	$sql = "INSERT INTO jobs (title, categorie, description, cover_path, user_id,prix) VALUES ('$title', '$cat', '$description','$cover_path','$user_id','$prix')";
	if ($conn->query($sql) === TRUE) {
		// Delete the book from the pending database
		$sql = "DELETE FROM jobspending WHERE id=".$book_id;
		if ($conn->query($sql) === TRUE) {
			echo "Book accepted and moved to the books database successfully";
			header("Location: ShowPendingjobs.php?msg=1");

		} else {
			echo "Error deleting book from pending database: " . $conn->error;
		}
	} else {
		echo "Error inserting book into books database: " . $conn->error;
	}
} else {
	echo "Book not found in pending database";
}
$conn->close();
?>
