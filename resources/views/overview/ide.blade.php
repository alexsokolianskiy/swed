@extends('layouts.landing')

@section('content')
<div class="container">

	<!-- DESCRIPTIONS -->
	<div class="description">
		<h2>{!! trans("all.ide")!!}</h2>

		<div class="row featurette">
	        <div class="col-md-6">
	            <h3 style="margin-top: 0px;">{!! trans("all.ide_info");!!}</h3>
				{!! trans("all.ide_info_desc")!!}
	        </div>
	        <div class="col-md-6" style="margin-bottom: 15px;">
	        	<img class="img-fluid" src="/images/ide.png" alt="Arduino IDE">
	        </div>
	    </div>

		{!! trans("all.ide_menu") !!}

	</div>
    <!-- /END THE DESCRIPTIONS -->

</div><!-- /.container -->
@endsection
