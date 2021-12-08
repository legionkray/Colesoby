<?php
	session_start();
	require "connect.php";
	
	if(isset($_POST['username']) and isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "select username, password from users where username = '$username'";
		$result = mysqli_query($connection, $query)or die(mysqli_error($connection));
		$user = mysqli_fetch_array($result);
		$count = mysqli_num_rows($result);
		if($count == 1){
			if ($user['password']== $password){
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['id'] = $id['id'];
			}else{
				$fmsg = "Введен неверный пароль.";
			}
			
		}else{
			$fmsg = "Такой логин не существует.";
		}
		
	}
	if (isset($_SESSION['username'])){
		$username =$_SESSION['username'];
		if ($username == 'legionkray' && $password == 1234)
		{
				
				header('Location: adminpanel.php');
				
	}/*else{
		header('Location: index.php');
	}*/
	}
	
	
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<?php
		$title = "Авторизация";
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
				<form action="login.php" class="bloklog" method="POST">
				<div class="bloklog">

				<p class="bloklog">
					<p class="bloklog"><strong>Логин</strong>:</p>
					<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert">
					<?php echo $fmsg; ?>
					</div><?php }?>
					<input type="text" name="username" value="<?php echo @$data['username']; ?>">
				</p>
					
				<p>
					<p><strong>Пароль</strong>:</p><?php echo "$user[username]";?>
					<input type="password" name="password" value="<?php echo $data['password']; ?>">
				</p>
				<p>
					<button type="submit" name="do_login">Войти</button>
				</p>
					
				</form>
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