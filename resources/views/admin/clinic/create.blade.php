@extends('templates.default')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Dokter</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('admin.clinic.store') }}" method="POST">
          @csrf
          <div class="box-body">
          <div class="form-group col-md-6">
              <label for="nama_klinik">Nama Klinik</label>
              <input type="text" class="form-control {{ $errors->has('nama_klinik') ? 'is-invalid' : '' }}" name="nama_klinik" placeholder="Masukkan nama klinik" value="{{ old('nama_klinik')}}">
              <div class="invalid-feedback">
                  {{ $errors->first('nama_klinik') }}
          </div>
            </div>
            <div class="form-group col-md-6">
              <label for="alamat_klinik">Alamat Klinik</label>
              <input type="text" class="form-control {{ $errors->has('alamat_klinik') ? 'is-invalid' : '' }}" name="alamat_klinik" placeholder="Masukkan Alamat Klinik" value="{{ old('alamat_klinik')}}">
              <div class="invalid-feedback">
                  {{ $errors->first('alamat_klinik') }}
          </div>
            </div>

            <div class="form-group col-md-6">
                <label for="id_dokter">Dokter</label>
                <select name="id_dokter" class="form-control">
                  @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->nama_dokter }}</option>                      
                  @endforeach
                </select>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" value="save" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>
@endsection