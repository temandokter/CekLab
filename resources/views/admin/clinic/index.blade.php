@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Klinik</h3>
          <div class="card-header">
              <a href=" {{ route('admin.clinic.create') }}" class="btn btn-primary">Tambahkan Klinik</a>
          </div>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama Klinik</th>
              <th>Alamat Klinik</th>
              <th>Nama Dokter</th>
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($clinics as $clinic)
            <tr>
              <td>{{ $clinic->nama_klinik }}</td>
              <td>{{ $clinic->alamat_klinik }}</td>
              <td>{{ $clinic->doctor->nama_dokter }}</td>
              <td>
                <a href="{{ route('admin.clinic.edit', $clinic->id) }}">Edit</a>
              </td>
              <td><form action="{{ route('admin.clinic.destroy', $clinic) }}" method="POST">
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