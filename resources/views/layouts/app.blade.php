<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Yoga</title>
    <link rel="stylesheet" href="{{ asset('assets/css/polaris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
</head>
<body id="app-layout">
    <div class="Polaris-Page">
        @if(!empty($menu))
            <div id="nav">
                <ul class="nav-list">
                    @foreach($menu as $k => $v)
                        <li class="nav-item">
                            <a class="Polaris-Link active" href="#" data-tab-target="basic">
                                <span>{{$v->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div id="content">
            @yield('content')
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
