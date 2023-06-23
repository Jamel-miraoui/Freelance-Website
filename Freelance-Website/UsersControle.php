<?php
include 'navANDhead.php';
// require_once('sessonchekadmin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/scrollbar.css">
	<link rel="stylesheet" href="css/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/tipso.css">
	<link rel="stylesheet" href="css/chosen.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>

	
	
	<table class="styled-table">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>Action</th>
		</tr>

		<?php
		// connect to the database (replace with your own database credentials)
		$host = 'localhost';
		$username = 'sammy';
		$password = 'password';
		$dbname = 'FreeLance';

		$conn = new mysqli($host, $username, $password, $dbname);

		// check if the connection was successful
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// check if the search form has been submitted
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$search = $_POST['search'];

			// search for users by username, email, or ID
			$sql = "SELECT * FROM users WHERE username LIKE '%$search%' OR email LIKE '%$search%' OR id LIKE '%$search%'";
		} else {
			// retrieve all users from the database
			$sql = "SELECT * FROM users";
		}

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['username'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>";
					echo "<button class='button-18' role='button'><a href='UpdateUser.php?id=" . $row['id'] . "'>Modify</a> </button>";
					echo "<button class='button-19' role='button'><a href='DeleteUsr.php?id=" . $row['id'] . "'>Delete</a></button>";
					echo "</td>";
					echo "</tr>";
				}
			} else {
				echo "0 results";
			}

			$conn->close();
		?>
	</table>
	

	<br>
    
</body>
<style>



	
</style>
	
</html>
