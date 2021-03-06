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
              <!-- TABEL REKAP UNTUK MENAMPILKAN FORM JENIS SURAT-->
              <!-- /.box-header -->
              <div class="box-body">

                <div class="row">

                  <!-- /.col -->
                  <div class="col-md-12">

                    <div class="form-group">
                      <label>Pilih Jenis Surat</label>
                      <select class="form-control" name="jenis_surat" required="">
                        <option value="Semua Jenis Surat">--- jenis surat bisa dipilih/tidak ---</option>
                        <?php foreach($datasurat as $s){?>
                          <option value="<?php echo $s->id_jenis_surat ?>"><?php echo $s->nama_jenis_surat ?></option>
                        <?php } ?>
                      </select>
                  </div>
                <!-- BATAS TABEL REKAP UNTUK MENAMPILKAN FORM JENIS SURAT-->

                    <div class="form-group">
                      <label>Pilih yang akan ditampilkan *</label>
                      <select name="subject[]" multiple size=9 class="form-control select2" data-placeholder="Pilih Rekap"
                      style="width: 100%;" required>
                      <option value="tanggal_pengajuan">Tanggal Pengajuan</option>
                      <option value="nama">Nama</option>
                      <option value="nik">NIK</option>
                      <option value="no_kartu_keluarga">Nomor KK</option>
                      <option value="nomor_kis">Nomor KIS</option>
                      <option value="alamat">Alamat</option>
                      <option value="nama_faskes">Faskes</option>
                      <option value="nama_jenis_surat">Jenis Surat</option>
                      <option value="keterangan">Keterangan</option>
                    </select>
                  </div>

                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Pilih Cetak per Bulan *</label>
                    <select name="bulan" class="form-control">
                      <?php
                      foreach ($bulansaatini as $valuebulan) {
                        ?>
                        <option value="<?php echo $valuebulan->bulan?>">
                          <?php
                          $monthNum  = $valuebulan->bulan;
                          $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                          $monthName = $dateObj->format('F'); // March
                            echo $monthName;
                          ?>
                        </option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Pilih Cetak per Tahun *</label>
                    <select name="tahun" class="form-control" data-placeholder="Pilih Bulan">
                      <style="width: 100%;">
                      <?php
                      foreach ($tahunsaatini as $valuetahun) {
                        ?>
                        <option value="<?php echo $valuetahun->tahun?>"><?php echo $valuetahun->tahun ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="tampil" value="tampil" class="btn btn-app"> <i class="fa fa-eye"></i> Tampilkan </button>
                    <a href="#" target="_blank"><button type="submit" name="cetakpdf" value="cetakpdf" class="btn btn-app"> <i class="fa fa-print"></i> Cetak/PDF </button></a>
                    <!-- <button type="submit" name="excel" value="excel" class="btn btn-app"> <i class="fa fa-file"></i> EXCEL </button>
                    <button type="submit" name="word" value="word" class="btn btn-app"> <i class="fa fa-file"></i> WORD </button> -->
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
              </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
              <tr>
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
<script type="text/javascript">
var tahun = {};
$("select[name='tahun'] > option").each(function () {
    if(tahun[this.text]) {
        $(this).remove();
    } else {
        tahun[this.text] = this.value;
    }
});

var bulan = {};
$("select[name='bulan'] > option").each(function () {
    if(bulan[this.text]) {
        $(this).remove();
    } else {
        bulan[this.text] = this.value;
    }
});
</script>
