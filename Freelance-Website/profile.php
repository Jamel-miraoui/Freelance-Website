<?php
// ini_set("display_errors",'1');
// error_reporting(E_ALL);
//chek sesson
require_once('sessonchek.php');
//navbar

include 'navANDhead.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//connneton 
require_once('connbd.php');
$login = $_SESSION['login'];
$query = "SELECT * FROM users where username ='$login'";
$userdata = $db->prepare($query);
$userdata->execute();
$result = $userdata->fetch(PDO::FETCH_ASSOC);

$id = $result["id"];
$address = $result["address"];
$phone_number = $result["phone_number"];
$additional_info = $result["additional_info"];
// $queryid = "SELECT id FROM users where username ='$login'";
// $iddata = $db->prepare($queryid);
// $iddata->execute();
// $resultid = $iddata->fetch(PDO::FETCH_ASSOC);


$queryBooks = "SELECT * FROM jobs WHERE user_id='$id'";
$bookData = $db->prepare($queryBooks);
$bookData->execute();
$jobs = $bookData->fetchAll(PDO::FETCH_ASSOC);


$queryBooksp = "SELECT * FROM jobspending WHERE user_id='$id'";
$bookDatap = $db->prepare($queryBooksp);
$bookDatap->execute();
$jobsp = $bookDatap->fetchAll(PDO::FETCH_ASSOC);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

    body {

        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #ddd;
        align-items: center;
        justify-content: center;
    }



    .container {
        display: flex;
        width: 98%;
        height: 100%;
        padding: 20px 20px;
    }

    .box {
        flex: 30%;
        display: table;
        align-items: center;
        text-align: center;
        font-size: 20px;
        background-color: #0d1425;
        color: #fff;
        padding: 30px 30px;
        border-radius: 20px;
    }

    .box img {
        border-radius: 50%;
        border: 2px solid #fff;
        height: 250px;
        width: 250px;
    }

    .box ul {
        margin-top: 30px;
        font-size: 30px;
        text-align: center;
    }

    .box ul li {
        list-style: none;
        margin-top: 50px;
        font-weight: 100;
    }

    .box ul li i {
        cursor: pointer;
        margin: 10px;
        font-size: 40px;
    }

    .box ul li i:hover {
        opacity: 0.6;
    }

    .About {
        margin-left: 20px;
        flex: 50%;
        display: table;
        padding: 30px 30px;
        font-size: 20px;
        background-color: #fff;
        border-radius: 20px;
    }

    .About h1 {
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 50px;
        font-weight: 500;
    }

    .About ul li {
        list-style: none;
    }

    .About ul {
        margin-top: 20px;
    }

    /* CSS for button styles */
    .box ul li input[type="button"] {
        padding: 10px 20px;
        font-size: 18px;
        background-color: #0d1425;
        color: #fff;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .box ul li input[type="button"]:hover {
        background-color: #ff6363;
    }

    .box ul li input[type="button"]:focus {
        outline: none;
        box-shadow: 0 0 0 2px #ff6363;
    }

    h2 {
        background-color: hsla(0, 100%, 50%, 0.1);
        border-radius: 2%;
        text-align: center;
    }

    @media screen and (max-width: 1068px) {
        .container {
            display: table;
        }

        .box {
            width: 100%;
        }

        .About {
            width: 100%;
            margin: 0;
            margin-top: 20px;
        }

        .About h1 {
            text-align: center;
        }

        .box ul li input[type="button"] {
            width: 100%;
        }


    }
</style>

<body>
    <div class="container">
        <div class="box">
            <img src="<?php echo $result["profile_pic"]; ?>" alt="">
            <ul>
                <li><?php
                    echo $result['username'];
                    ?></li>
                <li><?php
                    if ($_SESSION['login'] != "admin") {
                        echo "ROLE: Normale User";
                    } ?></li>
                <li>
                    <a href="logout.php"><input type="button" value="Deconnection"></a>
                    <a href="modiff.php"><input type="button" value="Modifier Profile"></a>
                </li>
                <?php
                if ($_SESSION['login'] == "admin") {
                ?>
                    <li>
                        <a href="UsersControle.php"><input type="button" value="User Manager"></a>
                        <a href="ShowPendingBooks.php"><input type="button" value="Manage Jobs Pending"></a>
                        <a href="ShowUplodedBooks.php"><input type="button" value="Manage Uploaded Jobs"></a>
                        <!-- <a href="ShowUplodedCourses.php"><input type="button" value="manage Courses upload"></a> -->
                    </li>
                <?php
                }
                ?>

            </ul>
        </div>
        <div class="About">
            <h1>About</h1>
            <h2>Address:</h2>
            <?php
            echo $address;
            ?>
            <h2>Phone_number:</h2>
            <?php
            echo $phone_number;
            ?>
            <h2>Additional_info:</h2>
            <?php
            echo $additional_info;
            ?>
            <h1>cv :</h1>
            <form action="uploadcv.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="pdf_file">PDF File:</label>
                    <input type="file" name="pdf_file" id="pdf_file" class="formbold-form-input formbold-form-file"><br>
                </div>
                <input type="submit" value="Change CV" class="formbold-btn">
            </form>

            <?php
            // profile.php

            // Check if the 'msg' parameter is set in the URL
            if (isset($_GET['msg'])) {
                $message = "";

                // Retrieve the value of the 'msg' parameter
                switch ($_GET['msg']) {
                    case '1':
                        $message = "File uploaded successfully.";
                        break;
                    case '3':
                        $message = "Database update failed.";
                        break;
                    case '4':
                        $message = "File upload failed.";
                        break;
                    case '5':
                        $message = "File size exceeds the limit.";
                        break;
                    case '6':
                        $message = "Invalid file type.";
                        break;
                    case '7':
                        $message = "No file selected or upload error occurred.";
                        break;
                    default:
                        $message = "";
                        break;
                }

                // Display the message
                if (!empty($message)) {
                    echo "<h3>" . $message . "</h3>";
                }
            }
            ?>
            </h3>
        </div>
        <div class="About">
            <h1>Activities</h1>
            <div>
                <br><br><br>
                <div id="books">
                    <h2>Jobs</h2>
                    <table>
                        <thead>
                            <tr>

                                <th>Title</th>
                                <th>Categorie</th>
                                <th>Description</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jobs as $book) : ?>
                                <tr>

                                    <td><?php echo $book['title']; ?></td>
                                    <td><?php echo $book['categorie']; ?></td>
                                    <td><?php echo $book['description']; ?></td>
                                    <td><?php echo $book['created_at']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br><br><br><br>
            <h1>Jobs Pending</h1>
            <div>
                <br><br><br>
                <div id="books">
                    <h2>Jobs:</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Categorie</th>
                                <th>Description</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jobsp as $book) : ?>
                                <tr>
                                    <td><?php echo $book['title']; ?></td>
                                    <td><?php echo $book['categorie']; ?></td>
                                    <td><?php echo $book['description']; ?></td>
                                    <td><?php echo $book['created_at']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>