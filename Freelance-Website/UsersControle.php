<?php
include 'navANDhead.php';
require_once('sessonchekadmin.php');
?>
?>
<!DOCTYPE html>
<html>

<head>
	<title>User Management System</title>
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

	<div class="container">
		<div class="main-body">

			<!-- /Breadcrumb -->

			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 gutters-sm">
				<?php
				if ($_GET['msg'] == 1) {
					echo "accsepted suseesfuly";
				}
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
				$sql = "SELECT * FROM users";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					// Output data of each row
					while ($row = $result->fetch_assoc()) {

				?>
						<div class="col mb-3">
							<div class="card">
								<img src="Src/2.png">
								<div class="card-body text-center">
									<img src="<?php echo $row['profile_pic']; ?>" style="width:100px;margin-top:-65px" alt="User" class="img-fluid img-thumbnail rounded-circle border-0 mb-3">
									<h5 class="card-title"><?php echo $row['username']; ?></h5>
									<p class="text-secondary mb-1"><?php echo $row['email']; ?></p>
									<p class="text-muted font-size-sm">Id: <?php echo $row['id']; ?></p>
								</div>
								<div class="card-footer">
									<button class="button-24" role="button"><a href="UpdateUser.php?id=<?php echo $row['id']; ?>">Modify</a></button>
									<button class="button-24" role="button"><a href="DeleteUsr.php?id=<?php echo $row['id']; ?>">Delete</a></button>
								</div>
							</div>
						</div>
				<?php
					}
				}
				$conn->close();
				?>
			</div>
		</div>
	</div>
</body>
<style>
	.main-body {
		padding: 15px;
	}

	.card {
		box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
	}

	.card {
		position: relative;
		display: flex;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 0 solid rgba(0, 0, 0, .125);
		border-radius: .25rem;
	}

	.card-body {
		flex: 1 1 auto;
		min-height: 1px;
		padding: 1rem;
	}

	.gutters-sm {
		margin-right: -8px;
		margin-left: -8px;
	}

	.gutters-sm>.col,
	.gutters-sm>[class*=col-] {
		padding-right: 8px;
		padding-left: 8px;
	}

	.mb-3,
	.my-3 {
		margin-bottom: 1rem !important;
	}

	.bg-gray-300 {
		background-color: #e2e8f0;
	}

	.h-100 {
		height: 100% !important;
	}

	.shadow-none {
		box-shadow: none !important;
	}

	.bg-white {
		background-color: #fff !important;
	}

	.btn-light {
		color: #1a202c;
		background-color: #fff;
		border-color: #cbd5e0;
	}

	.ml-2,
	.mx-2 {
		margin-left: .5rem !important;
	}

	.card-footer:last-child {
		border-radius: 0 0 .25rem .25rem;
	}

	.card-footer,
	.card-header {
		display: flex;
		align-items: center;
	}

	.card-footer {
		padding: .5rem 1rem;
		background-color: #fff;
		border-top: 0 solid rgba(0, 0, 0, .125);
		display: flex;
		justify-content: center;
		margin-top: 10px;
	}

	.button-24 {
		background: #e2e8f0;
		border: 1px solid #FF4742;
		border-radius: 6px;
		box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
		box-sizing: border-box;
		color: #FFFFFF;
		cursor: pointer;
		display: inline-block;
		font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;
		font-size: 16px;
		font-weight: 800;
		line-height: 16px;
		min-height: 40px;
		outline: 0;
		padding: 12px 14px;
		text-align: center;
		text-rendering: geometricprecision;
		text-transform: none;
		user-select: none;
		-webkit-user-select: none;
		touch-action: manipulation;
		vertical-align: middle;
		margin: 0 5px;
	}

	.button-24:hover,
	.button-24:active {
		background-color: initial;
		background-position: 0 0;
		color: #FF4742;
	}

	.button-24:active {
		opacity: .5;
	}
</style>

</html>