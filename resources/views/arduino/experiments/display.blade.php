@extends('layouts.experiment.experiment')
@section('content')
<script>
    var exId = 4;
</script>

<div>
	<!-- DESCRIPTIONS -->
	<div class="description">
		<h2>{{ trans('all.display')}}</h2>

		<div class="row featurette">
 
            <div class="col-md-6" style="margin-bottom: 15px;">
                <p>{{ trans('all.display_desc_1')}}</p>
                <p>{{ trans('all.display_desc_2')}}</p>
                <img class="img-fluid" src="/images/displayImg.png" alt="Arduino IDE">
            </div>
      

            <div class="col-md-6" style="margin-bottom: 15px;">
                <img class="img-fluid" src="/images/displaySchem.png" alt="Arduino IDE">
            </div>
	    </div>


        <div class="col-md-6">
            <h3><b>{{ trans('all.display_example_1')}}</b></h3>
            <h3><{{ trans('all.exaple') }}</h3>
            <div class="copy-btn">
                <div class="btn btn-default">{{ trans('all.copy') }}</div>
            </div>
            <pre class="pre-copy"><?=$examples['hello']?></pre>
            <p>{{ trans('all.display_desc_3')}}</p>
        </div>
        <div class="col-md-6">
            <h3><b>{{ trans('all.display_example_2')}}</b></h3>
            <p>{{ trans('all.display_example_4')}}</p>
            <h3><{{ trans('all.exaple') }}</h3>
            <div class="copy-btn">
                <div class="btn btn-default">{{ trans('all.copy') }}</div>
            </div>
            <pre class="pre-copy"><?=$examples['running']?></pre>
        </div>
        <div class="col-md-6">
            <h3><b>Lines</b></h3>
            <h3><{{ trans('all.exaple') }}</h3>
            <div class="copy-btn">
                <div class="btn btn-default">{{ trans('all.copy') }}</div>
            </div>
            <pre class="pre-copy"><?=$examples['lines']?></pre>
        </div>
        <div class="col-md-6">
            <h3><b>Text</b></h3>
            <h3><{{ trans('all.exaple') }}</h3>
            <div class="copy-btn">
                <div class="btn btn-default">{{ trans('all.copy') }}</div>
            </div>
            <pre class="pre-copy"><?=$examples['text']?></pre>
        </div>
        <div class="col-md-6">
            <h3><b>Rectangles</b></h3>
            <h3><{{ trans('all.exaple') }}</h3>
            <div class="copy-btn">
                <div class="btn btn-default">{{ trans('all.copy') }}</div>
            </div>
            <pre class="pre-copy"><?=$examples['rectangles']?></pre>
        </div>
        <div class="col-md-6">
            <h3><b>Triangles</b></h3>
            <h3><{{ trans('all.exaple') }}</h3>
            <div class="copy-btn">
                <div class="btn btn-default">{{ trans('all.copy') }}</div>
            </div>
            <pre class="pre-copy"><?=$examples['triangles']?></pre>
        </div>
        <div class="col-md-6">
            <h3><b>Color</b></h3>
            <h3><{{ trans('all.exaple') }}</h3>
            <div class="copy-btn">
                <div class="btn btn-default">{{ trans('all.copy') }}</div>
            </div>
            <pre class="pre-copy"><?=$examples['color']?></pre>
        </div>
        <div class="col-md-6">
            <h3><b>Circles</b></h3>
            <h3><{{ trans('all.exaple') }}</h3>
            <div class="copy-btn">
                <div class="btn btn-default">{{ trans('all.copy') }}</div>
            </div>
            <pre class="pre-copy"><?=$examples['circles']?></pre>
        </div>

	</div>
    <!-- /END THE DESCRIPTIONS -->

</div><!-- /.container -->

@endsection
