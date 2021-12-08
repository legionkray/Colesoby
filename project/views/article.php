<!DOCTYPE html>
<html lang="ru">
<head>
<?php
		$title = "Главная";
		$css_stile="../css/main.css";
		require_once "blocks/head.php";
?>
</head>
<body>

	

<?php require_once "blocks/header.php" ?>

	<div class="row">
		<div class="col-md-3 glblock">
			<div class="inner-sidebar-1"></div>
		</div>
		<div class="col-md-6 glblock">
			<div class="inner-content">
				<h1></h1>
				<div>
					<div>
						<div class="article">
							<h3><?=$article['title']?></h3>
							<em>Опубликовано: <?=$article['date']?>
							</em>
							<p><?=$article['content']?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 glblock">
			<div class="inner-sidebar-2"></div>
		</div>
	</div>
	
<?php require_once "blocks/footer.php" ?>
<?php require_once "blocks/registration.php" ?>
	
	
	
	

	<script src="js/main.js"></script>
	<script src="js/autorization.js"></script>
</body>
</html>