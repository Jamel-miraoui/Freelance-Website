<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = $_POST["user"];
$password = $_POST["psw"];
$email = $_POST["email"];

$host = "localhost";
$user = "sammy";
$pasw = "password";
$database = "FreeLance";
$conn = new mysqli($host, $user, $pasw, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$sql1 = "SELECT * FROM users WHERE username=? OR email=?";
$stmt1 = $conn->prepare($sql1);
$stmt1->bind_param("ss", $username, $email);
$stmt1->execute();
$result = $stmt1->get_result();

if ($result->num_rows == 0) {
    $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $email);

    // Execute the statement and check for errors
    if ($stmt->execute() === false) {
        die("Error: " . $sql . "<br>" . $conn->error);
    } else {
        session_start();
        $_SESSION['login'] = $username;

        $stmt->close();
        $conn->close();

        header("Location: ../../index.php");
        exit;
    }
} else {
    header("Location: ../../login.php?msg=3");
    exit;
}
?>
