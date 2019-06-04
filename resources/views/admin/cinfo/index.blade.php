@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Info Klinik</h3>
          <div class="card-header">
              <a href=" {{ route('admin.cinfo.create') }}" class="btn btn-primary">Tambahkan Info Klinik</a>
          </div>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama Klinis</th>
              <th>Pilihan Klinis</th>
              {{-- <th>Nama Dokter</th> --}}
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($cinfos as $cinfo)
            <tr>
              <td>{{ $cinfo->nama_klinis }}</td>
              <td>{{ $cinfo->pilih_klinis }}</td>
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