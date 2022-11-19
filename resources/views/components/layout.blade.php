<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Game Shop</title>

{{--    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">--}}

    <!-- alpine js -->
{{--    <script src="//unpkg.com/alpinejs" defer></script>--}}
{{--    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>--}}
    <script src="{{ asset('js/alpinejs3.min.js') }}" ></script>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" alt="" height="45px" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            @auth
                <li class="nav-item">
                    <div class="nav-link" >Welcome {{ auth()->user()->name }}</div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/users/register">Create account</a>
                </li>
            @endauth
        </ul>
        @auth
            <form action="/users/logout" method="POST">
                @csrf
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
        @else
            <form action="/users/auth" method="POST" class="form-inline my-2 my-lg-0">
                @csrf
                <input class="form-control mr-sm-2" type="email" name="email" placeholder="Enter Email" >
                <input class="form-control mr-sm-2" type="password" name="password" placeholder="Enter password" >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
        @endauth
    </div>
</nav>

<main role="main" class="container" style="padding-top: 60px !important;">
    {{ $slot }}
</main><!-- /.container -->

<x-flash-message/>

{{--footer--}}
<footer class="row footer no-gutters">
    <div class="container">
        <p>Game shop &copy; 2022, All Rights Reserved</p>
    </div>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery-slim.min.js') }}"></script>
{{--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>--}}
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
