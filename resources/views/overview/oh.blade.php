@extends('layouts.landing')

@section('content')

<div class="container">

	<!-- DESCRIPTIONS -->
	<div class="description">
		<h2>OpenHAB</h2>

		<div class="row featurette">
	        <div class="col-md-6">
	            <h3 style="margin-top: 0px;">{!! trans("all.oh_title")!!}</h3>

	        </div>
			<div class="col-md-12">
				<p>{!! trans('all.oh_text')!!}</p>
				<ul>
					<li>{!! trans('all.oh_li1')!!}</li>
					<li>{!! trans('all.oh_li2')!!}</li>
					<li>{!! trans('all.oh_li3')!!}</li>
				</ul>
				<p>{!! trans('all.oh_text2')!!}</p>
				<ul>
					<li>{!! trans('all.oh_li4')!!}</li>
					<li>{!! trans('all.oh_li5')!!}</li>
					<li>{!! trans('all.oh_li6')!!}</li>
				</ul>
				<h4>{!! trans('all.oh_text3')!!}</h4>
				<p>{!! trans('all.oh_text4')!!}</p>
				<ul>
					<li>{!! trans('all.oh_text4_li1')!!}</li>
					<li>{!! trans('all.oh_text4_li2')!!}</li>
					<li>{!! trans('all.oh_text4_li3')!!}</li>
					<li>{!! trans('all.oh_text4_li4')!!}</li>
					<li>{!! trans('all.oh_text4_li5')!!}</li>
					<li>{!! trans('all.oh_text4_li6')!!}</li>
					<li>{!! trans('all.oh_text4_li7')!!}</li>
					<li>{!! trans('all.oh_text4_li8')!!}</li>

					<li>
					{!! trans('all.oh_text4_li9')!!}
						<div style="text-align:center">
							<img src="/images/oh_pic1.png"/ alt="Arduino IDE">
						</div>
					</li>
					<li>{!! trans('all.oh_text4_li10')!!}</li>
					<li>
						{!! trans('all.oh_text4_li11')!!}
						<div style="text-align:center">
							<img src="/images/oh_pic3.png"/ alt="Arduino IDE">
						</div>
					</li>
					<li>{!! trans('all.oh_text4_li12')!!}</li>
					<li>
						{!! trans('all.oh_text4_li13')!!}
						<div style="text-align:center">
							<img src="/images/oh_pic4.png"/ alt="Arduino IDE">
						</div>
					</li>
					<li>
						{!! trans('all.oh_text4_li14')!!}
						<div style="text-align:center">
							<img src="/images/oh_pic5.png"/ alt="Arduino IDE">
						</div>
					</li>
					<li>{!! trans('all.oh_text4_li12')!!}</li>
					<li>
						{!! trans('all.oh_text4_li15')!!}
						<div style="text-align:center">
							<img src="/images/oh_pic6.png"/ alt="Arduino IDE">
						</div>
					</li>
					<li>{!! trans('all.oh_text4_li16')!!}</li>
					<li>
						{!! trans('all.oh_text4_li17')!!}
						<div style="text-align:center">
							<img src="/images/oh_pic7.png"/ alt="Arduino IDE">
						</div>
					</li>
					<li>
						{!! trans('all.oh_text4_li18')!!}
						<div style="text-align:center">
							<img src="/images/oh_pic8.png"/ alt="Arduino IDE">
						</div>
					</li>
					<li>{!! trans('all.oh_text4_li19')!!}</li>
					<li>{!! trans('all.oh_text4_li20')!!}</li>
					<li>{!! trans('all.oh_text4_li21')!!}</li>
					<li>{!! trans('all.oh_text4_li22')!!}</li>
					<li>
						{!! trans('all.oh_text4_li23')!!}
						<div style="text-align:center">
							<img src="/images/oh_pic9.png"/ alt="Arduino IDE">
						</div>
					</li>
				</ul>
			</div>
	        <!-- <div class="col-md-6" style="margin-bottom: 15px;">
	        	<img class="img-fluid" src="/images/ide.png"/ alt="Arduino IDE">
	        </div> -->
	    </div>


	</div>
    <!-- /END THE DESCRIPTIONS -->

</div><!-- /.container -->
@endsection
