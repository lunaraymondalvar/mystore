

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">
			<i class="far fa-hand-peace"></i> Qrner Store
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="navbar-nav" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="./home.php"> Home </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="./catalog.php"> Catalog </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#"> Cart <span class="badge bg-light text-dark" id="cart-count"> 

						<?php 
							if(isset($_SESSION['cart'])) {
								echo array_sum($_SESSION['cart']);	
							} else {
								echo 0;
							}
						 ?>

					</span> </a>
				</li>

				<?php if(isset($_SESSION['user'])) { ?>

				<li class="nav-item">
					<a class="nav-link" href="./../controllers/logout.php"> Logout </a>
				</li>

				<?php } else { ?>

				<li class="nav-item">
					<a class="nav-link" href="./login.php"> Login </a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="./register.php"> Register </a>
				</li>

				<?php }; ?>

			</ul>
		</div> <!-- end navbar nav -->
	</nav> <!-- end nav -->

