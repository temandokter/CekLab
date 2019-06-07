@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Dokter</h3>
          <div class="card-header">
              <a href=" {{ route('admin.doctor.create') }}" class="btn btn-primary">Tambahkan Dokter</a>
          </div>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama Dokter</th>
              <th>Nama Klinik</th>
              <th>Alamat Klinik</th>
              <th>No HP</th>
              <th>Email</th>
              <th>Nama Pasien</th>
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($doctors as $doctor)
            <tr>
              <td>{{ $doctor->nama_dokter }}</td>
              <td>{{ $doctor->nama_klinik }}</td>
              <td>{{ $doctor->alamat_klinik }}</td>
              <td>{{ $doctor->no_hp }}</td>
              <td>{{ $doctor->email }}</td>
              <td>{{ $doctor->patient->nama_pasien }}</td>
              <td>
                <a href="{{ route('admin.doctor.edit', $doctor->id) }}">Edit</a>
              </td>
              <td><form action="{{ route('admin.doctor.destroy', $doctor->id) }}" method="POST">
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