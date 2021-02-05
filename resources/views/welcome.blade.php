<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
        <style>
            html, body {
                height: 100%;
            }
        </style>
    </head>
    <body>

    <div class="container h-100 d-flex justify-content-center">
        <div class="jumbotron my-auto">
            <div class="container">
                <h1 class="display-4">{{config('app.name')}}</h1>
                <p class="lead text-center mt-5"><a class="btn btn-primary" href="{{ url('/dashboard') }}">Dashboard</a></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
