<?php require APPROOT . '/v/inc/header.php' ?>
    <h2>About</h2>
    <h1><?= $data['title']; ?></h1>
	<h3>Random number; <?= about()->randomNumber() ?></h3>
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/about">About</a></li>
	</ul>
<?php require APPROOT . '/v/inc/footer.php' ?>