<?php
include 'navANDhead.php';
require_once('sessonchekadmin.php');

ini_set("display_errors",'1');
error_reporting(E_ALL);

$job_id = $_GET['job_id'];
$query = "SELECT * FROM jobs where id ='$job_id'";
$userdata = $db->prepare($query);
$userdata->execute();
$result = $userdata->fetch(PDO::FETCH_ASSOC);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div>
        <?php echo $result["title"] ?>
    </div>

    <div>

    </div>
</body>
</html>