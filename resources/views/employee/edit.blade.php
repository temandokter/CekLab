@extends('templates.default')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Update Pegawai</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group col-md-6">
              <label for="nama_pegawai">Nama Pegawai</label>
              <input type="text" class="form-control" id="nama_pegawai" placeholder="Masukkan nama pegawai">
            </div>
            
            <div class="form-group col-md-6">
              <label for="alamat_pegawai">Alamat Pegawai</label>
              <input type="text" class="form-control" id="alamat_pegawai" placeholder="Masukkan alamat pegawai">
            </div>

            <div class="form-group col-md-6">
              <label for="email_pegawai">Email</label>
              <input type="text" class="form-control" id="email_pegawai" placeholder="email_pegawai">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>
@endsection