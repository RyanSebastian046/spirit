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
  <!-- <div class="content-wrapper">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Area Chart</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body" style="display: block;">
        <div class="chart">
          <div class="chartjs-size-monitor">
            <div class="chartjs-size-monitor-expand">
              <div class=""></div>
            </div>
            <div class="chartjs-size-monitor-shrink">
              <div class=""></div>
            </div>
          </div>
          <canvas id="areaChart"
            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 332px;"
            width="332" height="250" class="chartjs-render-monitor"></canvas>
        </div>
      </div>

    </div>

  </div> -->

  <!-- Footer -->
  <?php $this->load->view('admin/template/footer') ?>

</div>

<!-- Script JS -->
<?php $this->load->view('admin/template/scriptjs') ?>
</body>

</html>