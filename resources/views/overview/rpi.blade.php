@extends('layouts.landing')

@section('content')

<div class="container">

	<!-- DESCRIPTIONS -->
	<div class="description">
        <h2>Raspberry Pi</h2>
        <div class="row featurette">
            <div class="col-md-6">
                <h4>{!! trans("all.rpi_sd")!!}</h4>
                <ul class="list-group">
                    <li class="list-group-item">{!! trans('all.pi_ul_li1')!!}</li>
                    <li class="list-group-item">{!! trans('all.pi_ul_li2')!!}</li>
                    <li class="list-group-item">{!! trans('all.pi_ul_li3')!!}</li>
                    <li class="list-group-item">{!! trans('all.pi_ul_li4')!!}</li>
                </ul>
            </div>
            <div class="col-md-6" style="margin-bottom: 15px;">
                <img class="img-fluid" src="/images/rasp.jpg"/ alt="Arduino IDE">
            </div>

            <div class="col-md-6" style="margin-bottom: 15px;">
                <img class="img-fluid" src="/images/rpi_img1.jpg"/ alt="Arduino IDE">
            </div>
            <div class="col-md-6">
                <h4>{!! trans("all.pi_install_desc")!!}</h4>
                <ul class="list-group">
                    <li class="list-group-item">{!! trans('all.pi_install_desc_li1')!!}</li>
                    <li class="list-group-item">{!! trans('all.pi_install_desc_li2')!!}</li>
                </ul>
            </div>
            <div class="col-md-12" style="text-align: center">
                <h3>{!! trans('all.pi_install_v1')!!}</h3>
                <ul>

                    <li>{!! trans('all.pi_install_v1_desc_1')!!}</li>
                    <li>{!! trans('all.pi_install_v1_desc_2')!!}</li>
                </ul>
                <h3>{!! trans('all.pi_install_v2');!!}</h3>
                <div>{!! trans('all.pi_install_v2_desc_1')!!}</div>
                <div>{!! trans('all.pi_install_v2_desc_2')!!}</div>
                <ul>
                    <li>{!! trans('all.pi_install_v2_desc2_li1')!!}</li>
                    <li>{!! trans('all.pi_install_v2_desc2_li2')!!}</li>
                    <li>{!! trans('all.pi_install_v2_desc2_li3')!!}</li>
                    <li>{!! trans('all.pi_install_v2_desc2_li4')!!}</li>
                    <li>{!! trans('all.pi_install_v2_desc2_li5')!!}</li>
                </ul>

            </div>
            <div class="col-md-12">
                <div>{!! trans('all.pi_install_v2_desc3')!!}</div>
                <div>{!! trans('all.pi_install_v2_desc3_li1')!!}</div>
                <div>{!! trans('all.pi_install_v2_desc3_li2')!!}</div>
                <ul>
                    <li>{!! trans('all.pi_install_v2_desc3_li3')!!}</li>
                    <li>{!! trans('all.pi_install_v2_desc3_li4')!!}</li>
                </ul>
                <div>{!! trans('all.pi_install_v2_desc3_li5')!!}</div>
                <ul>
                    <li>{!! trans('all.pi_install_v2_desc3_li6')!!}</li>
                    <li>{!! trans('all.pi_install_v2_desc3_li7')!!}</li>
                    <li>{!! trans('all.pi_install_v2_desc3_li8')!!}</li>
                </ul>
                <div>{!! trans('all.pi_install_v2_desc3_li9')!!}</div>
                <h3>{!! trans('all.fr')!!}
            </div>
            <div class="col-md-6">
                <div>{!! trans('all.fr_desc_1')!!}</div>
                <ul>
                    <li>{!! trans('all.fr_desc_1_li1')!!}</li>
                    <li>{!! trans('all.fr_desc_1_li2')!!}</li>
                    <li>{!! trans('all.fr_desc_1_li3')!!}</li>
                    <li>{!! trans('all.fr_desc_1_li4')!!}</li>
                </ul>
                <div>{!! trans('all.fr_desc_2')!!}</div>
                    <ul>
                        <li>{!! trans('all.fr_desc_3_li1')!!}</li>
                        <li>{!! trans('all.fr_desc_3_li2')!!}</li>
                        <li>{!! trans('all.fr_desc_3_li3')!!}</li>
                        <li>{!! trans('all.fr_desc_3_li4')!!}</li>
                        <li>{!! trans('all.fr_desc_3_li5')!!}</li>
                        <li>{!! trans('all.fr_desc_3_li6')!!}</li>
                        <li>{!! trans('all.fr_desc_3_li7')!!}</li>
                        <li>{!! trans('all.fr_desc_3_li8')!!}</li>
                        <li>{!! trans('all.fr_desc_3_li9')!!}</li>
                        <li>{!! trans('all.fr_desc_3_li10')!!}</li>
                        <li>{!! trans('all.fr_desc_3_li11')!!}</li>
                    </ul>

            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="/images/rpi_img7.jpg"/ alt="Arduino IDE">
            </div>
            <div class="col-md-12">
                <div>{!! trans('all.fr_desc_4')!!}</div>
                <div>{!! trans('all.fr_desc_5')!!}</div>
                <div class="col-md-6"><img class="img-fluid" src="/images/rpi_img10.jpg"/ alt="Arduino IDE"></div>
                <div class="col-md-6">
                    <h4>{!! trans('all.fr_desc_5_li')!!}</h4>
                    <ul>
                        <li>{!! trans('all.fr_desc_5_li1')!!}</li>
                        <li>{!! trans('all.fr_desc_5_li2')!!}</li>
                        <li>{!! trans('all.fr_desc_5_li3')!!}</li>
                        <li>{!! trans('all.fr_desc_5_li4')!!}</li>
                        <li>{!! trans('all.fr_desc_5_li5')!!}</li>
                        <li>{!! trans('all.fr_desc_5_li6')!!}</li>
                        <li>{!! trans('all.fr_desc_5_li7')!!}</li>
                        <li>{!! trans('all.fr_desc_5_li8')!!}</li>
                        <li>{!! trans('all.fr_desc_5_li9')!!}</li>
                    </ul>
                </div>
                <div>{!! trans('all.fr_desc_6')!!}</div>
                <h3>{!! trans('all.fr_desc_7')!!}</h3>
                <div class="col-md-6">
                    <div>{!! trans('all.fr_desc_8')!!}</div>
                </div>
                <div class="col-md-6">
                    <div>{!! trans('all.fr_desc_9')!!}</div>
                </div>
            </div>
            <div class="col-md-12">
                <h3>{!! trans('all.fr_desc_10')!!}</h3>
                <div class="col-md-6">
                    <div>{!! trans('all.fr_desc_11')!!}</div>
                    <ul>
                        <li>{!! trans('all.fr_desc_12')!!}</li>
                        <li>{!! trans('all.fr_desc_13')!!}</li>
                        <li>{!! trans('all.fr_desc_14')!!}</li>
                        <li>{!! trans('all.fr_desc_15')!!}</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="/images/rpi_img12.jpg"/ alt="Arduino IDE">
                </div>
            </div>
        </div>
	</div>
    <!-- /END THE DESCRIPTIONS -->

</div><!-- /.container -->
@endsection
