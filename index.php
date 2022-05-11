<!DOCTYPE html>
<html lang="en">

<?php include "connect.php";
session_start();
if (empty($_SESSION["cususer"])) {
	header("location: login1.php");
}
$user = $_SESSION['cususer'];
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

			<form action="search.php" class="search-form">
				<div class="form-group">
					<span class="icon icon-search"></span>
					<input type="text" class="form-control" name="cususer" placeholder="Search">
				</div>
			</form>

			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li></li>
					<li class="colorlib-active"><a href="index.php">Home</a></li>
					<li><a href="gallery.php">Profile</a></li>
					<li><a href="uploadimg.php">Add Photo</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>


		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
		<!-- SELECT articles.user,image,images,articles.status,articles.id,comment FROM articles,user 
			LEFT JOIN articles ON comment.id = articles.id  WHERE articles.user = user.cususer -->

			<?php
			$stmt = $pdo->prepare("SELECT articles.user,articles.image,user.images,articles.status,articles.id,comment.comment,comment.usercom 
			FROM user, articles Left Join comment on comment.id = articles.id   WHERE articles.user = user.cususer ORDER BY datepost desc");
			$stmt->execute();
			?>
			<?php while ($row = $stmt->fetch()) { ?>
				<section class="ftco-section">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 ftco-animate">
								<!-- <h2 class="mb-3 font-weight-bold">Innovative Agency</h2> -->

								<ul class="comment-list">
									<li class="comment">
										<div class="vcard bio">

											<img src="<?= $row["images"] ?>" alt="Image placeholder">
										</div>
										<div class="comment-body">
											<h5 style="color: black;"><?= $row["user"] ?></h5>
										</div>
									</li>
								</ul>

								<!-- <p style="color: black;">logo ชื่อผู้ใช้</p> -->
								<center>
									<p>
										<img src="<?= $row["image"] ?>" alt="" class="img-fluid">
										<!-- <?= $row["id"] ?> -->
									</p>
								</center>


								<p style="color: black;"><b><?= $row["user"] ?></b>: <?= $row["status"] ?></p>


								<p style="color: black;"><b><?= $row["usercom"] ?></b> <?= $row["comment"] ?></p>
								<form action="comment.php">
									<label for="website">comment</label>
									<div class="form-group">
										<input name="comment" type="text" class="form-control">
										<input value="<?= $row["id"] ?>" name="id" type="hidden" class="form-control">
										<input value="<?= $user ?>" name="usercom" type="hidden" class="form-control">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Post Comment</button>
									</div>
								</form>

							</div>
						</div>
					</div>
				</section>
			<?php } ?>
			<!-- loader -->
		</div>
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