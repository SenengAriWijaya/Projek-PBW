<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>See more Details</p>
                    <h1>Single Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="/assets/img/products/<?= $barang['gambar']; ?>" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3><?= $barang['nama_barang']; ?></h3>
                    <p class="single-product-pricing"><span>Per 1 Pcs</span><?= $barang['harga']; ?></p>
                    <p><?= $barang['keterangan']; ?></p>
                    <div class="single-product-form">
                        <form action="<?php echo site_url('/'); ?>">
                            <input type="number" placeholder="0">
                        </form>
                        <a href="<?php echo site_url('Cart'); ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        <p><strong>Categories: </strong><?= $barang['kategori']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->

<!-- more products -->
<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Related</span> Products</h3>
                    <p>Komponen Elektronika adalah elemen dasar yang digunakan untuk membentuk suatu rangkaian elektronika dan biasanya dikemas dalam bentuk diskrit dengan dua atau lebih terminal penghubung. Dear Electronics juga menyediakan komponen aktif dan pasif beserta Kit Elektronika</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="<?php echo site_url('Single_Product4'); ?>"><img src="/assets/img/products/LED.jpg" alt=""></a>
                    </div>
                    <h3>LED</h3>
                    <p class="product-price"><span>Per Pcs</span> Rp1.000 </p>
                    <a href="<?php echo site_url('Cart'); ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="<?php echo site_url('Single_Product3'); ?>"><img src="/assets/img/products/Kit_Counter_Up.jpg" alt=""></a>
                    </div>
                    <h3>Kit Counter Up</h3>
                    <p class="product-price"><span>Per Pcs</span> Rp85.000</p>
                    <a href="<?php echo site_url('Cart'); ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="<?php echo site_url('Single_Product1'); ?>"><img src="/assets/img/products/Resistor 1k.jpg" alt=""></a>
                    </div>
                    <h3>Resistor 1K</h3>
                    <p class="product-price"><span>Per Pcs</span> Rp100 </p>
                    <a href="<?php echo site_url('Cart'); ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end more products -->

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