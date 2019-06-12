@extends('templates.default')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

    
    <div class="container-fluid">
        <h3>You are logged in!</h3>
        <div class="card-header">
            <a href=" {{ route('admin.patient.create') }}" class="btn btn-primary">Tambahkan Pasien</a>
        </div>
    </div>
                
@endsection