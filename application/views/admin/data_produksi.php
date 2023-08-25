<!-- Meta Stylesheet -->
<?php $this->load->view('admin/template/meta') ?>

<div class="wrapper">

    <!-- Preload Animation -->
    <?php $this->load->view('admin/template/preload') ?>

    <!-- Navbar -->
    <?php $this->load->view('admin/template/navbar') ?>

    <!-- Sidebar -->
    <?php $this->load->view('admin/template/sidebar') ?>

    <!-- Content -->
    <div class="content-wrapper">
        <!--TABEL  -->

        <head>
            <!-- Tambahkan link CSS Bootstrap dan Font Awesome -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <style>
                .container {
                    margin-top: 0px;
                    max-width: 1200px;
                }

                .btn-create {
                    margin-bottom: 15px;
                }

                .table {
                    width: 100%;
                }

                .thead-dark th {
                    background-color: #343a40;
                    color: #fff;
                    text-align: center;
                    vertical-align: middle;
                }

                .table td {
                    text-align: center;
                    vertical-align: middle;
                }

                .action-btns {
                    display: flex;
                    justify-content: center;
                }

                .action-btns .btn {
                    margin: 0 5px;
                }
            </style>
        </head>

        <body>
            <div class="container">
                <h3 style="text-align:center">DATA PRODUKSI</h3>
                <div class="table-responsive">
                    <input type="submit" value="Create new Project" class="btn btn-success btn-create float-right">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>JidNo</th>
                                <th>Part Number</th>
                                <th>Part Name</th>
                                <th>Qty</th>
                                <th>WBS Element</th>
                                <th>Actual Start</th>
                                <th>User Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($records as $record): ?>
                                <tr>
                                    <td>
                                        <?php echo $record->Order; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Material_Number; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Material_Description; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Committed_Qty; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->WBS_Element; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Actual_StartDate; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->User_Status; ?>
                                    </td>
                                    <td class="action-btns">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder"></i> Details
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>


    </div>

    <!-- Footer -->
    <?php $this->load->view('admin/template/footer') ?>

</div>

<!-- Script JS -->
<?php $this->load->view('admin/template/scriptjs') ?>
</body>

</html>