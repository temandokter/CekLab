@extends('templates.default')

@section('content')
<div class="row"> 
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">tanggal Spesimen</h3>
            </div>
        <!-- /.box-header -->
        <!-- form start -->
            <form action="{{ route('admin.employee.store') }}" method="POST">
                @csrf
                    <div class="box-body">
                        <div class="form-group col-md-6">
                            <label for="Tanggal">Tanggal</label>
                                <input type="date" class="form-control {{ $errors->has('tanggal') ? 'is-invalid' : '' }} " name="tanggal" id="tanggal" placeholder="Masukkan tanggal" value="{{ old('tanggal') }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('tanggal') }}
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