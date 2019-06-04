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
              <th>Tranplantasi</th>
              <th>Kehamilan</th>
              <th>Diabetik</th>
              {{-- <th>Pelvic Infammatory Disesase</th> --}}
              <th>PID</th>
              <th>Alergi Penicilin</th>
              <th>RIwayat M E V</th>
              <th>Gejala ISK</th>
              {{-- <th>Nama Dokter</th> --}}
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($cinfos as $cinfo)
            <tr>
              <td>{{ $cinfo->paska_bedah }}</td>
              <td>{{ $cinfo->immunokompromise }}</td>
              <td>{{ $cinfo->ventilator }}</td>
              <td>{{ $cinfo->transplantasi }}</td>
              <td>{{ $cinfo->kehamilan }}</td>
              <td>{{ $cinfo->diabetik }}</td>
              <td>{{ $cinfo->pid }}</td>
              <td>{{ $cinfo->alergi_penicilin }}</td>
              <td>{{ $cinfo->riwayat_msrsa }}</td>
              <td>{{ $cinfo->gejala_isk }}</td>
              {{-- <td>{{ $cinfo->doctor->nama_dokter }}</td> --}}
              <td>
                <a href="{{ route('admin.cinfo.edit', $cinfo->id) }}">Edit</a>
              </td>
              <td><form action="{{ route('admin.cinfo.destroy', $cinfo->id) }}" method="POST">
                @method("DELETE")
                @csrf
                <input type="submit" value="Hapus" class="btn btn-danger">
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