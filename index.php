<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<!-- Import Header -->
	<?php require "views/header.php"; ?>

	<div class="body">
		<!-- Import Nav bar -->
		<?php require "views/nav_bar.php"; ?>

		<!-- Import Introduce product -->
		<?php require "views/introduce.php"; ?>

		<!-- Import Branded Group -->
		<?php require "views/branded_group.php"; ?>

		<!-- Import Feature Products -->
		<?php require "views/feature_products.php"; ?>

		<!-- Import Branded More Group -->
		<?php require "views/branded_more_group.php" ?>
	</div>

	<!-- Import Footer -->
	<?php require "views/footer.php"; ?>
	
</body>
</html>

