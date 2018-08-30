<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap/dashboard/dashboard.css') }}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Yoga admin</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/logout">Sign out</a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky rectangle">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link active" href="/tableAdd">
                            <span data-feather="home"></span>
                            Table add <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    @foreach($menu as $k => $v)
                    <li class="nav-item">
                        <a class="nav-link active" href="/basics?table={{$v->name}}">
                            <span data-feather="home"></span>
                            {{$v->name}} <span class="sr-only">(current)</span>
                        </a>
                    </li>
                @endforeach
                    <li class="nav-item">
                        <a class="nav-link active" href="/modal">
                            <span data-feather="home"></span>
                            Accomodation modal <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class=" justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        @yield('AdminContent')
        @yield('AdminContentTables')
        @yield('modal')

    </div>
</main>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/admin_main.js') }}"></script>

</body>
</html>
