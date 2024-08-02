<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <script type="module" src="{{ asset('assets/js/click-spark.js') }}"></script>
  <body>
    
    @include('backend.partials.header')

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('backend.partials.sidebar')
            </div>
            <div class="col-lg-7">

            
                @yield('content')
            </div>
        </div>
    </div>
   
    
    @include('backend.partials.footer')

   




    <click-spark style="--click-spark-color: green"></click-spark>
    <!-- <script src="{{ asset('assets/js/use-bootstrap-toaster.min.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>