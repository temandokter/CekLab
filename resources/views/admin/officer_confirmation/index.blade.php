@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Pasien</h3>
                <div class="card-header">
            </div>
        </div>
            
            <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr> 
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal</th>
                        <th>Validasi</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($officer_confirmations as $PetugasKonfirmasi)
                        <tr>
                            <td>{{ $PetugasKonfirmasi->patient->id }}</td>
                            <td>{{ $PetugasKonfirmasi->patient->name_pasien }}</td>
                            <td>{{ $PetugasKonfirmasi->patient->tanggal }}</td>
                            <td>
                                <a href="" class="btn btn-primary">Validasi</a>
                            </td>
                            <td>
                                <form action="" method="POST">
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
    </div>
@endsection