<nav class="navbar navbar-expand-md                                                                                                                                                     fixed-top nav class="navbar navbar-light" style="background-color: #FF4500;">
	<div class="container">
	<li><img class="image" src="<?= base_url() ?>/assets/image/logocma.png"  width="60px" style="margin: 1px;padding: 0px color:white;"></li>	
	<a class="navbar-brand" href="<?= base_url() ?>" style="font-family:arial; color:white">CYBERCODE MEDIA ALTERNATIF</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
			aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url() ?>"style="font-family:Helvetica; color:white">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('katalog') ?>"style="font-family:Helvetica; color:white">Katalog <span class="sr-only">(current)</span></a>
				</li>
				
			</ul>
			<ul class="navbar-nav">
				<?php if (!$this->session->userdata('is_login')) : ?>
					<li class="nav-item">
						<a href="<?= base_url('login') ?>" class="nav-link" style="color:white">Login</a>
					</li>
				<?php else : ?>
					<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="dropdown-1" , data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false" style="font-family:Helvetica; color:white">Menu</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-1">
						<a href="<?= base_url('category') ?>" class="dropdown-item" style="color:black">Kategori</a>
						<a href="<?= base_url('product') ?>" class="dropdown-item" style="color:black">Produk</a>
						<a href="<?= base_url('user') ?>" class="dropdown-item" style="color:black">Pengguna</a>
					</div>
				</li>
					<li class="nav-item dropdown">
						<a href="#" style="font-family:Helvetica; color:white" class="nav-link dropdown-toggle" id="dropdown-2" , data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata("name") ?></a>
						<div class="dropdown-menu" aria-labelledby="dropdown-2">
							<a href="<?= base_url('profile') ?>" class="dropdown-item" style="color:black">Profile</a>
							<a href="<?= base_url('logout') ?>" class="dropdown-item" style="color:black">Logout</a>
						</div>
					</li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</nav>