<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Undercovered</title>
	<style type="text/css">
		ul, #myUL {
			list-style-type: none;
		}
		#myUL {
			margin: 0;
			padding: 0;
		}
		.caret {
			cursor: pointer;
			-webkit-user-select: none; /* Safari 3.1+ */
			-moz-user-select: none; /* Firefox 2+ */
			-ms-user-select: none; /* IE 10+ */
			user-select: none;
		}
		.caret::before {
			content: "\25B6";
			color: black;
			display: inline-block;
			margin-right: 6px;
		}
		.caret-down::before {
			-ms-transform: rotate(90deg); /* IE 9 */
			-webkit-transform: rotate(90deg); /* Safari */'
			transform: rotate(90deg);
		}
		.nested {
			display: none;
		}
		.active {
			display: block;
		}
		#box {
			border-style: solid;
			padding: 5px;
			text-align: center;
			margin-top: 50px;
			background-color: #769898 ;
			border-color: #bda28d;
		}
		h1 {
			font-style: italic;
			color: #d9dbe7;
		}
		body {
			background-color: #f9e8ce;
		}
	</style>
</head>
<body>
	<div class="col-sm-4"></div>
	<div id="box" class="container-fluid col-sm-4">
	<a href="logout.php">Logout</a>
	<br>
	<h3>Hello! <?php echo $user_data['user_name'];?></h3>
	<hr>
	<h2>Territories</h2>
		<p>Here are the list of territories</p>
	<ul id="myUL">
	<li>
		<span class="caret">Central Luzon</span>
		<ul class="nested">
			<li>Bulacan</li>
			<li>Nueva Ecija</li>
			<li>Pampanga</li>
			<li>Tarlac</li>
		</ul>
	</li>
	<li>
		<span class="caret">Metro Manila</span>
		<ul class="nested">
			<li>
				<span class="caret">Makati</span>
					<ul class="nested">
						<li>Poblacion</li>
						<li>Bel-Air</li>
						<li>Urdaneta</li>
					</ul>
			</li>
	<li>
				<span class="caret">Marikina</span>
					<ul class="nested">
						<li>
							<span class="caret">Malanday</span>
						<ul class="nested">
							<li>Lamuan</li>
							<li>Sta. Teresita</li>
							<li>Malaya</li>
						</ul>
						</li>
		<li>San Roque</li>
		<li>Concepcion</li>
		</ul>
	</li>
	<li>Manila</li>
	</ul>
	</li>
		<li>
			<span class="caret">CALABARZON</span>
				<ul class="nested">
					<li>
						<span class="caret">Batangas</span>
					<ul class="nested">
						<li>Lipa</li>
						<li>Bauan</li>
						<li>Sto. Tomas</li>
					</ul>
					</li>
					<li>
						<span class="caret">Cavite</span>
					<ul class="nested">
						<li>Silang</li>
						<li>Bacoor</li>
						<li>Imus</li>
						<li>Kawit</li>
					</ul>
					</li>
					<li>
						<span class="caret">Laguna</span>
					<ul class="nested">
						<li>Calamba</li>
						<li>Sta. Rosa</li>
						<li>San Pedro</li>
					</ul>
					</li>
	</ul>
	</li>
	</ul>
	</div>
	<div class="col-sm-4"></div>
	<script>
		var toggler = document.getElementsByClassName("caret");
		var i;
			for (i = 0; i < toggler.length; i++) 
			{
				toggler[i].addEventListener("click", function() {
				this.parentElement.querySelector(".nested").classList.toggle("active");
			this.classList.toggle("caret-down");
				});
			}
	</script>
</body>
</html>