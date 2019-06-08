<?php use App\Patient;
use App\Clinic; ?>
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
        <form action="{{ route('admin.doctor.update', $doctor->id) }}" method="POST">
          @csrf
          @method("PUT")
          <div class="box-body">
              <div class="form-group col-md-6">
                <label for="nama_dokter">Nama Dokter</label>
                <input type="text" class="form-control {{ $errors->has('nama_dokter') ? 'is-invalid' : '' }}" name="nama_dokter" placeholder="Masukkan Nama Dokter" value="{{ old('nama_dokter') ?? $doctor->nama_dokter}}">
                <div class="invalid-feedback">
                    {{ $errors->first('nama_dokter') }}
            </div>
              </div>
              <div class="form-group col-md-6">
                <label for="no_hp">No HP</label>
                <input type="text" class="form-control {{ $errors->has('no_hp') ? 'is-invalid' : '' }}" name="no_hp" placeholder="Masukkan No HP" value="{{ old('no_hp')??$doctor->no_hp}}">
                <div class="invalid-feedback">
                    {{ $errors->first('no_hp') }}
            </div>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="Masukkan Email" value="{{ old('email')??$doctor->email}}">
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
            </div>
              </div>
              <div class="form-group col-md-6">
                  <label for="clinic_id">Klinik</label>
                  <select name="clinic_id" class="form-control">
                      {{ $clinics = Clinic::get() }}
                    @foreach ($clinics as $clinic)
                      <option value="{{ $clinic->id }}">{{ $clinic->nama_klinik }}</option>                      
                    @endforeach
                  </select>
              </div>
              <div class="form-group col-md-6">
                  <label for="id_pasien">Pasien</label>
                  <select name="patient_id" class="form-control">
                    {{ $patients = Patient::get() }}
                    @foreach ($patients as $patient)
                      <option value="{{ $patient->id }}">{{ $patient->nama_pasien }}</option>                      
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