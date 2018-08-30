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
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/min/dropzone.min.css') }}">

    <title>Yoga</title>
    {{--<link rel="stylesheet" href="{{ asset('css/treat.css') }}">--}}
</head>
<body>
<header id="header">
    <div class="profile">
        <div class="profile__name">
            Helen
        </div>
        <div class="profile__menu" style="display: none;">
            <ul>
                <li>
                    <a href="#">Your profile</a>
                </li>
                <li>
                    <a href="#">Organization profile</a>
                </li>
                <li>
                    <a href="#">Send a message</a>
                </li>
                <li>
                    <a href="/logout">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="Polaris-Page">
    @if(!empty($menu))
<div id="nav">
    <ul class="nav-list">
        @foreach($menu as $k => $v)
            <li class="nav-item{{$k===0 ? ' active' : ''}}">
                <a class="Polaris-Link" href="#" data-tab-target="{{$v->name}}">
                    <span>{{$v->name}}</span>
                </a>
                <img class="done-mark-image" src="/assets/img/circle-tick.svg">
            </li>
            @endforeach
    </ul>
</div>
    @endif
    <div id="content">
        @yield('treatContent')
        @yield('treatList')
        @yield('modal')
    </div>
</div>

<script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/dropzone/min/dropzone.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

</body>