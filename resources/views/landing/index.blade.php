@extends('layouts.landing')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid" src="/images/s1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h1>{{ trans("all.slide1") }}</h1>
            <p>{{ trans("all.slide1_desc") }}</p>
        <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}" role="button">{{ trans("all.slide1_button") }}</a></p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="/images/s2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h1>{{ trans("all.slide2") }}</h1>
            <p>{{ trans("all.slide2_desc") }}</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="/images/s3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h1>{{ trans("all.slide3") }}</h1>
            <p>{{ trans("all.slide3_desc") }}</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="/images/iot/scheme_2.png" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h1>{{ trans("all.sh") }}</h1>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4 text-center">
            <img src="/images/crossplatform.png" alt="Cross-platform" style="width: 140px; height: 140px;">
            <h2>{{ trans("all.cross") }}</h2>
            <p>{{ trans("all.cross_desc") }}</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <img src="/images/configurability.png" alt="Configurable experiment" style="width: 140px; height: 140px;">
            <h2>{{ trans("all.conf") }}</h2>
            <p>{{ trans("all.conf_desc") }}</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <img src="/images/accessibility.png" alt="Accessibility" style="width: 140px; height: 140px;">
            <h2>{{ trans("all.simpl") }}</h2>
            <p>{{ trans("all.simpl_desc") }}</p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">{{ trans("all.reldes") }}</h2>
            <p class="lead">{{ trans("all.reldes_desc") }}</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="/images/remote.jpg" alt="{{ trans("all.reldes") }}">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="/images/audience.jpg" alt="{{ trans("all.target") }}">
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading">{{ trans("all.field") }}</h2>
            <p class="lead">{{ trans("all.field_desc") }}</p>
            <br/>
            <h2 class="featurette-heading">{{ trans("all.target") }}</h2>
            <p class="lead">{{ trans("all.target_desc") }}</p>
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">{{ trans("all.functional") }}</h2>
            <p class="lead">{{ trans("all.functional_desc") }}</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="/images/functional.jpg" alt="{{ trans("all.functional") }}">
        </div>
    </div>
</div>
@endsection
