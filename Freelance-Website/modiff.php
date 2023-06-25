<?php
require_once('sessonchek.php');
require_once('connbd.php');

$login = $_SESSION['login'];
$query = "SELECT * FROM users where username ='$login'";
$userdata = $db->prepare($query);
$userdata->execute();
$result = $userdata->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/form.css">
  <title>uplode book form</title>
</head>
<div class="formbold-main-wrapper">

  <div class="formbold-form-wrapper">
    <img width="500" src="resorses/from3.jpg">

    <form action="profilechange.php" method="POST" enctype="multipart/form-data">
      <label for="title" class="formbold-form-label">Change infos:</label>

      <br>
      <div>
        <label for="description">Email : </label>
        <input type="email" name="email" id="email" class="formbold-form-input" value="<?php echo $result["email"]; ?>"><br>
      </div>
      <br>
      <div>
        <label for="description">Address :</label>
        <input type="text" name="address" id="address" class="formbold-form-input" value="<?php echo $result["address"]; ?>"><br>
      </div>
      <br>
      <div>
        <label for="description">Phone_number :</label>
        <input type="text" name="phone_number" id="phone_number" class="formbold-form-input" value="<?php echo $result["phone_number"]; ?>" ><br>
      </div>
      <br>
      <div>
        <label for="description">Additional_info :</label>
        <input type="text" name="additional_info" id="additional_info" class="formbold-form-input" value="<?php echo $result["additional_info"]; ?>"><br>
      </div>

      <br>
      <div>
        <label for="cover_image">Profile Picture:</label>
        <input type="file" name="profile_pic" id="profile_pic" class="formbold-form-input formbold-form-file" value="<?php echo $result["profile_pic"]; ?>"><br>
      </div>

      <div class="formbold-checkbox-wrapper" hidden >
        <label for="supportCheckbox" class="formbold-checkbox-label">
          <div class="formbold-relative">

            <div class="formbold-checkbox-inner">
              <span class="formbold-opacity-0">
                <svg width="11" height="8" viewBox="0 0 11 8" class="formbold-stroke-current" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.81868 0.688604L4.16688 5.4878L2.05598 3.29507C1.70417 2.92271 1.1569 2.96409 0.805082 3.29507C0.453266 3.66742 0.492357 4.24663 0.805082 4.61898L3.30689 7.18407C3.54143 7.43231 3.85416 7.55642 4.16688 7.55642C4.47961 7.55642 4.79233 7.43231 5.02688 7.18407L10.0696 2.05389C10.4214 1.68154 10.4214 1.10233 10.0696 0.729976C9.71776 0.357624 9.17049 0.357625 8.81868 0.688604Z" fill="white" />
                </svg>
              </span>
            </div>
          </div>
          <?php
          if ($_GET['msg'] == 1) {
            echo "<a>Book Alredy Exictes</a>";
          }
          if ($_GET['msg'] == 2) {
            echo "<p>Invalid File Size</p>";
          }
          if ($_GET['msg'] == 3) {
            echo "<p>Invalid File Tipe (PDF only)</p>";
          }
          if ($_GET['msg'] == 4) {
            echo "<p>Error: No file uploaded.</p>";
          }
          if ($_GET['msg'] == 5) {
            echo "<p>votre demande était envoyée à l'administrateur </p>";
          }
          ?>
        </label>
      </div>

      <div>
        <a href="profile.php"><input type="" value="Back to Profile" class="formbold-btn"></a>
        <input type="submit" value="Upload" class="formbold-btn">
      </div>

      
      <?php
  if(isset($_GET['msg'])) {
    $message = $_GET['msg'];
    
    // Define message text and color
    $text = '';
    $color = '';

    if($message == 1) {
      $text = 'Job uploaded successfully.';
      $color = 'green';
    } elseif($message == 2) {
      $text = 'Upload error.';
      $color = 'red';
    } elseif($message == 3) {
      $text = 'Invalid cover image size.';
      $color = 'red';
    } elseif($message == 4) {
      $text = 'Invalid cover image.';
      $color = 'red';
    }
    // Output the message with appropriate color
    echo '<p style="color: '.$color.'; text-align: center;">'.$text.'</p>';
  }
?>


    </form>
  </div>
</div>

</body>

</html>