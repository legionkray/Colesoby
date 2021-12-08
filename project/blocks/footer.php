<footer class="page-footer font-small unique-color-dark pt-0"> <!--Верстка сайта с нуля на Bootstrap 4 - Закончили footer Web Developer Blog
 -->
	<div class="primary-color">
		<div class="container">
			<div class="row py-4 d-flex align-items-center">
				<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
						<h6 class="mb-0 white-text">Все права защищены &copy;</h6>
				</div>
				<div class="col-md-6 col-lg-7 text-center text-md-right">
					<a href="#" class="fb-ic ml-0">
						<?php 
						if (isset($_SESSION['username'])){
						$username =$_SESSION['username'];
						echo "<a href='adminpanel.php' class='nav-link'>Панель администратора</a>";
						}
						?>
						<i class="fa fa-twitter white-text mr-4"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>