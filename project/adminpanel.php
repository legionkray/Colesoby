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
				<?php
					require_once("connect.php");
					require_once("models/articles.php");
					
					if(isset($_GET['action']))
						$action = $_GET['action'];
					else
						$action = "";
					
					if($action == "add"){
						if(!empty($_POST)){
							articles_new($connection, $_POST['title'], $_POST['date'], $_POST['content']);
							header('Location: adminpanel.php');
						}
						include("views/article_admin.php");
					}else if($action == "edit"){
						if(!isset($_GET['id']))
							header("Location: adminpanel.php");
						$id = (int)$_GET['id'];
						
						if(!empty($_POST) && $id > 0){
							articles_edit($connection, $id, $_POST['title'],
				$_POST['date'], $_POST['content']);
							header("Location: adminpanel.php");
						}
						
						$article = article_get($connection, $id);
						include("views/article_admin.php");}
					else if($action == "delete"){
						$id = $_GET['id'];
						$article = articles_delete($link, $id);
						header("Location: adminpanel.php");
					}
					else{
						$articles = articles_all($connection);
					}
					
					include("views/articles_admin.php");
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

