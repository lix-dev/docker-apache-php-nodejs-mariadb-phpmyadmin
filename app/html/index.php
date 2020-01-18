<!DOCTYPE html>
<html lang="en">

<head>
	<title>Stack for Webdevelopmenent built with Docker Compose</title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700&display=swap" rel="stylesheet">
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: 'Titillium Web', sans-serif;
		}

		header {
			position: relative;
			height: 300px;
			background: rgb(0, 103, 172);
		}

		header .c {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}

		h1 {
			color: #fff;
		}

		h2 {
			color: #fff;
			font-weight: 300;
			font-size: 15px;
		}

		h3,
		p {
			text-align: center;
		}

		h3 {
			margin-top: 50px;
		}

		main {
			position: relative;
		}

		div.f {
			display: flex;
			width: 500px;
			background: #fff;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, .2);
			margin: 0 auto;
			margin-top: -20px;
			border-radius: 5px;
			padding: 0 10px;
		}

		div.f div {
			text-align: center;
			flex-basis: 33%;
			padding: 10px 10px;
			border-right: 1px solid #f1f1f1;
		}

		div.f div:last-child {
			border: none;
		}

		div.f div span {
			font-weight: bold;
		}

		div.f div span.s {
			display: inline-block;
			width: 15px;
			height: 15px;
			border-radius: 50%;
		}

		div.f div span.s.true {
			background: rgb(105, 218, 83);
		}

		div.f div span.s.false {
			background: rgb(216, 70, 70);
		}

		div.f div a {
			text-decoration: none;
			color: rgb(0, 103, 172);
		}

		div.f div a:hover {
			color: rgb(55, 158, 226);
		}
	</style>
</head>

<body>
	<header>
		<div class="c">
			<h1>Welcome to your Webserver!</h1>
			<h2>Stack for Webdevelopmenent built with Docker Compose</h2>
		</div>
	</header>
	<main>
		<?php
		ini_set('display_errors', 'Off');
		$conn = new mysqli("db", "dev-user", "dev-password");
		$db = "true";
		if ($conn->connect_error) $db = "false";
		ini_set('display_errors', 'On');
		?>
		<div class="f">
			<div class="m">MariaDB: <span class="s <?= $db ?>"></span></div>
			<div class="p">PHP: <span><?= phpversion() ?></span></div>
			<div class="p"><a href="http://localhost:8080" target="blank">phpMyAdmin</a></div>
		</div>
		<?php
		if ($conn->connect_error) {
			echo "<h3>MariaDB connection failed:</h3> ";
			echo "<p>" . $conn->connect_error . "</p>";
			die();
		}
		?>
		<h3>Your Webserver is ready!</h3>
		<p>Now you can start to code.</p>
	</main>
</body>

</html>