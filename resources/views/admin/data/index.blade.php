@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Pasien</h3>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No Antrian</th>
              <th>No RM</th>
              <th>Nama Pasien</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>Umur</th>
              <th>Pekerjaan</th>
              <th>Status</th>
            </tr>
            </thead>
            <tbody>
                @csrf
                @method("PUT")
            <tr>
              <td>{{ $patient->no_antrian }}</td>
              <td>{{ $patient->no_rm }}</td>
              <td>{{ $patient->nama_pasien }}</td>
              <td>{{ $patient->jenkel }}</td>
              <td>{{ $patient->tgl_lahir }}</td>
              <td>{{ $patient->umur }}</td>
              <td>{{ $patient->pekerjaan }}</td>
              <td>{{ $patient->status }}</td>
            </tr>
            </tbody>
          </table>


          {{-- <table class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Paska Bedah</th>
                <th>Immuno<br>kompro<br>mise</th>
                <th>Penggunaan Ventilator</th>
                <th>Trans<br>plan<br>tasi</th>
                <th>Keha<br>milan</th>
                <th>Diabetik</th>
                <th>PID</th>
                <th>Alergi Penicilin</th>
                <th>RIwayat M E V</th>
                <th>Gejala ISK</th>
                <th>Nama Pasien</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
              </thead>
              <tbody>
                  @csrf
                  @method("PUT")
              <tr>
                
                <td>@if(($cinfo->paska_bedah)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
                <td>@if(($cinfo->immunokompromise)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
                <td>@if(($cinfo->ventilator)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
                <td>@if(($cinfo->transplantasi)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
                <td>@if(($cinfo->kehamilan)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
                <td>@if(($cinfo->diabetik)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
                <td>@if(($cinfo->pid)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
                <td>@if(($cinfo->alergi_penicilin)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
                <td>@if(($cinfo->riwayat_msrsa)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
                <td>@if(($cinfo->gejala_isk)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
                <td>{{ $cinfo->patient->nama_pasien }}</td>
              </tr>
              </tbody>
            </table> --}}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection