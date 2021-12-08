<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crossroads Worlds</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap"
	rel="stylesheet"> 
</head>
<body>

	<header>
		<div class="logo">
			<a href="index.html"><img class="graficlogo" src="img/logo1.png" alt="logo"></a>
		</div>
		<nav>
			<div class="topnav" id="myTopnav">
			<a href="index.php">Главная</a>
			<a href="gallery.php">Галерея</a>
			<a href="blog.php">Расписание</a>
			<a href="location.php">Расположение</a>
			<a href="registration.php">Регистрация</a> 
			
			<a href="add.php" <?php if (!($_SESSION[id] == 1)){ echo 'style="display:none;"';}?>>Добавить игру</a>
			<a id="menu" href="#" class="icon">&#9776;</a>
		</div>
		</nav>
	</header>
	<main>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d146.9692155474857!2d27.48032621800011!3d53.88718404156862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbdbbd9b9ada3f%3A0x242d37e9ea986c0b!2z0KjQuNC90L7QvNC-0L3RgtCw0LY!5e0!3m2!1sru!2sby!4v1558705513228!5m2!1sru!2sby"></iframe>
		</div>
	</main>
	<footer>
		<nav>
			
				<a href="index.html">Главная</a>
				<a href="schedule.html">Расписание</a>
				<a href="contacts.html">Контакты</a>
				<a href="gallery.html">Галлерея</a>
			
		</nav>
		<div class="logo">
			<a href="index.html"><img class="graficlogo" src="img/logo.png" alt="logo"></a>
		</div>
		<div class="social">
			<a href="#"><img src="img/vk.png" alt="vk.com"></a>
		</div>
	</footer>

	<script src="js/script.js"></script>
</body>
</html>