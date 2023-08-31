<main role="main" class="container"> 
	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-body">
							Kategori: <strong><?= isset($category) ? $category : 'Semua Kategori' ?></strong>  
							<span class="float-right">
								Urutkan harga: <a href="<?= base_url('shop/sortby/asc') ?>" class="badge badge-primary">Termurah</a> | <a href="<?= base_url('shop/sortby/desc') ?>" class="badge badge-primary">Termahal</a>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<?php foreach ($content as $row) : ?>
					<div class="col-md-4">
						<div class="card mb-2" style="width: 16rem;">
							<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" class="card-img-top" width="100%" height="250" style="border:0;">
							<div class="card-body" align="center">
							<h5 class="card-title" align="center"><?= $row->product_title ?></h5>
								<span class="card-title"><strong>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</strong></span>
								<span href="<?= base_url("shop/category/$row->category_slug") ?>" class="badge badge-primary"><i class="fas fa-tags"></i> <?= $row->category_title ?></span>
								<?php echo anchor('katalog/detail/'.$row->id,'<div class="btn btn-sm btn-success">Detail</div>') ?>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
				<?= $pagination ?>		
			</nav>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Pencarian
						</div>
						<div class="card-body">
							<form action="<?= base_url('shop/search') ?>" method="POST">
								<div class="input-group">
									<input type="text" name="keyword" class="form-control" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
									<div class="input-group-append">
										<button class="btn btn-primary" type="submit">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Kategori
						</div>
						<ul class="list-group">
							<li class="list-group-item"><a href="<?= base_url('home') ?>">Semua kategori</a></li>
							<?php foreach (getCategories() as $category) : ?>
								<li class="list-group-item"><a href="<?= base_url("shop/category/$category->slug") ?>"><?= $category->title ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
			</nav>
		</div>
	</div>
</main>