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
