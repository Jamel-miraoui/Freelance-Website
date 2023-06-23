<?php
require_once('connbd.php');
// Check session
require_once('sessonchek.php');
// Navbar
include 'navANDhead.php';

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

$query = "SELECT * FROM jobs";
$jobs = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

// Organize jobs by category
$jobsByCategory = [];
foreach ($jobs as $job) {
    $category = $job['categorie'];
    if (!isset($jobsByCategory[$category])) {
        $jobsByCategory[$category] = [];
    }
    $jobsByCategory[$category][] = $job;
}
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
    <div>
        <a class='button' href="uplodejobform.php"><span>&#43;</span>Add<br>Job</a>
    </div>

    <?php foreach ($jobsByCategory as $category => $categoryJobs): ?>
        <h2><?php echo $category; ?></h2>
        <div class="card-container">
            <?php foreach ($categoryJobs as $job): ?>
                <div class="card">
                    <img src="<?php echo $job['cover_path']; ?>" alt="Job Image">
                    <div class="card-content">
                        <h3><?php echo $job['title']; ?></h3>
                        <p><?php echo $job['description']; ?></p>
                    </div>
                    <a href="showjobdetails.php?job_id=<?php echo $job['id']; ?>" class="button">Apply</a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
