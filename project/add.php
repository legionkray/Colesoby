<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crossroads Worlds</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap"
		  rel="stylesheet">
</head>
<body>
<?php
require ('connect.php');

if(isset($_POST['submit'])){
	$title = mysqli_real_escape_string($connection, $_POST['title']);
	$master = mysqli_real_escape_string($connection, $_POST['master_name']);
	$text = mysqli_real_escape_string($connection, $_POST['text']);
	$datefield = mysqli_real_escape_string($connection, $_POST['datefield']);
	$timefield = mysqli_real_escape_string($connection, $_POST['timefield']);
	
	$datefield.=$timefield;
	
	$sermon_date = date('Y-m-d H:i:s', strtotime($datefield));
	
	
	$query = "INSERT INTO posts (title, text, date,master_name) VALUES 
		('$title', '$text', '$sermon_date', '$master')";
		$result = mysqli_query($connection, $query);

		if($result){
			$smsg = "Игра успешно добавлена.";
		} else{
			$fmsg = "Произошла ошибка добавления игры.";
		}
		
}
?>
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

	<div class="container">
        <form class="form-signin" method="POST">
            <h2>Добавление игры в расписание</h2>
            <?php if(isset($smsg)){ ?><div class="alert alert-success"
                                           role="alert">
                <?php echo $smsg; ?>
            </div> <?php }?>

            <?php if(isset($fmsg)){ ?><div class="alert alert-danger"
                                           role="alert">
                <?php echo $fmsg; ?>
                </div> <?php }?>

            <input type="text" name="master_name" class="form-control"
            placeholder="Мастер" required>
			<input type="text" name="title" class="form-control"
            placeholder="Название игры" required>
            <textarea rows="10" cols="49" name="text" placeholder="Описание игры" required></textarea>
			<input type="date" name="datefield" required>
			<input type="time" name="timefield" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
                Добавить игру
            </button>
            
        </form>
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