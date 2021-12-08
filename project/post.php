<?php
	session_start();
	$post_id = $_GET['post_id'];
	if(!is_numeric($post_id)){
		exit();
	}
?>
<?php

			require('connect.php');
			
			$query = "select username from users, registration 
			where users.id = registration.id_users and registration.id_posts = $post_id ";
			$result = mysqli_query($connection, $query);
			$username = mysqli_fetch_all($result, MYSQLI_ASSOC);
			$query = "select master_name from posts 
			where id = $post_id ";
			$result = mysqli_query($connection, $query);
			$master = mysqli_fetch_row($result);
			
			if(isset($_POST['submit'])){
				
				$query = "SELECT count(id_posts) from registration where id_posts = $post_id ";
				$result = mysqli_query($connection, $query);
				$count = mysqli_fetch_row($result);
		
				if($count[0] >= 6){
					$fmsg = "Не более 6 игроков.";
				} else if(empty($_SESSION['username'])){
					$fmsg = "Запись доступна только после регистрации.";
				} else{
					$query = "insert into registration(id_users, id_posts) VALUES  ($_SESSION[id], $post_id)";
					$result = mysqli_query($connection, $query);
					if($result){
						header("Refresh:0");
						$smsg="Успех";
					} else{
						$fmsg = "Ошибка записи.";
					}
				}
			
		
			}
			
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crossroads Worlds</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap"
		  rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
	

<?php if(isset($smsg)){ ?><div class="alert alert-success"
                                           role="alert">
                <?php echo $smsg; ?>
            </div> <?php }?>

            <?php if(isset($fmsg)){ ?><div class="alert alert-danger"
                                           role="alert">
                <?php echo $fmsg; ?>
                </div> <?php }?>
				
	<div class="user-container">
	
		<div class="master-name">
			<p><?=$master[0]?></p>
		</div>
		<hr>
		<div class="user-name">
		<?php
			foreach($username as $user):
		?>
			<p><?=$user['username']?></p>
			<?php
					endforeach;
				?>
		</div>
		
		<hr>
		<div class="post-button">
		<form class="form-signin" method="POST">
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
                Запись
            </button>
			</form>
		</div>
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