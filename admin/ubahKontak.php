<?php include("inc_header.php")?>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Ubah Kontak</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="kontak.php">Data Kontak</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ubah Kontak</li>
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

                                        <?php
                                            $id=$_GET['id'];
                                            $data=mysql_query("SELECT * from kontak WHERE id='$id'");
                                            while ($r=mysql_fetch_array($data)) {
                                        ?>
                                        <form class="form form-horizontal" action="updateKontak.php" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <input type="hidden" class="form-control" name="id" value="<?php echo $r['id']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Alamat</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="alamat" value="<?php echo $r['alamat']; ?>">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="email" value="<?php echo $r['email']; ?>">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>No. Telp</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="telp" value="<?php echo $r['telp']; ?>">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Link Twitter</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="link_twitter" value="<?php echo $r['link_twitter']; ?>">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Link Faceebook</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="link_facebook" value="<?php echo $r['link_facebook']; ?>">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Link Instagram</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="link_instagram" value="<?php echo $r['link_instagram']; ?>">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Link Linkedin</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="link_linkedin" value="<?php echo $r['link_linkedin']; ?>">
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
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
<?php include("inc_footer.php")?> 