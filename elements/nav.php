

<nav class="navbar navbar-expand-lg navbar-dark">
<a class="navbar-brand mt-1 logo" href="/"><img src="/assets/images/Asset 2.png" alt="main-logo" width="60"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon">
	
	</span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav ml-auto">


		<?php 
		
		if ( !empty($_SESSION['user_id']) ) { // They ARE logged in!

			(function(){
				$u = new User;
				$user = $u->get_by_id($_SESSION['user_id']);
		?>

				<li class="nav-item dropdown mr-5">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Welcome <?=$user['firstname']?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">

					<a class="dropdown-item" href="/posts/">All Posts</a>
					<a class="dropdown-item" href="/users/">My Profile</a>

					<a class="dropdown-item text-danger" href="/api/users/logout.php">Logout</a>

					</div>
				</li>

		<?php 
			})();
		} 
		?>



	</ul>

  </div>
</nav>