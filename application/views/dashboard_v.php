    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DASHBOARD
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-user"></i> Dashboard</a></li>
      </ol>
    </section>

          <!-- /.box -->
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <form class="form-horizontal" action="<?= base_url('/dashboard/rekap_aksi/'); ?>" method="post">
        <div class="box-body">


          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">FORM INPUT SURAT</h3>
            </div>


              <div class="box-body">

         <div class="form-group">
                 <div class="col-sm-6">
                    <label for="exampleInputEmail1">Nomor Surat</label>
                    <input type="text" class="form-control" name="nomor_surat" placeholder="Masukkan Nomor Surat">
                 </div>
         </div>

         <div class="form-group">
                 <div class="col-sm-6">
                    <label for="exampleInputEmail1">Perihal</label>
                    <input type="text" class="form-control" name="perihal" placeholder="Masukkan Perihal">
                 </div>
         </div>

          <div class="form-group">
                 <div class="col-sm-6">
                    <label for="exampleInputEmail1">Nama Instansi</label>
                    <input type="text" class="form-control" name="nama_instansi" placeholder="Dari instansi">
                 </div>
               </div>

          <div class="form-group">
            <div class="col-sm-6">
                <label>Tanggal Terima</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="tgl_terima" placeholder="Tanggal Terima">
                </div>
                </div>
          </div>

              <div class="form-group">
                 <div class="col-sm-6">
                    <label for="exampleInputEmail1">Penerima</label>
                    <input type="text" class="form-control" name="penerima" placeholder="Nama Penerima">
                 </div>
              </div>


                </div>

              </div>
              <!-- /.box-body -->
             <div class="form-group">
             <div class="col-md-4">
                  <button type="submit" class="btn btn-success pull-left">MASUKAN </button>
                  <button type="cencel" class="btn btn-danger pull-right">BATAL   </button>
            </div>
            </div>
        </div>
        </form>
      </div>
    </section>
    <!-- /.content -->

<script>
</script>
