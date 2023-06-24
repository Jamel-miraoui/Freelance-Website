<?php
require_once('connbd.php');
// Check session
require_once('sessonchek.php');
// Navbar
include 'navANDhead.php';

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

$query = "SELECT * FROM jobs where categorie = 'Forgeron'";
$jobs = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

// Organize jobs by category

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bookcard.css">
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
                <a href="uplodejobform.php" class="wt-btn">Add Job</a><br><br><br>
            </div>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                        <div class="wt-articletabshold">
                            <ul class="wt-navarticletab nav navbar-nav">
                                <li class="nav-item">
                                    <a  id="all-tab" data-toggle="tab" href="Climatisation.php">Climatisation</a>
                                </li>
                                <li class="nav-item">
                                    <a  id="business-tab" data-toggle="tab" href="Peinture.php">Peinture</a>
                                </li>
                                <li class="nav-item">
                                    <a  id="trading-tab" data-toggle="tab" href="Électricité.php">Électricité</a>
                                </li>
                                <li class="nav-item">
                                    <a  id="economics-tab" data-toggle="tab" href="Menuisier.php">Menuisier</a>
                                </li>
                                <li class="nav-item">
                                    <a class="active" id="marketing-tab" data-toggle="tab" href="Forgeron.php">Forgeron</a>
                                </li>
                            </ul>
                            <div class="tab-content wt-haslayout">
                                <div class="wt-contentarticle tab-pane active fade show" id="alltab">
                                    <div class="row">

                                        <?php foreach ($jobs as $job) : ?>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                                <div class="wt-article">

                                                    <figure>
                                                        <img src="<?php echo $job['cover_path']; ?>" alt="img description">
                                                    </figure>
                                                    <div class="wt-articlecontent">
                                                        <div class="wt-title">
                                                            <h2><?php echo $job['title']; ?></h2>
                                                        </div>
                                                        <ul class="wt-postarticlemeta">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="lnr lnr-clock"></i>
                                                                    <span>Prix : <?php echo $job['prix']; ?></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="lnr lnr-user"></i>
                                                                    <span><a href="showjobdetails.php?job_id=<?php echo $job['id']; ?>">More details</a></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
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