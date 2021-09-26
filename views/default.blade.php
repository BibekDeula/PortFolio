 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!doctype html>
<html>

  <head>
    @include('includes.head')
  </head>
  <body>
      @include('includes.header')
      <div class="wrap container">
        <div id="main" class="row">
          <div class="col-md-12">
          
            @yield('content')
          </div>
        </div>
      </div>
      @include('includes.footer')
  </body>
</html>