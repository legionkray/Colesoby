<!DOCTYPE html>
<html lang="ru">
<head>
<?php
		$title = "Главная";
		$css_stile="css/main.css";
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
				<div class="carousel slide" data-ride="carousel" id="slides">
					<ul class="carousel-indicators">
						<li data-target="#slides" data-slide-to="0" class="active"></li>
						<li data-target="#slides" data-slide-to="1"></li>
						<li data-target="#slides" data-slide-to="2"></li>
					</ul>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/2.jpg">
							<div class="carousel-caption">
								<h1 class="display-2">Красивая классика</h1>
								<h3>Бесценный опыт</h3>
								<button type="button" class="btn btn-outline-light btn-lg">Посмотреть</button>
							</div>
						</div>
						<div class="carousel-item ">
							<img src="img/1.jpg">
						</div>
						<div class="carousel-item ">
							<img src="img/3.jpg">
						</div>
					</div>
				</div>
				
				<?php
					require_once("connect.php");
					require_once("models/articles.php");
					
					
					$articles = articles_all($connection);
					
					include("views/articles.php");
					?>
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