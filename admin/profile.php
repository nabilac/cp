<?php include("inc_header.php")?>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Profile Admin</h3>
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
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Nama</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="nama" value="<?=$admin['nama']?>" disabled>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="email" id="email-id" class="form-control"
                                                            name="email" value="<?=$admin['email']?>" disabled>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>No. Telp</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="number" id="contact-info" class="form-control"
                                                            name="telp" value="<?=$admin['telp']?>" disabled>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Username</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="username" id="username" class="form-control"
                                                            name="username" value="<?=$admin['username']?>" disabled>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-10 form-group" id="show_hide_password">
                                                        <input type="password" id="password" class="form-control"
                                                            name="password" value="<?=$admin['password']?>" disabled>
                                                            <div class="input-group-addon">
                                                                <a href="">
                                                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                                </a>Show Password
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                       <a href="dashboard.php" type="submit" class="btn btn-primary me-1 mb-1">Close</a>
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