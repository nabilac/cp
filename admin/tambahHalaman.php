<?php include("inc_header.php")?>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tambah Halaman</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="halaman.php">Data Halaman</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Halaman</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body"> 
                                        <?php
                                            include 'koneksi.php';
                                        ?>
                                        <form class="form form-horizontal" action="insertHalaman.php" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Nama Company Profile</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="nama_cp" placeholder="Nama Company Profile">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Judul</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="judul" placeholder="Judul">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Isi</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <textarea type="text" id="first-name" class="form-control"
                                                            name="isi" placeholder="Isi"></textarea>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Gambar</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                          <textarea class="form-control" id="summernote" name="gambar" class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
<?php include("inc_footer.php")?> 