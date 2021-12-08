<?php

function articles_all($connection){
	$query = "SELECT * FROM articles ORDER BY id DESC";
	$result =mysqli_query($connection, $query);
	
	if(!$result)
		die(mysqli_error($connection));
	
	$n = mysqli_num_rows($result);
	$articles = array();
	
	for($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$articles[] = $row;
	}
	
	return $articles;
}

function article_get($connection, $id){
	$query = sprintf("SELECT * FROM articles WHERE id=%d",(int)$id);
	$result =mysqli_query($connection, $query);
	
	if(!$result)
		die(mysqli_error($connection));
	
	$article = mysqli_fetch_assoc($result);
	
	return $article;
}

function articles_new($connection, $title, $date, $content){
	
	$title = trim($title);
	$content = trim($content);
	
	if ($title == '')
		return false;
	
	$t = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
	
	$query = sprintf($t, mysqli_real_escape_string($connection, $title),
	mysqli_real_escape_string($connection, $date),
	mysqli_real_escape_string($connection, $content));
	
	$result = mysqli_query($connection, $query);
	
	if (!$result)
		die(mysqli_error($connection));
	
	return true;
	
}

function articles_edit($id, $title, $date, $content){
}
function articles_delete($connection, $id){
	$id = (int)$id;
	if($id == 0)
		return false;
	
	$query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
	$result = mysqli_query($connection, $query);
	
	if (!$result)
		die(mysqli_error($link));
	return mysqli_affected_rows($link);
	
}
?>