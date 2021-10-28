@extends('layouts.landing')

@section('content')
{{-- <style>
    body {
        margin-top: 60px;
    }

    .spoiler {
        display: table;
        position: relative;
    }

    .spoiler-btn {
        cursor: pointer;
    }

    .spoiler-body {
        padding-top: 5px;
    }

    td {
        padding-right: 25px;
        padding-bottom: 3px;
    }

    p, li {
        text-align: justify;
    }

    .description p {
        text-indent: 25px;
    }
    </style>
     --}}
    <div class="container">

        <!-- DESCRIPTIONS -->
        <div class="description">
        <h2>Arduino Uno</h2>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="/images/uno_front.jpg" alt="Arduino Uno (Front)"/>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="/images/uno_back.jpg" alt="Arduino Uno (Back)"/>
            </div>
        </div>
        <h3>{!! trans("all.uno_info") !!}</h3>
        <p>{!! trans("all.uno_info_desc") !!}</p>
        <table border='0'>{!! trans("all.uno_summary") !!}</table>

        <div class="spoiler">
            <h3 class="spoiler-btn">{!! trans("all.uno_extra") !!}</h3>
            {!! trans("all.uno_extra_desc") !!}
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="description">
        <h2>Arduino Mega</h2>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="/images/mega_front.jpg" alt="Arduino Mega (Front)"/>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="/images/mega_back.jpg" alt="Arduino Mega (Back)"/>
            </div>
        </div>
        <h3>{!! trans("all.mega_info") !!}</h3>
        <p>{!! trans("all.mega_info_desc") !!}</p>
        <table border='0'>{!! trans("all.mega_summary") !!}</table>

        <div class="spoiler">
            <h3 class="spoiler-btn">{!! trans("all.mega_extra") !!}</h3>
            {!! trans("all.mega_extra_desc") !!}
        </div>
        </div>

        <!-- /END THE DESCRIPTIONS -->

    </div><!-- /.container -->

@endsection
@push('js')
<script>
$(document).ready(function() {
    // Spoiler
    $(document).on('click', '.spoiler-btn', function (e) {
        e.preventDefault()
        $(this).parent().children('.spoiler-body').collapse('toggle')
    });
});
</script>

@endpush
