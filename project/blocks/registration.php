<?php
		require('connect.php');
	
		if (isset($_POST['username']) && isset($_POST['password'])){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
		
			$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($connection, $query);
		
			if($result){
				$smsg = "Регистрация прошла успешно";
			}else{
			$fsmsg = "ошибка";
			}
		}	
?>




<div id="mypopup" class="popup">
		<div class="popup-content">
			<span class="close">&times;</span>
			<form class="mcontainer" method="POST">
				<h2>Регистрация:</h2>
				<?php if(isset($smsg)){ ?><div class="alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
				<?php if(isset($fsmsg)){ ?><div class="alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>
			
				<input type="text" name="username" class="popup-control" placeholder="Username" required>
				<input type="email" name="email" class="popup-control" placeholder="Email" required>
				<input type="password" name="password" class="popup-control" placeholder="Password" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Принять</button>
			</form>
				
		</div>
	</div>
	
