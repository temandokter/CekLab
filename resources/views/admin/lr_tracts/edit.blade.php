<?php use App\Patient; ?>
@extends('templates.default')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Ubah Spesimen</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('admin.lr_tracts.update', $lr_tract->id) }}" method="POST">
          @csrf
          @method("PUT")
          <div class="box-body">
              <div class="form-group col-md-12">
                  <label for="nama_pasien">Nama Pasien</label>
                  <select name="patient_id" class="form-control">
                    {{ $patients = Patient::get()}}
                    @foreach ($patients as $patient)
                      <option value="{{ $patient->id }}">{{ $patient->nama_pasien }}</option>                      
                    @endforeach
                  </select>
              </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{ ('swabmulut') ?? $lr_tract->swabmulut}}" name="swabmulut"
                          @if(($lr_tract->swabmulut)==1) checked @endif>
                          Swab Mulut
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{ ('swabtenggorokan') ?? $cinfo->diabetik }}" name="swabtenggorokan" 
                          @if(($lr_tract->swabtenggorokan)==1) checked @endif>
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
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>
@endsection

