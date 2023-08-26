<!-- Meta Stylesheet -->
<?php $this->load->view('home/template/meta') ?>

<div class="wrapper">

    <!-- Preload Animation -->
    <?php $this->load->view('home/template/preload') ?>

    <!-- Navbar -->
    <?php $this->load->view('admin/template/navbar') ?>

    <!-- Sidebar -->
    <?php $this->load->view('admin/template/sidebar') ?>

    <!-- Content -->
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="text-align:center"><b>DATA DELIVERY</b></h3>
            </div>
           
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                        <!-- <input type="submit" value="Create Wew" class="btn btn-success btn-create float-center"> -->
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">
                                            JidNo
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Purchase_orderNo
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Description
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Order_Qty
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Delivery_Quantity
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            WBS_Element
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Net_Price
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Total_Net_Price
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Curr
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Delivery_status
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Doc_Date
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Stock
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            action
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
                                        <?php echo $record->Purchase_orderNo; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Description; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Order_Qty; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Delivery_Quantity; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->WBS_Element; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Net_Price; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Total_Net_Price; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Curr; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Delivery_status; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Doc_Date; ?>
                                    </td>
                                    <td>
                                        <?php echo $record->Crcy; ?>
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
                                        <th rowspan="1" colspan="1">JidNo</th>
                                        <th rowspan="1" colspan="1">Purchase_orderNo</th>
                                        <th rowspan="1" colspan="1">Description</th>
                                        <th rowspan="1" colspan="1">Order_Qty</th>
                                        <th rowspan="1" colspan="1">Delivery_Quantity</th>
                                        <th rowspan="1" colspan="1">WBS_Element</th>
                                        <th rowspan="1" colspan="1">Net_Price</th>
                                        <th rowspan="1" colspan="1">Total_Net_Price</th>
                                        <th rowspan="1" colspan="1">Curr</th>
                                        <th rowspan="1" colspan="1">Delivery_status</th>
                                        <th rowspan="1" colspan="1">Doc_Date</th>
                                        <th rowspan="1" colspan="1">Stock</th>
                                        <th rowspan="1" colspan="1">action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
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
<?php $this->load->view('admin/template/scriptjs') ?>

<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthMenu: [ 10, 25, 50, 75, 100 ],
        buttons: [ 'copy', 'excel', 'print','colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
</body>

</html>