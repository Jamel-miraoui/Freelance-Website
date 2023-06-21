<?php
require_once('sessonchek.php');
include 'connbd.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $login = $_SESSION['login'];
  $query = "SELECT * FROM users where username ='$login'";
  $userdata= $db->prepare($query);
  $userdata->execute();
  $result = $userdata->fetch(PDO::FETCH_ASSOC);
  $userID = $result['id'];

  // Retrieve form data
  $title = $_POST['title'];
  $categorie = $_POST['categorie'];
  $description = $_POST['description'];

  // Check if cover image was uploaded
  if (isset($_FILES['cover_image']) && !empty($_FILES['cover_image']['name'])) {
    $coverImageName = basename($_FILES['cover_image']['name']);
    $coverImagePath = "uploads/" . $coverImageName;

    $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
    $coverImageType = strtolower(pathinfo($coverImagePath, PATHINFO_EXTENSION));

    // Validate cover image file type and size
    if (in_array($coverImageType, $allowTypes) && $_FILES['cover_image']['size'] < 10485760) { // Limit file size to 10MB
      move_uploaded_file($_FILES['cover_image']['tmp_name'], $coverImagePath);

      // Insert job data into the database
      $insert = $db->prepare("INSERT INTO jobs (title, categorie, description, cover_path,user_id) VALUES (:title, :categorie, :description, :cover_image, :userID)");
      $insert->bindParam(':title', $title);
      $insert->bindParam(':categorie', $categorie);
      $insert->bindParam(':description', $description);
      $insert->bindParam(':cover_image', $coverImagePath);
      $insert->bindParam(':userID', $userID);
      $insert->execute();

      if ($insert) {
        header("Location: uplodebookform.php?msg=1");
        exit;
      } else {
        header("Location: uplodebookform.php?msg=2");
        exit;
      }
    } else {
      header("Location: uplodebookform.php?msg=3");
      exit;
    }
  } else {
    header("Location: uplodebookform.php?msg=4");
    exit;
  }
}

$db = null; // Close the database connection
?>