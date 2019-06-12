@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Pegawai</h3>
          <div class="card-header">
              <a href=" {{ route('admin.employee.create') }}" class="btn btn-primary">Tambahkan Pegawai</a>
          </div>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama Pegawai</th>
              <th>Alamat Pegawai</th>
              <th>Email Pegawai</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($employees as $employee)
            <tr>
              <td>{{ $employee->nama_pegawai }}</td>
              <td>{{ $employee->alamat_pegawai }}</td>
              <td>{{ $employee->email_pegawai }}</td>
              <td>
                <a href="{{ route('admin.employee.edit', $employee) }}">Edit</a>
              </td>
              <td><form action="{{ route('admin.employee.destroy', $employee) }}" method="POST">
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