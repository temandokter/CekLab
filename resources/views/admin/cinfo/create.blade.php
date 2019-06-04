@extends('templates.default')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Info Klinis</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
        <form action="{{ route('admin.cinfo.store') }}" method="POST">
          @csrf
          <div class="form-group col-md-12">
              <label for="nama_pasien">Nama Pasien</label>
              <select name="id_pasien" class="form-control">
                @foreach ($patients as $patient)
                  <option value="{{ $patient->id }}">{{ $patient->nama_pasien }}</option>                      
                @endforeach
              </select>
          </div>
          
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{('gejala_isk')}}" name="gejala_isk">
                      Gejala ISK
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{ ('diabetik') }}" name="diabetik">
                      Diabetik
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{ ('pid') }}" name="pid">
                      Pelvic Infammatory Disease
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{ ('kehamilan') }}" name="kehamilan">
                      Kehamilan
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{('riwayat_mrsa')}}" name="riwayat_mrsa">
                      Riwayat MRSA (+)/ESBL(+)/VRE(+)
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{('transplantasi')}}" name="transplantasi">
                      Transplantasi
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{('alergi_pinicilin')}}" name="alergi_penicilin">
                      Alergi Penicilin
                    </label>
                </div>
            </div>
            
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{('ventilator')}}" name="ventilator">
                      Penggunaan Ventilator
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{('immunokompromise')}}" name="immunokompromise">
                      Immunokompromise
                    </label>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" value="{{('paska_bedah')}}" name="paska_bedah">
                      Paska bedah
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