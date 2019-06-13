@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Spesimen</h3>
            <div class="card-header">
                <a href="{{ route('admin.datespesimen.create') }}" class="btn btn-primary">Tambahkan Spesimen</a> 
            </div>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body"> 
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datespesimens as $datespesimen)
                        <tr>
                            <td>{{ $datespesimen->id }}</td>
                            <td>{{ $datespesimen->tanggal }}</td>
                            <td>
                                <a href="{{ route('admin.datespesimen.edit', $datespesimen->id) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.datespesimen.destroy', $datespesimen->id) }}" method="POST">
                                    @method("DELETE")
                                    @csrf
                                    <input type="submit" value="Hapus" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
      <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
  <!-- /.row -->
@endsection