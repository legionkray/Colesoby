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