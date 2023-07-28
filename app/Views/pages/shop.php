<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Premium and Original</p>
                    <h1>Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- products -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="input-group mb-80">
                        <input type="text" class="form-control" placeholder="Masukkan keyword barang.." name="keyword" style="height: 40px; margin-right:5px;
                        display: block; border: 1.5px solid #051922; color:#051922;">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row product-lists">
            <?php foreach ($barang as $b) : ?>
                <div class="col-lg-4 col-md-6 text-center Component">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/shop/<?= $b['slug']; ?>"><img src="/assets/img/products/<?= $b['gambar']; ?>" alt=""></a>
                        </div>
                        <h3><?= $b['nama_barang']; ?></h3>
                        <p class="product-price"><span>Per Pcs</span><?= $b['harga']; ?></p>
                        <a href="<?php echo site_url('Cart'); ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <<?php endforeach; ?> </div>

                    <?= $pager->links('barang', 'barang_pagination'); ?>
        </div>
    </div>
    <!-- end products -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/IPB.png" alt="">
                        </div>
                        <div class="single-logo-Tekom">
                            <img src="/assets/img/company-logos/Tekom.png" alt="">
                        </div>
                        <div class="single-logo-Olivia">
                            <img src="/assets/img/company-logos/Olivia.png" alt="">
                        </div>
                        <div class="single-logo-SV">
                            <img src="/assets/img/company-logos/SV-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->