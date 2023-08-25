<!-- Meta Stylesheet -->
<?php $this->load->view('home/template/meta') ?>

<div class="wrapper">

    <!-- Preload Animation -->
    <?php $this->load->view('home/template/preload') ?>

    <!-- Navbar -->
    <?php $this->load->view('home/template/navbar') ?>

    <!-- Sidebar -->
    <?php $this->load->view('home/template/sidebar') ?>

    <!-- Content -->
    <div class="content-wrapper">
        <!--TABEL  -->
        <div class="container">
            <h3>DATA PRODUKSI</h3>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">JidNo</th>
                            <th class="text-center">Part Number</th>
                            <th class="text-center">Part Name</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">WBS Element</th>
                            <th class="text-center">Actual Start</th>
                            <th class="text-center">User Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>Admin</td>
                            <td>ZFIN</td>
                            <td>okey</td>
                            <td>oiii</td>
                            <td>
                                <a class="btn btn-primary btn-sm"
                                    href="<?php echo site_url('admin/Dashboard/status_part') ?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    Details
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>User</td>
                            <td>ZFIN</td>
                            <td>okey</td>
                            <td>oiii</td>
                            <td>
                                <a class="btn btn-primary btn-sm"
                                    href="<?php echo site_url('admin/Dashboard/status_part') ?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    Details
                                </a>
                            </td>
                        </tr>
                        <!-- Tambahkan data lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>


    </div>

    <!-- Footer -->
    <?php $this->load->view('home/template/footer') ?>

</div>

<!-- Script JS -->
<?php $this->load->view('home/template/scriptjs') ?>
</body>

</html>