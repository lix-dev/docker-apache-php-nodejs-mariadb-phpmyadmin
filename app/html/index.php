<!DOCTYPE html>
<html lang="en">

<head>
	<title>Stack for Webdevelopmenent built with Docker Compose</title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/styles/default.min.css">
	<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/highlight.min.js"></script>
	<script>
		hljs.initHighlightingOnLoad();
	</script>
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
		$conn = new mysqli("db", "dev-user", "dev-password");
		$db = "true";
		if ($conn->connect_error) $db = "false";
		?>
		<div class="f">
			<div class="m">MariaDB: <span class="s <?= $db ?>"></span></div>
			<div class="p">PHP: <span><?= phpversion() ?></span></div>
			<div class="p"><a href="http://localhost:8080" target="blank">phpMyAdmin</a></div>
		</div>
		<h3>Your Webserver is ready!</h3>
		<p>Now you can start to code.</p>
	</main>
</body>

</html>