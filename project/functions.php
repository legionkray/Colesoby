<?php

function get_posts(){
	require('connect.php');
	$sql = "SELECT * FROM posts";
	$result = mysqli_query($connection, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}

?>