<?php include("inc_header.php")?>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tambah Admin</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="admin.php">Data Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Admin</li>
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
                                        <form class="form form-horizontal" action="insertAdmin.php" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Nama</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="nama" placeholder="Nama">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="email" id="email-id" class="form-control"
                                                            name="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>No. Telp</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="number" id="contact-info" class="form-control"
                                                            name="telp" placeholder="No. Telp">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Username</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="username" id="username" class="form-control"
                                                            name="username" placeholder="Username">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-10 form-group" id="show_hide_password">
                                                        <input type="password" id="password" class="form-control"
                                                            name="password" placeholder="Password">
                                                            <div class="input-group-addon">
                                                                <a href="">
                                                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                                </a>Show Password
                                                            </div>
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