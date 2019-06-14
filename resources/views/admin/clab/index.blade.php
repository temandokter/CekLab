@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Lab</h3>
          <div class="card-header">
              <a href=" {{ route('admin.clab.create') }}" class="btn btn-primary">Tambahkan Lab</a>
          </div>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama Lab</th>
              <th>Nama Klinik</th>
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($clabs as $clab)
            <tr>
              <td>{{ $clab->nama_lab }}</td>
              <td>{{ $clab->clinic->nama_klinik }}</td>
              <td>
                <a href="{{ route('admin.clab.edit', $clab->id) }}">Edit</a>
              </td>
              <td><form action="{{ route('admin.clab.destroy', $clab->id) }}" method="POST">
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