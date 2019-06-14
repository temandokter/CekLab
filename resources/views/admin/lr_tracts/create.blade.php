@extends('templates.default')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Pilih Spesimen</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
        <form action="{{ route('admin.lr_tracts.store') }}" method="POST">
          @csrf
          <div class="form-group col-md-12">
              <label for="nama_pasien">Nama Pasien</label>
              <select name="patient_id" class="form-control">
                @foreach ($patients as $patient)
                  <option value="{{ $patient->id }}">{{ $patient->nama_pasien }}</option>                      
                @endforeach
              </select>
          </div>
          
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{('swabmulut')}}" name="swabmulut">
                      Swab Mulut
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{ ('swabtenggorokan') }}" name="swabtenggorokan">
                      Swab Tenggorokan
                    </label>
                </div>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" value="save" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      </div>
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>
@endsection