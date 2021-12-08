<!DOCTYPE html>
<html lang="ru">
<head>
<?php
		$title = "Добавление";
		$css_stile="../css/main.css";
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
				<div class="container">
					<h1>Добавление статьи</h1>
					<div>
						<form method="post" action="adminpanel.php?action=add">
							<label>
								Название
								<input type="text" name="title" style="width:500px;" value="" class="form-item" autofocus required>
							</label>
							<label>
								Дата     
								<input type="date" name="date" style="width:500px;" value="" class="form-item" required>
							</label>
							<label>
								Содержимое
								<textarea class="form-item" style="width:500px;height:400px" name="content" required></textarea>
							</label>
							<form name="upload" action="download_img.php" method="POST" ENCTYPE="multipart/form-data"> 
							Выберите файл для загрузки: 
							<input type="file" name="userfile">
							<?php
								$uploaddir = '../img/';
								$apend=date('id').'.jpg'; 
								$uploadfile = "$uploaddir$apend"; 
						
								if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=512000)) 
								{ 
								  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
								   { 
								   $size = getimagesize($uploadfile); 
									 if ($size[0] < 501 && $size[1]<1501) 
									 { 
									 echo "Файл загружен. Путь к файлу: <b>http:/yoursite.ru/".$uploadfile."</b>"; 
									 } else {
									 echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)"; 
									 unlink($uploadfile); 
									 } 
								   } else {
								   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
								   } 
								} else { 
								echo "Размер файла не должен превышать 512Кб";
								} 
								?>
							</form>
							<p></p>
							<input type="submit" value="Сохранить" class="btn">
							
						</form>
					</div>
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