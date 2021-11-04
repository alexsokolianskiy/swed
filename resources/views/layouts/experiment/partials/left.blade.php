 <?php
    $menuService = new \App\Services\Experiment\Menu();
    $id = Illuminate\Support\Facades\Auth::id();
    $menu = $menuService->getExperiments($id);
 ?>

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Brand Logo -->
        <a href="{{ route('landing.index') }}" class="brand-link">
          <span class="brand-text font-weight-light">SWED</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar" id="arduino-menu" data-active="{{ $experiment }}" data-menu="{{ json_encode($menu) }}" data-lang="{{  app()->getLocale()  }}">
         
        </div>
        <!-- /.sidebar -->
  </aside>
  
  @section('js')
  <script src="{{asset('js/app.js') }}"></script>
   <script src="{{ asset('js/experiments/arduino/menu.js') }}"></script>
  @endsection