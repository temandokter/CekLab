@extends('layouts.app')

@section('content_LR')
    <div class="contentLR">
        <form action="" method="post">
            <h3>Spesimen</h3>
            <input type="checkbox" name="swabmulut" id="">
            <label for="swabmulut">Swab Mulut</label>
            <input type="checkbox" name="swabtenggorokan" id="">
            <label for="swabtenggorokan">Swab Tenggorokan</label>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection