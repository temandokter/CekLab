@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Cek Saluran Pernafasan Atas</h3>
          <div class="card-header">
              <a href=" {{ route('admin.ur_tracts.create') }}" class="btn btn-primary">Tambahkan Spesimen</a>
          </div>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Swab Mulut</th>
              <th>Swab Tenggorokan</th>
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($ur_tracts as $ur_tract)
            <tr>
              <td>@if(($ur_tract->swabmulut)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
              <td>@if(($ur_tract->swabtenggorokan)==1) <span class="label label-primary">pos(+)</span> @else <span class="label label-danger">neg(-)</span> @endif</td>
              <td>
                <a class="btn btn-block btn-warning btn-sm" href="{{ route('admin.ur_tracts.edit', $ur_tract->id) }}">
                  <i class="fa fa-edit"></i>
                </a>
              </td>
              <td><form action="{{ route('admin.ur_tracts.destroy', $ur_tract->id) }}" method="POST">
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

