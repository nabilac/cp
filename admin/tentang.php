<?php include("inc_header.php")?>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Tentang</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Tentang</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <a href="tambahTentang.php" type="submit" class=""><i class="bi bi-plus-square-fill"></i></a>
                        </div>
                        <div class="card-body">
                            <?php
                                include 'koneksi.php';
                            ?>
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Isi 1</th>
                                        <th>Isi 2</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $data = mysql_query("select * from tentang");
                                            $no = 1;
                                            while($r = mysql_fetch_array($data)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $r['isi1']; ?></td>
                                            <td><?php echo $r['isi2']; ?></td>
                                            <td>
                                            <a href='ubahTentang.php?id=<?php echo $r['id'];?>'>
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>   
                                            &nbsp   
                                            <a href='hapusTentang.php?id=<?php echo $r['id'];?>'>
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                            </td>  
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
<?php include("inc_footer.php")?> 