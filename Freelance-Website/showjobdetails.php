<?php
include 'navANDhead.php';
require_once('sessonchekadmin.php');

ini_set("display_errors",'1');
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
							<div class="wt-title"><h2>Job Detail</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index-2.html">Home</a></li>
								<li><a href="javascript:void(0);">Jobs</a></li>
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
												<li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Professional</span></li>
												<li><span><img src="images/flag/img-02.png" alt="img description">  United States</span></li>
												<li><span><i class="far fa-folder"></i> Type: Fixed</span></li>
												<li><span><i class="far fa-clock"></i> Duration: 15 Days</span></li>
											</ul>
										</div>
										<div class="wt-btnarea"><a href="javascrip:void(0);" class="wt-btn">Send Proposal</a></div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
									<div class="wt-projectdetail-holder">
										<div class="wt-projectdetail">
											<div class="wt-title">
												<h3>Project Detail</h3>
											</div>
											<div class="wt-description">
												<p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab illoion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ratione vtatem seque nesnt. Neque porro quamest quioremas ipsum quiatem dolor sitem ameteism conctetur adipisci velit sedate quianon.</p>
												<p>Laborum sed ut perspiciatis unde omnis iste natus error sitems voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis etna quasi architecto beatae vitae dictation explicabo. nemo enim ipsam fugit.</p>
												<ul class="wt-projectliststyle">
													<li><span><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia</span></li>
													<li><span><i class="fa fa-check"></i>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
													<li><span><i class="fa fa-check"></i>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>
													<li><span><i class="fa fa-check"></i>qui dolorem ipsum quia dolor sit amet</span></li>
												</ul>
												<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>
												<p>Eomnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
												<ul class="wt-projectliststyle">
													<li><span><i class="fa fa-check"></i>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
													<li><span><i class="fa fa-check"></i>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>
													<li><span><i class="fa fa-check"></i>Qui dolorem ipsum quia dolor sit amet</span></li>
													<li><span><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia</span></li>
												</ul>
												<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore ste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porrom quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonae numquam eius modi tempora incidunt labore.</p>
											</div>
										</div>
										<div class="wt-skillsrequired">
											<div class="wt-title">
												<h3>Skills Required</h3>
											</div>
											<div class="wt-tag wt-widgettag">
												<a href="javascript:void(0);">PHP Developer</a>
												<a href="javascript:void(0);">PHP</a>
												<a href="javascript:void(0);">My SQL</a>
												<a href="javascript:void(0);">Business</a>
												<a href="javascript:void(0);">Website Development</a>
												<a href="javascript:void(0);">Collaboration</a>
												<a href="javascript:void(0);">Decent</a>
											</div>
										</div>
										<div class="wt-attachments">
											<div class="wt-title">
												<h3>Attachments</h3>
											</div>
											<ul class="wt-attachfile">
												<li>
													<span>Wireframe Document.doc</span>
													<em>File size: 512 kb<a href="javascript:void(0);"><i class="lnr lnr-download"></i></a></em>
												</li>
												<li>
													<span>Requirments.pdf</span>
													<em>File size: 110 kb<a href="javascript:void(0);"><i class="lnr lnr-download"></i></a></em>
												</li>
												<li>
													<span>Company Intro.docx</span>
													<em>File size: 224 kb<a href="javascript:void(0);"><i class="lnr lnr-download"></i></a></em>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
									<aside id="wt-sidebar" class="wt-sidebar">
										<div class="wt-proposalsr">
											<div class="wt-proposalsrcontent">
												<span class="wt-proposalsicon"><i class="fa fa-angle-double-down"></i><i class="fa fa-newspaper"></i></span>
												<div class="wt-title">
													<h3>150</h3>
													<span>Proposals Received Till<em>June 27, 2018</em></span>
												</div>
											</div>
											<div class="tg-authorcodescan">
												<figure class="tg-qrcodeimg">
													<img src="images/qrcode.png" alt="img description">
												</figure>
												<div class="tg-qrcodedetail">
													<span class="lnr lnr-laptop-phone"></span>
													<div class="tg-qrcodefeat">
														<h3>Scan with your <span>Smart Phone </span> To Get It Handy.</h3>
													</div>
												</div>
											</div>
											<div class="wt-clicksavearea">
												<span>Job ID: tQu5DW9F2G</span>
												<a href="javascrip:void(0);" class="wt-clicksavebtn"><i class="far fa-heart"></i> Click to save</a>
											</div>
										</div>
										<div class="wt-widget wt-companysinfo-jobsingle">
											<div class="wt-companysdetails">
												<figure class="wt-companysimg">
													<img src="images/company/img-01.jpg" alt="img description">
												</figure>
												<div class="wt-companysinfo">
													<figure><img src="images/company/img-01.png" alt="img description"></figure>
													<div class="wt-title">
														<a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Verified Company</a>
														<h2>Angry Creative Studio</h2>
													</div>
													<ul class="wt-postarticlemeta">
														<li>
															<a href="javascript:void(0);">
																<span>Open Jobs</span>
															</a>
														</li>
														<li>
															<a href="javascript:void(0);">
																<span>Full Profile</span>
															</a>
														</li>
														<li class="wt-following">
															<a href="javascript:void(0);">
																<span>Following</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="wt-widget wt-sharejob">
											<div class="wt-widgettitle">
												<h2>Share This Job</h2>
											</div>
											<div class="wt-widgetcontent">
												<ul class="wt-socialiconssimple">
													<li class="wt-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i>Share on Facebook</a></li>
													<li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i>Share on Twitter</a></li>
													<li class="wt-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i>Share on Linkedin</a></li>
													<li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i>Share on Google Plus</a></li>
												</ul>
											</div>
										</div>
										<div class="wt-widget wt-reportjob">
											<div class="wt-widgettitle">
												<h2>Report This Job</h2>
											</div>
											<div class="wt-widgetcontent">
												<form class="wt-formtheme wt-formreport">
													<fieldset>
														<div class="form-group">
															<span class="wt-select">
																<select>
																	<option value="Reason">Select Reason</option>
																	<option value="Reason1">Reason 1</option>
																	<option value="Reason2">Reason 2</option>
																</select>
															</span>
														</div>
														<div class="form-group">
															<textarea class="form-control" placeholder="Description"></textarea>
														</div>
														<div class="form-group wt-btnarea">
															<a href="javascrip:void(0);" class="wt-btn">Submit</a>
														</div>
													</fieldset>
												</form>
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
			<footer id="wt-footer" class="wt-footer wt-haslayout">
				<div class="wt-footerholder wt-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6">
								<div class="wt-footerlogohold">
									<strong class="wt-logo"><a href="index-2.html"><img src="images/flogo.png" alt="company logo here"></a></strong>
									<div class="wt-description">
										<p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce <a href="javascript:void(0);">more...</a></p>
									</div>
									<ul class="wt-socialiconssimple wt-socialiconfooter">
										<li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
										<li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
										<li class="wt-youtube"><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
										<li class="wt-instagram"><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
										<li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-footercol wt-widgetcompany">
									<div class="wt-fwidgettitle">
										<h3>Company</h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">About Us</a></li>
										<li><a href="javascript:void(0);">How It Works</a></li>
										<li><a href="javascript:void(0);">Careers</a></li>
										<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
										<li><a href="javascript:void(0);">Trust &amp; Safety</a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-footercol wt-widgetexplore">
									<div class="wt-fwidgettitle">
										<h3>Explore More</h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">Freelancers in USA</a></li>
										<li><a href="javascript:void(0);">Freelancers in Canada</a></li>
										<li><a href="javascript:void(0);">Freelancers in Australia</a></li>
										<li><a href="javascript:void(0);">Jobs in USA</a></li>
										<li><a href="javascript:void(0);">Find Jobs</a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wt-haslayout wt-joininfo">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
								<div class="wt-companyinfo">
									<span><a href="javascript:void(0);">New @ Worktern?</a> Dotem eiusmod tempor incune utnaem labore etdolore.</span>
								</div>
								<div class="wt-fbtnarea">
									<a href="javascript:void(0)" class="wt-btn">Join Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wt-haslayout wt-footerbottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p class="wt-copyrights"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
								<nav class="wt-addnav">
									<ul>
										<li><a href="javascript:void(0);">News</a></li>
										<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
										<li><a href="javascript:void(0);">Privacy Policy</a></li>
										<li><a href="javascript:void(0);">Career</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
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
