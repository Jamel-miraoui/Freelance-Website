<?php
include 'navANDhead.php';
require_once('sessonchekadmin.php');
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  <h1>List of Uploded Jobs</h1>
  <table>

    <?php
    if ($_GET['msg'] == 1) {
      echo "accsepted suseesfuly";
    }
    // Connect to the database
    $servername = "localhost";
    $username = "sammy";
    $password = "password";
    $dbname = "FreeLance";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // Retrieve the list of pending 
    $sql = "SELECT * FROM jobs";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // Output data of each row
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="book-container">
          <div class="book">
            <img src="<?php echo $row['cover_path']; ?>" alt="Book 3">
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['categorie']; ?></p>
            <p>uploded by: <?php
                            $path = $row['user_id'];
                            $sql2 = "SELECT * FROM users WHERE id='$path'";
                            $result2 = $conn->query($sql2);
                            if ($result2->num_rows > 0) {
                              while ($row2 = $result2->fetch_assoc()) {
                                echo $row2['username'];
                              }
                            } else {
                              echo "error";
                            } ?></p>
            <a href='delete_book_Uplode.php?id=<?php echo urlencode($row["id"]); ?>'>Delete</a>

            </form>
          </div>
        </div>

    <?php
      }
    } ?>
  </table>
</body>

</html>
<style>
  .book-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    display: inline-block;


  }

  .book {
    /* width: 300px; */
    padding: 20px;
    text-align: center;
    background-color: #f2f2f2;
    border-radius: 8px;
  }

  .book img {
    /* width: 400%; */
    max-height: 400px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
  }

  .book h3 {
    font-size: 20px;
    margin-bottom: 8px;
  }

  .book p {
    font-size: 16px;
    margin-bottom: 16px;
  }

  .book a {
    display: inline-block;
    padding: 8px 16px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }

  .book a:hover {
    background-color: #0056b3;
  }

  .book form {
    margin-top: 16px;
    display: inline-block;
  }

  .book form input[type="submit"][value="Accept"] {
    background-color: green;
    color: #fff;
  }

  .aaa {

    padding: 8px 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #dc3545;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    margin-right: 10px;
  }

  .bbb {
    padding: 8px 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: green;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    margin-right: 10px;
  }
</style>


</body>

</html>