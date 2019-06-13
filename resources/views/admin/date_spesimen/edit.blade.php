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
            <form action="{{ route('admin.datespesimen.update', $datespesimen) }}" method="POST">
                @csrf
                @method("PUT")
                    <div class="box-body">
                        <div class="form-group col-md-6">
                            <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control {{ $errors->has('tanggal') ? 'is-invalid' : '' }} " name="tanggal" id="tanggal" placeholder="Masukkan nama pegawai" value="{{ old('tanggal') ??$datespesimen->tanggal }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('tanggal') }}
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