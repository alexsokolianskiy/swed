  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" style="font-weight: bold; text-transform: uppercase;">
        <a href="{{ route(sprintf('experiments.%s.description', $experiment)) }}" class="nav-link">{{ trans(sprintf('all.%s', $experiment)) }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route(sprintf('experiments.%s.example', $experiment)) }}" class="nav-link">{{ trans('experiments.tpc') }}</a>
        
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route(sprintf('experiments.%s.run', $experiment)) }}" class="nav-link">{{ trans('experiments.run') }}</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->