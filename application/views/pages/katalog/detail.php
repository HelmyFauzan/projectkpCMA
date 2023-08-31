<div class="container-fluid">
    <div class="card">
    <div class="card-header">
        Detail Produk
    </div>
    <div class="card-body">
    
        <div class="row">
            <div class="col-md-4">
            <img src="<?= $product->image ? base_url("images/product/$product->image") : base_url("images/product/default.png") ?>" class="card-img-top">

            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <td>Nama Produk</td>
                        <td><strong><?php echo $product->title?></strong></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><strong><?php echo $product->description?></strong></td>
                    </tr>
                    <tr>
                        <td>Warna</td>
                        <td><strong><?php echo $product->color?></strong></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><strong><?php echo $product->price?></strong></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td><strong><?php echo $product->title?></strong></td>
                    </tr>
                </table>
            </div>
        </div>
        <center>  <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('katalog/index') ?>" role="button">Kembali</a></p> </center>
        
    </div>
    </div>
</div>