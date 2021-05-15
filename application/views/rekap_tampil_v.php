<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url("rekap") ?>">Rekap</a></li>
          <li class="breadcrumb-item active">Cetak Surat</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- /.box -->
<!-- Main content -->
<div class="row">
  <div class="col-md-12">
      <div class="box-body">

        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">FORM REKAP LAMPIRAN SURAT</h3>
          </div>
        </div>

        <form action="<?=base_url('Rekap/aksi_tampil');?>" method="post">

          <div class="col-md-3">

            <div class="box box-default">

              <div class="box-header with-border">
                <h3 class="box-title">Aksi Rekap</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
              </div>

              <!-- /.box-header -->
              <div class="box-body">

                <div class="row">

                  <!-- /.col -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilih Rekap</label>
                      <select name="subject[]" multiple size=9 class="form-control select2" data-placeholder="Pilih Rekap"
                      style="width: 100%;">
                      <option value="tanggal_pengajuan">Tanggal Pengajuan</option>
                      <option value="nama">Nama</option>
                      <option value="nik">NIK</option>
                      <option value="no_kartu_keluarga">Nomor KK</option>
                      <option value="nomor_kis">Nomor KIS</option>
                      <option value="alamat">Alamat</option>
                      <option value="nama_fasker">Faskes</option>
                      <option value="nama_jenis_surat">Jenis Surat</option>
                      <option value="keterangan">Keterangan</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Pilih Cetak per Bulan</label>
                    <select name="bulan" class="form-control">
                      <option value="01">Januari</option>
                      <option value="02">Februari</option>
                      <option value="03">Maret</option>
                      <option value="04">April</option>
                      <option value="05">Mei</option>
                      <option value="06">Juni</option>
                      <option value="07">Juli</option>
                      <option value="08">Agustus</option>
                      <option value="09">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Pilih Cetak per Tahun</label>
                    <select name="tahun" class="form-control" data-placeholder="Pilih Bulan">
                      <style="width: 100%;">
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="tampil" value="tampil" class="btn btn-app"> <i class="fa fa-eye"></i> Tampilakn </button>
                    <button type="submit" name="pdf" value="pdf" class="btn btn-app"> <i class="fa fa-file"></i> PDF </button>
                    <button type="submit" name="excel" value="excel" class="btn btn-app"> <i class="fa fa-file"></i> EXCEL </button>
                    <button type="submit" name="word" value="word" class="btn btn-app"> <i class="fa fa-file"></i> WORD </button>
                  </div>

                </div>

                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->


          </div>
          <!-- /.box-body -->
      </div>
    </form>

      <div class="col-md-9">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Data Table Rekap</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-bordered table-striped">
            <thead>

              <tr>
                <?php
                foreach($datafiledrekapsurat as $u){
                    ?>
                <th><?php echo $u ?></th>
              <?php } ?>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <?php
                    foreach($datafiledrekapsurat as $u){
                      foreach($rekaptampil as $a){
                          ?>
                        <td><?php echo $a->$u ?></td>
                      <?php }} ?>
                  </tr>
            </tbody>
            <tfoot>
              <tr>
                <?php
                foreach($datafiledrekapsurat as $u){
                    ?>
                <th><?php echo $u ?></th>
              <?php } ?>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

  </div>
</div>
</div>
