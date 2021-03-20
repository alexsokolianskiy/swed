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
    <div class="sidebar">
      @foreach($menu as $name => $item)
           <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    {{ trans(sprintf('all.%s', $name)) }}
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">
                      
                    </span>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                  <li class="nav-item">
                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p class="timer">
        
          
                          Days: <div data-days></div>
                          Hours: <div data-hours></div>
                          Minutes: <div data-minutes></div>
                          Seconds: <div data-seconds></div>
                      </p>
                    </a>
                  </li>
                </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      @endforeach
     
    </div>
    <!-- /.sidebar -->
  </aside>
  
  @section('js')
  <script src="{{asset('js/app.js') }}"></script>
   <script src="{{ asset('js/experiments/arduino/menu.js') }}"></script>
  @endsection