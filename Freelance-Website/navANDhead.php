<?php
// ini_set("display_errors",'1');
// error_reporting(E_ALL);
require_once('connbd.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Courses</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/booksstyle.css">
    
    <style>


    </style>
</head>
<body>
<header>
    <div class="header-container">
        <h1><a href="index.php"><img src="resorses/logo.png" width="190"></a></h1>
        <form method="get" action="search.php" class="search-form">
            <input type="text" name="search" class="search-input" placeholder="Search...">
            <input type="submit" value="Search" class="search-submit">
        </form>
        <nav class="nava">
            <ul>
                <li class="nava"><a href="index.php">Home</a></li>
                <li class="nava"><a href="books.php">Explore Jobs</a></li>
                <li class="nava"><a href="aboutpage.php">Aboutus</a></li>  
            </ul>
        </nav>
        <div class="user-info">
            <h3 class="user-name">
                 <?php 
                 session_start();
                 if(isset($_SESSION['login'])){
                 $login=$_SESSION['login'];
                    $query = "SELECT * FROM users where username='$login'";
                    $user = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($user as $user3):
                    echo $user3['username'];
                    endforeach;}
                    else{
                        echo "Guest";
                    }
                ?>
            </h3>
            <a href="profile.php"><img src="Profile-Icon-SVG-09856789.png" alt="Profile photo" class="profile-photo"></a>
            
        </div>
    </div>
</header>


