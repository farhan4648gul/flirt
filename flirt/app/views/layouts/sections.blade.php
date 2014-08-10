<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="charset=UTF-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
        {{ HTML::style("assets/css/jquery.bxslider.css?v=".time()) }}
        {{ HTML::style("assets/css/reset.css?v=".time()) }}
        {{ HTML::style("assets/css/style.css?v=".time()) }}
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        {{ HTML::script("assets/js/jquery.bxslider.min.js") }}
        {{ HTML::script("assets/js/scripts.js") }}
    </head>
    <body>
        @include('layouts.partials.header')
        <div class="content clearfix">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
        @include('layouts.partials.footer')
    </body>
</html>