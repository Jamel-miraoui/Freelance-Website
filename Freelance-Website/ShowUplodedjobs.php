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
  <main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
    <!--Categories Start-->
    <div class="wt-haslayout wt-main-section">
      <div class="wt-btnarea" style="text-align: center;">
      <h1>List of Uploded Jobs</h1>
      <h4 style="color: darkgreen;"><?php if ($_GET['msg'] == 1) {echo "Job deleted suseesfuly"; } ?></h4>
      </div>
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
            <div class="wt-articletabshold">
              <div class="tab-content wt-haslayout">
                <div class="wt-contentarticle tab-pane active fade show" id="alltab">
                  <div class="row">
                    <?php
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


                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                          <div class="wt-article">
                            <figure>
                              <img src="<?php echo $row['cover_path']; ?>" alt="img description">
                            </figure>
                            <div class="wt-articlecontent">
                              <div class="wt-title">
                                <h2><?php echo $row['title']; ?></h2>
                              </div>
                              <ul class="wt-postarticlemeta">
                                <li>
                                  <a href="javascript:void(0);">
                                    <i class="lnr lnr-clock"></i>
                                    <span>Prix : <?php echo $row['prix']; ?></span>
                                  </a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);">
                                    <i class="lnr lnr-user"></i>
                                    <span ><a href="showjobdetails.php?job_id=<?php echo $row['id']; ?>" >More details</a></span>  <br>
                                  </a>
                                </li>
                                <li> 
                                    <a href='deletejob.php?id=<?php echo urlencode($row["id"]); ?>'>Delete</a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                    <?php
                      }
                    } ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Limitless Experience End-->
  </main>
</body>

</html>