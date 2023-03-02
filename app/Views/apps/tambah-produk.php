<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <!-- dropzone css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?= $page_title ?>
                <!-- end page title -->
            <div class="card">
            
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Textual inputs</h4>
                                <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each
                                    textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                            </div>
                            <div class="card-body p-4">
                            
                                <div class="row">
                                        <div>
                                        <form action="<?php echo base_url('produk-save'); ?>" enctype="multipart&#x2F;form-data" method="post" accept-charset="utf-8">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Nama Produk</label>
                                                <input class="form-control" name="namaproduk" type="text" id="example-text-input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Ukuran</label>
                                                <input class="form-control" name="ukuran" type="text" id="example-text-input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Deskripsi</label>
                                                <input class="form-control" name="deskripsi" type="text" id="example-text-input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Harga</label>
                                                <input class="form-control" name="harga" type="text" id="example-text-input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Status</label>
                                                <input class="form-control" name="status" type="text"  id="example-text-input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Keterangan</label>
                                                <input class="form-control" name="keterangan" type="text"  id="example-text-input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Upload Foto</label>
                                                <input class="form-control" type="file" name="file" value=""  />
                                            </div>
                                            <div class="mb-3">
                                                <input type="submit" name="mysubmit" value="Upload File!"  />
                                            </div>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div> 
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<?= $this->include('partials/right-sidebar') ?>

<!-- JAVASCRIPT -->
<?= $this->include('partials/vendor-scripts') ?>

<!-- dropzone js -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>