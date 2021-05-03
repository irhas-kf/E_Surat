    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-user"></i> Dashboard</a></li>
      </ol>
    </section>

          <!-- /.box -->
    <!-- Main content -->
          <div class="row">
        <div class="col-xs-10">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">TABLE REKAP DATA VERIFIKATOR</h2>
            </div>

          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        Nama
                      </label>
                    </div>
                  </th>

                  <th>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        Alamat
                      </label>
                    </div>
                  </th>

                  <th>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        NIK
                      </label>
                    </div>
                  </th>

                  <th>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        No.Kartu Keluarga
                      </label>
                    </div>
                  </th>

                </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach($datasurat as $u){
                      ?>
                <tr>
                  <td><?php echo $u->penerima ?></td>
                </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>NIK</th>
                  <th>No.Kartu Keluarga</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>



    <!-- /.content -->

<script>
</script>
