<main role="main" class="container"> 

	<?php $this->load->view('layouts/_alert') ?>

	<div class="jumbotron">      
        <center>
            <h2> Selamat Datang
                <?php echo $this->session->userdata('name'); ?>
                di Website Kami!</h2>
            <h2>CV.CYBERCODE MEDIA ALTERNATIF</h2>
            <p align="center">Website ini dibuat untuk memudahkan customer agar dapat mengetahui informasi produk pada CV. Cybercode Media Alternatif divisi Kain<br /><br />
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('assets/image/logo2.jpg') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>CV.Cybercode Media Alternatif</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/image/bg6.jpg') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Memiliki Warna Kain Yang Beragam</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/image/vt1.jpg') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Memiliki Banyak Stok Kain Berkualitas</h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
	<br>
        </center>
    </div>

    <div class="container mt-5">
	    <h4 class="center">Alamat CV.CYBERCODE MEDIA ALTERNATIF</h4>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9872502296903!2d107.5389387!3d-6.892127799999962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e1c29d7a4e05%3A0x15e612ab8ef9f0bc!2sCybercode%20Media%20Alternatif!5e0!3m2!1sid!2sid!4v1692857838908!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                </center>
            </div>

        <div class="container mt-5">
	    <h4 class="center">Preview Produk Kain CV.CYBERCODE MEDIA ALTERNATIF</h4>
			<div class="row">
				<?php foreach ($content as $row) : ?>
					<div class="col-md-3">
						<div class="card mb-3" style="width: 16rem;">
							<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" class="card-img-top" width="100%" height="250" style="border:0;">
							<div class="card-body" align="center">
								<h5 class="card-title" align="center"><?= $row->product_title ?></h5>
								<span class="card-title"><strong>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</strong></span>
								<span href="<?= base_url("shop/category/$row->category_slug") ?>" class="badge badge-primary"><i class="fas fa-tags"></i> <?= $row->category_title ?></span>
							</div>
						</div>
					</div>
				<?php endforeach ?>
                </center>
			</div>
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
				<?= $pagination ?>	
			
			</nav>
		</div>
	</div>
</main>