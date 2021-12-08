<!DOCTYPE html>
<html lang="ru">
<head>
<?php
		$title = "Главная";
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
					<?php foreach($articles as $a): ?>
					<div class="article">
						<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
							<em>Опубликовано: <?=$a['date']?></em>
							<p><?=$a['content']?></p>
					</div>
					<?php endforeach ?>
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