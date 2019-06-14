@extends('templates.default')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Cek Lab</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('admin.clab.store') }}" method="POST">
          @csrf
          <div class="box-body">
          <div class="form-group col-md-6">
              <label for="nama_lab">Nama Lab</label>
              <input type="text" class="form-control {{ $errors->has('nama_lab') ? 'is-invalid' : '' }}" name="nama_lab" placeholder="Masukkan nama lab" value="{{ old('nama_lab')}}">
              <div class="invalid-feedback">
                  {{ $errors->first('nama_lab') }}
          </div>
            </div>

            <div class="form-group col-md-6">
                <label for="id_klinik">Klinik</label>
                <select name="clinic_id" class="form-control">
                  @foreach ($clinics as $clinic)
                    <option value="{{ $clinic->id }}">{{ $clinic->nama_klinik }}</option>                      
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