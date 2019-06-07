@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Info Klinis</h3>
          <div class="card-header">
              <a href=" {{ route('admin.cinfo.create') }}" class="btn btn-primary">Tambahkan Info Klinis</a>
          </div>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Paska Bedah</th>
              <th>Immuno<br>kompro<br>mise</th>
              <th>Penggunaan Ventilator</th>
              <th>Trans<br>plan<br>tasi</th>
              <th>Keha<br>milan</th>
              <th>Diabetik</th>
              {{-- <th>Pelvic Infammatory Disesase</th> --}}
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
              @foreach ($cinfos as $cinfo)
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
              <td>
                <a class="btn btn-block btn-warning btn-sm" href="{{ route('admin.cinfo.edit', $cinfo->id) }}">
                  <i class="fa fa-edit"></i>
                </a>
              </td>
              <td><form action="{{ route('admin.cinfo.destroy', $cinfo->id) }}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-block btn-danger btn-sm">
                <i class="fa fa-trash"></i>
                </button>
              </td>
            </form>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

@endsection