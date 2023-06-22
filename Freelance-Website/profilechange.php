<?php
require_once('sessonchek.php');
include 'connbd.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $login = $_SESSION['login'];
  $query = "SELECT * FROM users where username ='$login'";
  $userdata= $db->prepare($query);
  $userdata->execute();
  $result = $userdata->fetch(PDO::FETCH_ASSOC);
  $userID = $result['id'];


  $email= $_POST['email'];
  $address= $_POST['address'];
  $phone_number= $_POST['phone_number'];
  $additional_info= $_POST['additional_info'];

  // Check if cover image was uploaded
  if (isset($_FILES['profile_pic']) && !empty($_FILES['profile_pic']['name'])) {
    $coverImageName = basename($_FILES['profile_pic']['name']);
    $coverImagePath = "uploads/" . $coverImageName;

    $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
    $coverImageType = strtolower(pathinfo($coverImagePath, PATHINFO_EXTENSION));

    // Validate cover image file type and size
    if (in_array($coverImageType, $allowTypes) && $_FILES['profile_pic']['size'] < 10485760) { // Limit file size to 10MB
      move_uploaded_file($_FILES['profile_pic']['tmp_name'], $coverImagePath);

      // Insert job data into the database
      $insert = $db->prepare("UPDATE users SET  email = :email, address = :address, phone_number= :phone_number, additional_info=:additional_info, profile_pic = :profile_pic WHERE id = $userID");
      $insert->bindParam(':email', $email);
      $insert->bindParam(':address', $address);
      $insert->bindParam(':phone_number', $phone_number);
      $insert->bindParam(':additional_info', $additional_info);
      $insert->bindParam(':profile_pic', $coverImagePath);
      $insert->execute();

      if ($insert) {
        header("Location: modiff.php?msg=1");
        exit;
      } else {
        header("Location: modiff.php?msg=2");
        exit;
      }
    } else {
      header("Location: modiff.php?msg=3");
      exit;
    }
  } else {
    header("Location: modiff.php?msg=4");
    exit;
  }
}
$db = null; // Close the database connection
?>
