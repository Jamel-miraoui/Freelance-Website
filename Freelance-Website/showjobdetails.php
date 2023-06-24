<?php
include 'navANDhead.php';
require_once('sessonchekadmin.php');

ini_set("display_errors", '1');
error_reporting(E_ALL);

$job_id = $_GET['job_id'];
$query = "SELECT * FROM jobs where id ='$job_id'";
$userdata = $db->prepare($query);
$userdata->execute();
$job = $userdata->fetch(PDO::FETCH_ASSOC);


$userid = $job['user_id'];
$query = "SELECT * FROM users where id ='$userid'";
$userdata = $db->prepare($query);
$userdata->execute();
$user = $userdata->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>

<head>
	<title>Job Details</title>
	<meta name="description" content="">
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

<body class="wt-login">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Preloader Start -->
	<div class="preloader-outer">
		<div class="loader"></div>
	</div>
	<!-- Preloader End -->
	<!-- Wrapper Start -->
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			<!-- Header Start -->
			<!--Header End-->
			<!--Inner Home Banner Start-->
			<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
								<div class="wt-title">
									<h2>Job Detail</h2>
								</div>
								<ol class="wt-breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li><a href="books.php">Explore Jobs</a></li>
									<li class="wt-active">Job Detail</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<div class="wt-haslayout wt-main-section">
					<!-- User Listing Start-->
					<div class="container">
						<div class="row">
							<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
									<div class="wt-proposalholder">
										<span class="wt-featuredtag"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
										<div class="wt-proposalhead">
											<h2><?php echo "<h2>Job Title: " . $job['title'] . "</h2>"; ?></h2>
											<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
												<li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i>Categories :</span></li>
												<li><span> <?php echo $job['categorie']; ?></span></li>
											</ul>
										</div>
										<div class="wt-btnarea"><a href="books.php" class="wt-btn">Back to Explore</a></div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
									<div class="wt-projectdetail-holder">
										<div class="wt-projectdetail">
											<div class="wt-title">
												<h3>Job Description:</h3>
											</div>
											<div class="wt-description">
												<p><?php echo $job['description']; ?></p>
											</div>
											<img src="<?php echo $job['cover_path']; ?>" alt="img description">
										</div>
										<div class="wt-attachments">
											<div class="wt-title">
												<br><br>
												<h3>Attachments :</h3>
											</div>
											<a href="downloadcv.php?filename=<?php echo urlencode($user['cv']); ?>">
											<ul class="wt-attachfile">
												
													<li>
														<span>Uer Cv</span>
														<em>File size: 512 kb<a href="javascript:void(0);"><i class="lnr lnr-download"></i></a></em>
													</li>
												

											</ul>
											</a>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
									<aside id="wt-sidebar" class="wt-sidebar">
										<div class="wt-proposalsr">

											<div class="tg-authorcodescan">
												<figure class="tg-qrcodeimg">
													<img src="<?php echo $user['profile_pic']; ?>" alt="img description">
												</figure>
												<div class="tg-qrcodedetail">
													<span class="lnr lnr-laptop-phone"></span>
													<div class="tg-qrcodefeat">
														<h3>Upload By <span><?php echo $user['username']; ?></h3>
													</div>
												</div>
											</div>
											<div class="wt-clicksavearea">
												<span>Job id :<?php echo $job['id']; ?></span>

											</div>
										</div>
										<div class="wt-widget wt-sharejob">
											<div class="wt-widgettitle">
												<h2>User Contatct :</h2>
											</div>
											<div class="wt-widgetcontent">
												<ul class="wt-socialiconssimple">
													<li><i><?php echo $user['phone_number']; ?></i></li>
													<li><i><?php echo $user['additional_info']; ?></i></i></li>
												</ul>
											</div>
										</div>
									</aside>
								</div>
							</div>
						</div>
					</div>
					<!-- User Listing End-->
				</div>
			</main>
			<!--Main End-->
			<!--Footer Start-->
			<!--Footer End-->
		</div>
		<!--Content Wrapper End-->
	</div>
	<!--Wrapper End-->
	<script src="js/vendor/jquery-3.3.1.js"></script>
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/chosen.jquery.js"></script>
	<script src="js/tilt.jquery.js"></script>
	<script src="js/scrollbar.min.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/readmore.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/tipso.js"></script>
	<script src="js/jRate.js"></script>
	<script src="js/main.js"></script>
</body>

</html>