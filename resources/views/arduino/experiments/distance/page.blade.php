@extends('layouts.experiment.experiment', [
'experiment' => 'distance'
])
@section('content')
<script>
    var exId = 4;

</script>

<div>
    distance
    @auth
        @if(!$queue)
            <div class="container">
                <div class="text-center">
                    <form id="form" method="POST" data-exp="1" data-user={{ Auth::user()->id }}>
                        @csrf
                        <button type="submit" id="test" class="btn btn-secondary">Register</button>
                    </form>
                </div>
            </div>
        @endif
    @endauth

</div>

@endsection
