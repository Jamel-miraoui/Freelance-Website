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

<div>
    <a class='button' href="uplodebookform.php"><span>&#43;</span>Add<br>Book</a>
</div>

<?php foreach ($jobsByCategory as $category => $categoryJobs): ?>
    <h2><?php echo $category; ?></h2>
    <table>
        <section>
            <main>
                <div class="book-container">
                    <?php foreach ($categoryJobs as $job): ?>
                        <div class="book">
                            <a href="download.php?filename=<?php echo urlencode($job['file_path']); ?>">
                                <img src="<?php echo $job['cover_path']; ?>" alt="Book 3" width="300">
                            </a>
                            <h3><?php echo $job['title']; ?></h3>
                            <p><?php echo $job['categorie']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </main>
        </section>
    </table>
<?php endforeach; ?>
</body>
</html>
