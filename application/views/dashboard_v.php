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

    <section class="box-body">
      <div class="box box-info">
            <div class="box-header with-border">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Grafik Kategori Semua Surat per Tahun
                </h3>
              </div>
              <div class="card-body">
                <div id="bar-chart" style="height: 400px;"></div>
              </div>
            </div>
      </div>
    </section>

<script>
  $(function () {

    var bar_data = {
      data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9], [7,19], [8,91], [9,90], [10,29], [11,39], [12,79]],
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
        ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June'], [7,'July'], [8,'August'], [9,'September'], [10,'October'], [11,'November'], [12,'December']]
      }
    })
    /* END BAR CHART */

  })
</script>
