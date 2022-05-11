<!DOCTYPE html>
<html lang="en">

<?php include "connect.php";
session_start();
if (empty($_SESSION["cususer"])) {
	header("location: login1.php");
}
$user = $_SESSION['cususer']



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
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
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
					<li class="colorlib-active"><a href="gallery.php">Profile</a></li>
					<li><a href="uploadimg.php">Add Photo</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>


		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">




			<section class="ftco-section bg-light ftco-bread">
				<div class="about-author d-flex p-4 bg-light ">
					<div class="bio mr-5">
						<?php
						$stmt = $pdo->prepare("SELECT * FROM user WHERE cususer = '$user' ");
						$stmt->execute();
						while ($row = $stmt->fetch()) { ?>
							<div style="height:180;">
								<img width="180" src="<?= $row["images"] ?>" alt="Image placeholder" class="img-fluid mb-4">
							</div>
					</div>
					<div class="desc">
						<h3 class="mb-3 bread"><?= $user ?></h3>
						<h5 type="button" class="btn btn-primary"><a style="color: black;" href="user-home.php">แก้ไขโปรไฟล์</a></h5>

						<h4><?= $row["status"] ?></h4>
						<h5><?= $row["bio"] ?></h5>
					<?php } ?>
					</div>
				</div>
			</section>


			<?php
			$stmt = $pdo->prepare("SELECT * FROM articles WHERE user = '$user' ORDER BY datepost desc");
			$stmt->execute();
			?>




			<section class="ftco-section-2">
				<div class="photograhy">
					<div class="row no-gutters">
						<?php while ($row = $stmt->fetch()) { ?>
							<div class="col-md-4 ftco-animate">
								<a href="<?= $row["image"] ?>" title="<?= $row["status"] ?>" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(<?= $row["image"] ?>);">
									<div class="overlay"></div>
									<div class="text text-center">

										<!-- <h3>&#10084; จำนวนlike</h3> -->
										<h3>&#10084; <?= $row["status"] ?></h3>
										<span class="tag"><?= $row["datepost"] ?></span>
									</div>
								</a>
								<!-- วันที่โพสต์ <?= $row["datepost"] ?> 
								<a type="button" class="btn btn-warning">ไปยังโฟสต์</a> -->
							</div>
						<?php } ?>
					</div>
				</div>
			</section>

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