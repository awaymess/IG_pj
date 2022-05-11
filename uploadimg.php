<!DOCTYPE html>
<html lang="en">

<?php include "connect.php";
session_start();
if (empty($_SESSION["cususer"])) {
	header("location: login1.php");
}

?>

<?php
include("config.php");

if (isset($_POST['but_upload'])) {
	$name = $_FILES['file']['name'];

	$user = $_SESSION['cususer'];

	$status = $_POST['status'];

	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);

	// Select file type
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	// Valid file extensions
	$extensions_arr = array("jpg", "jpeg", "png", "gif");

	// Check extension
	if (in_array($imageFileType, $extensions_arr)) {

		// Convert to base64 
		$image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
		$image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;

		// Insert record
		$query = "insert into articles(name,image,user,status) values('" . $name . "','" . $image . "','" . $user . "','" . $status . "')";

		mysqli_query($con, $query) or die(mysqli_error($con));

		// Upload file
		move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $name);
	}
}
?>

<head>

	<title>Capture - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body>


	<div id="colorlib-page">
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.php"><img width="200" src="images\ig.png" alt="Image placeholder"></a></h1>

			<form action="#" class="search-form">
				<div class="form-group">
					<span class="icon icon-search"></span>
					<input type="text" class="form-control" placeholder="Search">
				</div>
			</form>

			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li></li>
					<li><a href="index.php">Home</a></li>
					<li><a href="gallery.php">Profile</a></li>
					<li class="colorlib-active"><a href="uploadimg.php">Add Photo</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>


		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<!-- <section class="ftco-section bg-light ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-9 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog Single</span></p>
	            <h1 class="mb-3 bread">Blog Single</h1>
	            <p>hjklh</p>
	          </div>
	        </div>
				</div>
			</section> -->
			<section class="ftco-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 ftco-animate">
							<!-- <h2 class="mb-3 font-weight-bold">Innovative Agency</h2> -->

							<!-- <ul class="comment-list">
								<li class="comment">
									<div class="vcard bio">
										<img src="images/person_1.jpg" alt="Image placeholder">
									</div>
									<div class="comment-body">
										<h5 style="color: black;"><?= $user ?></h5>
									</div>
								</li>
							</ul> -->

							<form method="post" action="" enctype='multipart/form-data'>
								<div class="form-group">
									<input name="status" type="text" class="form-control">
								</div>
								<input type='file' name='file' />
								<input type="submit" class="btn btn-primary" value='Upload' name='but_upload'>

							</form>

						</div> <!-- .col-md-8 -->
					</div><!-- END COLORLIB-MAIN -->
				</div><!-- END COLORLIB-PAGE -->

				<!-- loader -->
				<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
						<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
						<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


				<script src="js/jquery.min.js"></script>
				<script src="js/jquery-migrate-3.0.1.min.js"></script>
				<script src="js/popper.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/jquery.easing.1.3.js"></script>
				<script src="js/jquery.waypoints.min.js"></script>
				<script src="js/jquery.stellar.min.js"></script>
				<script src="js/owl.carousel.min.js"></script>
				<script src="js/jquery.magnific-popup.min.js"></script>
				<script src="js/aos.js"></script>
				<script src="js/jquery.animateNumber.min.js"></script>
				<script src="js/bootstrap-datepicker.js"></script>
				<script src="js/jquery.timepicker.min.js"></script>
				<script src="js/scrollax.min.js"></script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
				<script src="js/google-map.js"></script>
				<script src="js/main.js"></script>

</body>

</html>