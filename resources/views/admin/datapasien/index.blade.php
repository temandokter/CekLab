@extends('templates.default')
@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Rangkuman Data Pasien</h3>
        </div>
        
        <!-- /.box-header -->
        
        <div class="container">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            @method("PUT")
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Data Pasien</div>
                    <div class="card-body">
                            {{-- {{ $patients = Patient::get() }} --}}
                      <p class="card-text"></p>
                    </div>
                  </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Data Dokter</div>
                    <div class="card-body text-primary">
                      <h5 class="card-title">Primary card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
              </div>

            </div>
        </div>
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
              <th>PID</th>
              <th>Alergi Penicilin</th>
              <th>RIwayat M E V</th>
              <th>Gejala ISK</th>
              <th>Nama Pasien</th>
              <th>Nama Dokter</th>
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
              <td>{{ $cinfo->doctor->email }}</td>
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