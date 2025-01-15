@extends('errors::minimal')

@section('title','error')
@section('content')
<html lang="en">
    <head >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        ป<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
       </head>
    
    <body>
        <section class="container text-left" style="margin-top: 50px;">
                <div class="col-md-5">
                    <h2 class="text-warning" style="font-size: 80px; font-weight: bold;">404</h2>
                    <h3 class="text-muted">
                        <i class="glyphicon glyphicon-warning-sign text-warning"></i> Oops! Page not found
                    </h3>
                    <p class="lead">
                        We could not find the page you were looking for. Meanwhile, you may 
                        <a href="../../index.html" class="btn btn-link">return to dashboard</a>
                        or try using the search form below.
                    </p>
                    <form class="form-inline text-center">
                        <div class="form-group">
                            <input type="text" name="search" class="form-control input-lg" placeholder="Search">
                        </div>
                        <button type="submit" name="submit" class="btn btn-warning btn-lg">
                            Search <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </form>
                </div>
        </section>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
@endsection