<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>INDEX</title>
</head>
<body>
	<div class="container">
		<button class="btn btn-primary" id="showAll">Show Territories</button>
		<h1>All Territories</h1>
		<hr>
		<div class="row" id="allList">
			<!--<div class="col-3">
			<div class="card text-white bg-primary mb-3">
				<div class="card-body">
					<p></p>
					<span></span>
				</div>
			</div>
			</div>-->
		</div>
	</div>
	<a href="logout.php">Logout</a>
	<script type="text/javascript" src="script.js"></script>
	<?php
		session_start();

		include("connection.php");
		include("functions.php");

		$user_data = check_login($con);
	?>
</body>
</html>