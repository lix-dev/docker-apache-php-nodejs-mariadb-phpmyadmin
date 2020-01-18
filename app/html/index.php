<!DOCTYPE html>
<html lang="en">

<head>
	<title>Stack for Webdevelopmenent built with Docker Compose</title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="index.css">
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