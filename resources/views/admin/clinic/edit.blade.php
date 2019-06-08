<?php use App\Doctor; ?>
@extends('templates.default')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Klinik</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('admin.clinic.update', $clinic->id) }}" method="POST">
          @csrf
          @method("PUT")
          <div class="box-body">
              <div class="form-group col-md-6">
                <label for="nama_klinik">Nama Klinik</label>
                <input type="text" class="form-control {{ $errors->has('nama_klinik') ? 'is-invalid' : '' }}" name="nama_klinik" placeholder="Masukkan Nama Klinik" value="{{ old('alamat_klinik') ?? $clinic->nama_klinik}}">
                <div class="invalid-feedback">
                    {{ $errors->first('nama_klinik') }}
            </div>
              </div>
              <div class="form-group col-md-6">
                <label for="alamat_klinik">Alamat Klinik</label>
                <input type="text" class="form-control {{ $errors->has('alamat_klinik') ? 'is-invalid' : '' }}" name="alamat_klinik" placeholder="Masukkan Nama Klinik" value="{{ old('alamat_klinik')??$clinic->alamat_klinik}}">
                <div class="invalid-feedback">
                    {{ $errors->first('alamat_klinik') }}
            </div>
              </div>
              
              <div class="form-group col-md-6">
                  <label for="id_dokter">Dokter</label>
                  <select name="id_dokter" class="form-control">
                    {{ $doctors = Doctor::get() }}
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