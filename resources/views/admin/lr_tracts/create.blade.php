@extends('templates.default')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Spesimen</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
            <div class="form-group">
                  <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                    <input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;" id="sputum">
                    <label for="sputum">Sputum</label>
                    <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                    </ins>
                  </div>
                  <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                      <input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;" id="ettsuction">
                      <label for="ettsuction">ETT Suction</label>
                      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                      </ins>
                    </div>
                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                        <input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;" id="bilasanbronkus">
                        <label for="bilasanbronkus">Bilasan Bronkus</label>
                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                        </ins>
                      </div>
                      <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                          <input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;" id="bal">
                          <label for="bal">BAL (Bronchoalveolar lavage)</label>
                          <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                          </ins>
                        </div>
                        <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                            <input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;" id="biopsi">
                            <label for="biopsi">Biopsi / aspirasi paru</label>
                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                            </ins>
                          </div>
              </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>
@endsection