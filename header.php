<header class="header_area">
	<div class="top_menu row m0">
		<div class="container">
			<div class="float-left">
				<ul class="list header_social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#"><i class="fa fa-behance"></i></a></li>
					<?php
						if (isset($_SESSION['bricoleur'])) {
						 echo 'Bonjour '.$_SESSION['bricoleur'];
						 echo"<a href='deconnexion.php'>";
						echo"(Deconnexion)</a>";
                        }
                      ?>

				</ul>

			</div>


			<div class="float-right">
				<div class="button-group-area mt-10">
					<?php
								if(!isset($_SESSION["bricoleur"])){
						
						
									echo"<a href='connexion.php' class='genric-btn success-border circle'>";
									echo"Se Connecter";
									echo"</a>";
									echo"<a href='inscri.php' class='genric-btn danger-border circle'>";
									echo"Inscri";
									echo"</a>";
						
					
								}
								
								?>


					<a class="dn_btn" href="inscri_bricoleur.php">DEVENIR BRICOLEUR</a>
				</div>
			</div>
		</div>
	</div>
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
						<li class="nav-item"><a class="nav-link" href="service.html">Services</a>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
								aria-haspopup="true" aria-expanded="false">Pages</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="projects.html">Projects</a>
								<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
							</ul>
						</li>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
								aria-haspopup="true" aria-expanded="false">Blog</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
								<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
							</ul>
						</li>

						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>