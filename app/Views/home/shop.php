<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <?= $this->include('home/partials/head') ?>
</head>

<body>

    <?= $this->include('home/partials/maintop') ?>
    
    <?= $this->include('home/partials/mainheader') ?>

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="row product-categorie-box">
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade show active" id="list-view">
                                    <!-- perulangan -->
                                    <?php foreach ($produks as $key => $d): ?>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="new">New</p>
                                                        </div>
                                                        <img src="assets/dashboard/images/<?= $d->gambar ?>" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4><?= $d->nama_produk ?></h4>
                                                    <h5><?= $d->harga ?></h5>
                                                    <p><?= $d->deskripsi ?></p>
                                                    <a class="btn hvr-hover" href="<?php echo base_url('shopdetail').'/'.$d->id_produk; ?>">Lihat Produk</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <!-- end perulangan -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-product-box">
                    <?= $pager->links('produk', 'bootstrap_pagination'); ?>
                    </div>
                </div>
               
                       
                                    
            </div>
        </div>
    </div>
    <!-- End Shop Page -->
  
    <?= $this->include('home/partials/footer') ?>
</body>

</html>