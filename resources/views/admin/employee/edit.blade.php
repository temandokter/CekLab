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
            <form action="{{ route('admin.employee.update', $employee) }}" method="POST">
                @csrf
                @method("PUT")
                    <div class="box-body">
                        <div class="form-group col-md-6">
                            <label for="nama_pegawai">Nama Pegawai</label>
                                <input type="text" class="form-control {{ $errors->has('name_pegawai') ? 'is-invalid' : '' }} " name="nama_pegawai" id="nama_pegawai" placeholder="Masukkan nama pegawai" value="{{ old('name_pegawai') ??$employee->name_pegawai }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('nama_pegawai') }}
                            </div>
                        </div>
                    
                    
                        <div class="form-group col-md-6">
                            <label for="alamat_pegawai">Alamat Pegawai</label>
                                <input type="text" class="form-control {{ $errors->has('alamat_pegawai') ? 'is-invalid' : '' }} " name="alamat_pegawai" id="alamat_pegawai" placeholder="Masukkan alamat pegawai" value="{{ old('alamat_pegawai') ??$employee->alamat_pegawai }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('alamat_pegawai') }}
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email_pegawai">Email Pegawai</label>
                                <input type="text" class="form-control {{ $errors->has('email_pegawai') ? 'is-invalid' : '' }} " name="email_pegawai" id="email_pegawai" placeholder="Masukkan email pegawai" value="{{ old('email_pegawai') ??$employee->email_pegawai }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('email_pegawai') }}
                            </div>
                        </div>
                    </div>
              <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" value="cancel" class="btn btn-primary">Cancel</button>
                    <button type="submit" value="save" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>
@endsection