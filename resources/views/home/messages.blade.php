@if (\Session::has('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('success') !!}
    </div>
@endif

@if (\Session::has('note'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {!! \Session::get('note') !!}
    </div>
@endif
