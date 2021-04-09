 <?php
    $menuService = new \App\Services\Experiment\Menu();
    $menu = $menuService->getExperiments();
 ?>

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('landing.index') }}" class="brand-link">
      <span class="brand-text font-weight-light">SWED</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" id="arduino-menu" data-menu="{{ json_encode($menu) }}">
     
    </div>
    <!-- /.sidebar -->
  </aside>
  
  @section('js')
  <script src="{{asset('js/app.js') }}"></script>
   <script src="{{ asset('js/experiments/arduino/menu.js') }}"></script>
  @endsection