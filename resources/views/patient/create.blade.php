@extends('templates.default')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Pasien</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group col-md-6">
              <label for="nama_pasien">Nama Pasien</label>
              <input type="text" class="form-control" id="nama_pasien" placeholder="Masukkan nama pasien">
            </div>
            <div class="form-group col-md-6">
              <label for="no_rm">No RM</label>
              <input type="text" class="form-control" id="no_rm" placeholder="Masukkan No RM">
            </div>
            <div class="form-group col-md-6">
              <label>Tangal:</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="umur">Umur</label>
              <input type="text" class="form-control" id="umur" disabled>
            </div>
            <div class="form-group col-md-6">
              <label for="pekerjaan">Pekerjaan</label>
              <input type="text" class="form-control" id="pekerjaan" placeholder="Masukkan pekerjaan">
            </div>
            <div class="form-group col-md-6">
              <label for="status">Status</label>
              <input type="text" class="form-control" id="status" placeholder="Masukkan Status">
            </div>
            <div class="form-group col-md-6">
              <label>Jenis Kelamin</label>
              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="no_antrian">No Antrian</label>
              <input type="text" class="form-control" id="no_antrian" placeholder="Masukkan No Antrian">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>
@endsection