<?php use App\Patient; ?>
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
        <form action="{{ route('admin.cinfo.update', $cinfo->id) }}" method="POST">
          @csrf
          @method("PUT")
          <div class="box-body">
              <div class="form-group col-md-12">
                  <label for="nama_pasien">Nama Pasien</label>
                  <select name="id_pasien" class="form-control">
                    {{ $patients = Patient::get()}}
                    @foreach ($patients as $patient)
                      <option value="{{ $patient->id }}">{{ $patient->nama_pasien }}</option>                      
                    @endforeach
                  </select>
              </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{ ('gejala_isk') ?? $cinfo->gejala_isk}}" name="gejala_isk"
                          @if(($cinfo->gejala_isk)==1) checked @endif>
                          Gejala ISK
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{ ('diabetik') ?? $cinfo->diabetik }}" name="diabetik" 
                          @if(($cinfo->diabetik)==1) checked @endif>
                          Diabetik
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{ ('pid') ?? $cinfo->pid}}" name="pid" 
                          @if(($cinfo->pid)==1) checked @endif>
                          Pelvic Infammatory Disease
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{ ('kehamilan') ?? $cinfo->kehamilan}}" name="kehamilan"
                          @if(($cinfo->kehamilan)==1) checked @endif>
                          Kehamilan
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{ ('riwayat_mrsa') ?? $cinfo->riwayat_mrsa}}" name="riwayat_mrsa"
                          @if(($cinfo->riwayat_mrsa)==1) checked @endif>
                          Riwayat MRSA (+)/ESBL(+)/VRE(+)
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{ ('transplantasi') ?? $cinfo->transplantasi}}" name="transplantasi"
                          @if(($cinfo->transplantasi)==1) checked @endif>
                          Transplantasi
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{ ('alergi_pinicilin') ?? $cinfo->alergi_penicilin}}" name="alergi_penicilin"
                          @if(($cinfo->alergi_penicilin)==1) checked @endif>
                          Alergi Penicilin
                        </label>
                    </div>
                </div>
                
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{('ventilator') ?? $cinfo->ventilator}}" name="ventilator"
                          @if(($cinfo->ventilator)==1) checked @endif>
                          Penggunaan Ventilator
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{('immunokompromise') ?? $cinfo->immunokompromise}}" name="immunokompromise"
                          @if(($cinfo->immunokompromise)==1) checked @endif>
                          Immunokompromise
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" value="{{('paska_bedah') ?? $cinfo->paska_bedah}}" name="paska_bedah"
                          @if(($cinfo->paska_bedah)==1) checked @endif>
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
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>
@endsection