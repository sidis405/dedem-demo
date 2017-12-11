<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Il mio blog</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/blog.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts.nav')
        <div class="container">
            <div class="row">
                <div class="col-sm-8 blog-main">
                    @yield('content')
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>
