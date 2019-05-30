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
        <form action="{{ route('admin.patient.update', $patient) }}" method="POST">
          @csrf
          @method("PUT")
          <div class="box-body">
            <div class="form-group col-md-6">
              <label for="nama_pasien">Nama Pasien</label>
              <input type="text" class="form-control {{ $errors->has('nama_pasien') ? 'is-invalid' : '' }}" name="nama_pasien" placeholder="Masukkan nama pasien" value="{{ old('nama_pasien') ??$patient->nama_pasien }}">
              <div class="invalid-feedback">
                  {{ $errors->first('nama_pasien') }}
          </div>
            </div>
            <div class="form-group col-md-6">
              <label for="no_rm">No RM</label>
              <input type="text" class="form-control {{ $errors->has('no_rm') ? 'is-invalid' : '' }}" name="no_rm" placeholder="Masukkan No RM" value="{{ old('no_rm') ?? $patient->no_rm}}">
              <div class="invalid-feedback">
                  {{ $errors->first('no_rm') }}
          </div>
            </div>
            <div class="form-group col-md-6">
              <label>Tangal:</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right {{ $errors->has('no_rm') ? 'is-invalid' : '' }}" id="datepicker" name="tgl_lahir" value="{{ old('tgl_lahir') ?? $patient->tgl_lahir}}">
              </div>
              <div class="invalid-feedback">
                  {{ $errors->first('tgl_lahir') }}
          </div>
            </div>
            <div class="form-group col-md-6">
              <label for="umur">Umur</label>
              <input type="text" class="form-control {{ $errors->has('umur') ? 'is-invalid' : '' }}" name="umur"  value="{{ old('nama_pasien') ?? $patient->umur}}">
              <div class="invalid-feedback">
                  {{ $errors->first('umur') }}
          </div>
            </div>
            <div class="form-group col-md-6">
              <label for="pekerjaan">Pekerjaan</label>
              <input type="text" class="form-control {{ $errors->has('pekerjaan') ? 'is-invalid' : '' }}" name="pekerjaan" placeholder="Masukkan pekerjaan" value="{{ old('pekerjaan') ?? $patient->pekerjaan}}">
              <div class="invalid-feedback">
                  {{ $errors->first('pekerjaan') }}
          </div>
            </div>
            <div class="form-group col-md-6">
                <label>Status</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" style="width: 100%;" tabindex="-1" aria-hidden="true" name="status">
                <option value="{{ $patient->status }}" selected>{{ $patient->status }}</option>
                  <option value="{{ 'Menikah' }}">Menikah</option>
                  <option value="{{ 'Lajang' }}">Lajang</option>
                  <option value="{{ 'Duda' }}">Duda</option>
                  <option value="{{ 'Janda' }}">Janda</option>
                </select>
                <div class="invalid-feedback">
                    {{ $errors->first('status') }}
              </div>
              </div>
            <div class="form-group col-md-6">
              <label>Jenis Kelamin</label>
              <select class="form-control {{ $errors->has('jenkel') ? 'is-invalid' : '' }}" style="width: 100%;" tabindex="-1" aria-hidden="true" name="jenkel">
              <option value="{{ $patient->jenkel }}" selected>{{ $patient->jenkel }}</option>
                <option value="{{ 'laki-laki' }}">Laki-laki</option>
                <option value="{{ 'perempuan' }}">Perempuan</option>
              </select>
              <div class="invalid-feedback">
                  {{ $errors->first('jenkel') }}
            </div>
            </div>
            <div class="form-group col-md-6">
              <label for="no_antrian">No Antrian</label>
              <input type="text" class="form-control {{ $errors->has('no_antrian') ? 'is-invalid' : '' }}" name="no_antrian" placeholder="Masukkan No Antrian" value="{{ old('no_antrian') ?? $patient->no_antrian}}">
              <div class="invalid-feedback">
                  {{ $errors->first('no_antrian') }}
          </div>
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