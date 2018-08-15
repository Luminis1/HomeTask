<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{ asset('assets/css/polaris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <title>Yoga</title>
    {{--<link rel="stylesheet" href="{{ asset('css/treat.css') }}">--}}
</head>
<body>
<header id="header"></header>
<div class="Polaris-Page">
<div id="nav">
    <ul class="nav-list">
        @foreach($menu as $k => $v)
            <li class="nav-item">
                <a class="Polaris-Link active" href="#" data-tab-target="basic">
                    {{--<i class="fas fa-home"></i>--}}
                    <span>{{$v->name}}</span>
                </a>
            </li>
            @endforeach
    </ul>
</div>
<div id="content">
    @yield('treatContent')
</div>
</div>
<script src="{{ asset('jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

</body>