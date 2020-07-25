
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('layouts.partials.head')
  </head>
  <body>
    <header>
      @include('layouts.partials.top-nav')
    </header>
    <main role="main">
        @yield('content')
        <footer class="container">
            @include('layouts.partials.footer')
        </footer>
    </main>
  </body>
  <script src="{{asset('js/app.js') }}"></script>
  @yield('js')
</html>
