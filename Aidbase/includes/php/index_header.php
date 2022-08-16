<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en-us">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>AidBase</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>

	<body>
		<video autoplay muted loop id="myVideo">
			<source src="includes/videos/index.mp4" type="video/mp4">
		</video>

		<div class="nav-bar">
			<div class="identity">
				<h4><a href="/index.html" style="color:blue; font-weight:bold;">
						<-- Home</a>
				</h4><br>
				<a href="index.php">
					<h3 style="color: #4776AB; font-weight: bold;">
						<img src="includes/images/AidBase.png" alt="AidBase.png" width="30"></img>
						&nbsp; AidBase
					</h3>
				</a>
			</div>
			<div class="buttons">
				<div>
					<a href="index.php">
						<h4>Home</h4>
					</a>
				</div>
				<div>
					<a href='index.php'>
						<h4>Sign Up</h4>
					</a>
				</div>
				<div>
					<a href='index.php'>
						<h4>Log In</h4>
					</a>
				</div>
				<div class="search-nav">
					<a href="index.php">
						<button class="search-nav">
							<h4>Search</h4>
						</button>
					</a>
				</div>
			</div>
		</div>