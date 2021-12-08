<?php
	require_once("connect.php");
	require_once("models/articles.php");
	

	$article = article_get($connection, $_GET['id']);
	
	include("views/article.php");
	?>