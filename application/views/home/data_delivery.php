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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DATA DELIVERY</h3>
            </div>

            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <!-- <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dt-buttons btn-group flex-wrap"> <button
                                    class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                    aria-controls="example1" type="button"><span>Copy</span></button> <button
                                    class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                    aria-controls="example1" type="button"><span>CSV</span></button> <button
                                    class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                    aria-controls="example1" type="button"><span>Excel</span></button> <button
                                    class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                    aria-controls="example1" type="button"><span>PDF</span></button> <button
                                    class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1"
                                    type="button"><span>Print</span></button>
                                <div class="btn-group"><button
                                        class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"
                                        tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"
                                        aria-expanded="false"><span>Column visibility</span><span
                                            class="dt-down-arrow"></span></button></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control form-control-sm" placeholder=""
                                        aria-controls="example1"></label></div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">
                                            1
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            2
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            3
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            4
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            5
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            6
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            7
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            8
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            9
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($records as $record): ?>
                                <tr>
                                    <td>
                                        <?php echo $record->JidNumber; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->Purchase_orderNo; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->Description; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->Order_Qty; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->Delivery_Quantity; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->WBS_Element; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->Net_Price; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->Total_Net_Price; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->Curr; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->Delivery_status; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->Doc_Date; ?>
                                    </td>
                                    <td>
                                        <?php echo $$record->Crcy; ?>
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
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">1</th>
                                        <th rowspan="1" colspan="1">2</th>
                                        <th rowspan="1" colspan="1">3</th>
                                        <th rowspan="1" colspan="1">4</th>
                                        <th rowspan="1" colspan="1">5</th>
                                        <th rowspan="1" colspan="1">6</th>
                                        <th rowspan="1" colspan="1">7</th>
                                        <th rowspan="1" colspan="1">8</th>
                                        <th rowspan="1" colspan="1">9</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1
                                to 10
                                of 57 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a
                                            href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                            data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                            data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                            data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                            data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                            data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                            data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                    <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                            aria-controls="example1" data-dt-idx="7" tabindex="0"
                                            class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>

<!-- Footer -->
<?php $this->load->view('home/template/footer') ?>

</div>

<!-- Script JS -->
<?php $this->load->view('home/template/scriptjs') ?>

<script>
    $(document).ready(function () {
        let table = new DataTable('#myTable');
    });
</script>
</body>

</html>