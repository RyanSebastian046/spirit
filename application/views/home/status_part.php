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
      <h3>STATUS PART</h3>
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead class="thead-dark">
            <tr>
              <th class="text-center">JidNo</th>
              <th class="text-center">Part Number</th>
              <th class="text-center">Part Name</th>
              <th class="text-center">WBS Element</th>
              <th class="text-center">Opr</th>
              <th class="text-center">WC</th>
              <th class="text-center">WC Description </th>
              <th class="text-center">Actual Start</th>
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
              <td>yoi</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane Smith</td>
              <td>jane@example.com</td>
              <td>User</td>
              <td>ZFIN</td>
              <td>okey</td>
              <td>oiii</td>
              <td>yoi</td>
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