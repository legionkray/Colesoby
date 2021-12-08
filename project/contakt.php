<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
		$title = "Контакты";
		$css_stile="css/main.css";
		require_once "blocks/head.php";
		?>
</head>
<body>


	<?php require_once "blocks/header.php" ?>

	<div class="row">
		<div class="col-md-3 glblock">
			<div class="inner-sidebar-1">Сайдбар1</div>
		</div>
		<div class="col-md-6 glblock">
			<div class="inner-content">
				<div >
					<h1 class="asd">КОНТАКТЫ АДМИНИСТРАЦИИ ПОРТАЛА:</h1>
					<p class="asd">
					<div><h1>Адрес электронной почты: krivitzky.sergej@yandex.ru<h1></div>
					<div><h1>Номер телефона МТС: +37533296603<h1></div>
					</p>
				</div>
				
			</div>
		</div>
		<div class="col-md-3 glblock">
			<div class="inner-sidebar-2">Сайдбар2</div>
		</div>
	
	
	</div>
	
	<?php require_once "blocks/footer.php" ?>
	<?php require_once "blocks/registration.php" ?>

	<script src="js/main.js"></script>
	<script src="js/autorization.js"></script>
</body>
</html>