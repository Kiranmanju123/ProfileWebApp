<nav class="navbar navbar-expand-sm navbar-light bg-light custom-nav">
	<div class="container">
		<a href="#" class="navbar-brand">Profile</a>
		<button type="button" class="navbar-toggler" data-target="#mynav" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>
			
		</button><!-- button -->
		<div class="collapse navbar-collapse" id="mynav">

			 <ul class="navbar-nav ml-auto">
			 	<li class="nav-item">
			 		<?php if(isset($_SESSION['user_id'])): ?>
			 		<a href="logout.php" class="nav-link btn-success logout-btn">Logout</a>
			 	<?php endif; ?>
			 	</li>
			 	
			 </ul>
		</div><!-- collapse -->
	</div><!-- container -->
</nav><!-- nav close -->