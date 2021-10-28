@extends('layouts.landing')

@section('content')
{{-- <style>
body {
    margin-top: 100px;
}
</style> --}}
<div class="container">
    <h2>Recommendation System</h2>
    <p><b>{{ trans('all.rs_title1') }}</b>{{ trans('all.rs_text1') }}</p>

    <div class="col-md-2">
    </div>
    <div class="col-md-3" style="text-align:center">
        {!! trans('all.rs_pic1') !!}
        <h3>{{ trans('all.rs_text2') }}</h3>
    </div>
    <div class="col-md-2" style="text-align:center">
        {!! trans('all.rs_pic2') !!}
    </div>
    <div class="col-md-5">
        <h4>{{ trans('all.rs_text3') }}</h4>
    </div>
</div>
@endsection
