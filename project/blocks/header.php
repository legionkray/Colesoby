<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top"> <!-- 2 урок бутстрапа гоша дударь тут шапка -->
	<div class="container-fluid">
		<a href="#" class="navbar-brad"><img src="img/logo.png"</a> <!--лого хедера -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a href="index.php" class="nav-link">Главная</a>
				</li>
				<li class="nav-item">
					<a href="archive.php" class="nav-link">Архив новостей</a>
				</li>
				<li class="nav-item">
					<a href="about us.php" class="nav-link">О нас</a>
				</li>
				<li class="nav-item">
					<a href="contakt.php" class="nav-link">Контакты</a>
				</li>
				<li class="nav-item">

				<?php 
					if (isset($_SESSION['username'])){
					$username =$_SESSION['username'];
					echo "<a href='logout.php' class='nav-link'>Logout</a>";
					}else{
					echo "<a href='login.php' id='myBtn1' class='nav-link'>Авторизация</a>";
					}
					?>
				</li>
				<li class="nav-item">
					<a href="#" id="myBtn" class="nav-link ">Регистрация</a>
				</li>
			</ul>
		</div>
			
	</div>
</nav>

	