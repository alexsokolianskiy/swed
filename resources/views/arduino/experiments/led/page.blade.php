@extends('layouts.experiment.experiment', [
'experiment' => 'led'
])
@section('content')
<script>
    var exId = 4;

</script>

<div>
    led
    @auth
        @if(!$queue)
            <div class="container">
                <div class="text-center">
                    <form id="form" method="POST" data-exp="3" data-user={{ Auth::user()->id }}>
                        @csrf
                        <button type="submit" id="test" class="btn btn-secondary">Register</button>
                    </form>
                </div>
            </div>
        @endif
    @endauth
</div>

@endsection
