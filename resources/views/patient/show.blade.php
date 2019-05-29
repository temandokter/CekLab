@extends('templates.default')

@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Table With Full Features</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
          
        <div class="row">
            <div class="col-sm-12">
                
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
        <tr role="row">
            <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-label="Rendering engine: activate to sort column ascending" aria-sort="descending">Rendering engine</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 225.017px;" aria-label="Browser: activate to sort column ascending">Browser</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 198.733px;" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.9px;" aria-label="Engine version: activate to sort column ascending">Engine version</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">CSS grade</th>
        </tr>
        </thead>
        <tbody>
        <tr role="row" class="even">
          <td class="sorting_1">Gecko</td>
          <td class="">Mozilla 1.8</td>
          <td>Win 98+ / OSX.1+</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
    </tbody>
        <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Rendering engine</th>
            <th rowspan="1" colspan="1">Browser</th>
            <th rowspan="1" colspan="1">Platform(s)</th>
            <th rowspan="1" colspan="1">Engine version</th>
            <th rowspan="1" colspan="1">CSS grade</th>
        </tr>
        </tfoot>
      </table>
    </div>
</div>
@endsection