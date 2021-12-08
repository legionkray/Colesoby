<?php
session_start();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
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
			
			<a href="add.php" <?php if (!($_SESSION['id'] == 1)){ echo 'style="display:none;"';}?>>Добавить игру</a>
			<a id="menu" href="#" class="icon">&#9776;</a>
		</div>
	</nav>
</header>
<body>
<?php
require ('connect.php');

if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	$password_again = $_POST['password_again'];
	$query = "SELECT username FROM `users` WHERE username = '$username' ";
	$row_username = mysqli_fetch_row(mysqli_query($connection, $query));
	$query = "SELECT email FROM `users` WHERE email = '$email' ";
	$row_email = mysqli_fetch_row(mysqli_query($connection, $query));
	if($_POST['password'] != $_POST['password_again']){
		$fmsg = "Пароли не совпадают.";
	} else if(iconv_strlen($_POST['password'], 'UTF-8') <= 3){
		$fmsg = "Пароль слишком короткий. Пароль должен содержать более 3-х символов";
	} else if(iconv_strlen($_POST['password'], 'UTF-8') >= 16){
		$fmsg = "Пароль слишком длинный. Пароль не должен содержать более 15-ти символов";
	} else if(iconv_strlen($_POST['username'], 'UTF-8') <= 3){
		$fmsg = "Логин слишком короткий. Логин должен содержать более 3-х символов";
	} else if(iconv_strlen($_POST['username'], 'UTF-8') >= 16){
		$fmsg = "Логин слишком длинный. Логин не должен содержать более 15-ти символов";
	} else if($row_username != null){
		$fmsg = "Такой логин уже существует.";
	} else if($row_email != null){
		$fmsg = "$row_email[0]";
	} 
	else{
		

		$query = "INSERT INTO users (username, email, password) VALUES 
		('$username', '$email', '$password')";
		$result = mysqli_query($connection, $query);

		if($result){
			$smsg = "Регистрация успешно завершена";
		} else{
			$fmsg = "Произошла ошибка регистрации.";
		}
	}
} 
?>
    <div class="container">
        <form class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php if(isset($smsg)){ ?><div class="alert alert-success"
                                           role="alert">
                <?php echo $smsg; ?>
            </div> <?php }?>

            <?php if(isset($fmsg)){ ?><div class="alert alert-danger"
                                           role="alert">
                <?php echo $fmsg; ?>
                </div> <?php }?>

            <input type="text" name="username" class="form-control"
            placeholder="Username" required>
            <input type="email" name="email" class="form-control"
                   placeholder="Email" required>
            <input type="password" name="password" class="form-control"
                   placeholder="Password" required>
			<input type="password" name="password_again" class="form-control"
                   placeholder="Put password again" required>	   
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
                Регистрация
            </button>
			<a href="login.php" class="btn btn-lg btn-primary btn-block">Вход</a>
			<a href="logout.php" class="btn btn-lg btn-primary btn-block">Выход</a>
        </form>
    </div>
</body>
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
</html>