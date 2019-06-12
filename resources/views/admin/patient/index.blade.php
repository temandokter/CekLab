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
          <table id="example1" class="table table-bordered table-striped">
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
              <th>Update</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($patients as $patient)
            <tr>
              <td>{{ $patient->no_antrian }}</td>
              <td>{{ $patient->no_rm }}</td>
              <td>{{ $patient->nama_pasien }}</td>
              <td>{{ $patient->jenkel }}</td>
              <td>{{ $patient->tgl_lahir }}</td>
              <td>{{ $patient->umur }}</td>
              <td>{{ $patient->pekerjaan }}</td>
              <td>{{ $patient->status }}</td>
              <td>
                <a href="{{ route('admin.patient.edit', $patient) }}">Edit</a>
              </td>
              <td><form action="{{ route('admin.patient.destroy', $patient) }}" method="POST">
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