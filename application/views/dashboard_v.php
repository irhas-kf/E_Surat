<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
          <!-- <li class="breadcrumb-item active">Calendar</li> -->
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- /.box -->
<!-- Main content -->
<section class="content">
  <div class="box">
    <div class="box-body">
    <marquee><h2>Selamat Datang di Aplikasi E - Rekap Dinas Kesehatan Pengendalian Penduduk dan Keluarga Berencana Kota Mojokerto</h2></marquee>
    </div>
  </div>
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">
        <i class="far fa-chart-bar"></i>
        Grafik Rekap Surat Per Tahun
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div id="bar-chart" style="height: 100%;"></div>
    </div>
    <!-- /.card-body-->
  </div>
</section>
<!-- /.content -->
<script>
  $(function () {

    var bar_data = {
      data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
      bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
      }
    })
    /* END BAR CHART */

  })
</script>
