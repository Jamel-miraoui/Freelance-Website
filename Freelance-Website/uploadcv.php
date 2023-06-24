<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Connect to the database
  require_once 'connbd.php';
  require_once 'sessonchek.php'; 

  // Selecting user id
  $login = $_SESSION['login'];
  $query = "SELECT * FROM users WHERE username = :login";
  $userdata = $db->prepare($query);
  $userdata->bindParam(':login', $login);
  $userdata->execute();
  $result = $userdata->fetch(PDO::FETCH_ASSOC);
  $userID = $result['id'];

  // Define allowed PDF file types
  $allowTypesPDF = array('pdf');

  // Check if a file was uploaded
  if (isset($_FILES['pdf_file']) && $_FILES['pdf_file']['error'] === UPLOAD_ERR_OK) {
    // Get the file name
    $fileName = $_FILES['pdf_file']['name'];

    // Save the file extension
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    
    if (in_array($fileType, $allowTypesPDF)) {
      if ($_FILES['pdf_file']['size'] < 10485760) { // 10MB limit
        $targetDir = "../uploads/cv/";
        $targetFile = $targetDir . $fileName;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $targetFile)) {
          // Update the 'cv' column in the users table
          $update = $db->prepare("UPDATE users SET cv = :cv WHERE id = :userID");
          $update->bindParam(':cv', $targetFile);
          $update->bindParam(':userID', $userID);
          $update->execute();

          if ($update) {
            // File upload and database update successful
            header("Location: profile.php?msg=1");
            exit;
          } else {
            // Database update failed
            header("Location: profile.php?msg=3");
            exit;
          }
        } else {
          // File upload failed
          header("Location: profile.php?msg=4");
          exit;
        }
      } else {
        // File size exceeds the limit
        header("Location: profile.php?msg=5");
        exit;
      }
    } else {
      // Invalid file type
      header("Location: profile.php?msg=6");
      exit;
    }
  } else {
    // No file selected or upload error occurred
    header("Location: profile.php?msg=7");
    exit;
  }
}
?>
