<?php
// ini_set("display_errors",'1');
// error_reporting(E_ALL);
require_once('sessonchek.php'); 

$servername = "localhost";
$username = "sammy";
$password = "password";
$dbname = "FreeLance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
include 'navANDhead.php';      
$search_term = $_GET['search'];

$sql = "SELECT * FROM jobs WHERE title LIKE '%" . $search_term . "%' OR description LIKE '%" . $search_term . "%' OR categorie LIKE '%" . $search_term . "%'";

$result = $conn->query($sql);
//start loking up for info 
echo "<table class='styled-table'>";
if ($result && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<h3>results in Jobs</h3>";
    echo "<thead><tr><th>Title</th><th>Description</th><th>Categorie</th><th></tr></thead>";
    echo "<tbody>";
    echo "<tr><td>" . $row["title"]. "</td><td>" . $row["description"]. "</td><td>" . $row["categorie"]. "</td><td></td><td><a href=";
  }
  echo "</tbody>";
  echo "</table>";
}

$conn->close();

?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
