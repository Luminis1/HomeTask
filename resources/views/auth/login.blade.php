@extends('layouts.app')

@section('content')
<div class="log-in-page-content">
    <h1>{{session('status')}}</h1>
    <h1>{{session()->pull('veryfied')}}</h1>
    <div class="Polaris-Layout">
        <div class="Polaris-Layout__Section">
            <div class="Polaris-Page__Title">
                <h2 class="page_title Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                    Login
                </h2>
            </div>
        </div>
        <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary"></div>
    </div>
    <div class="Polaris-Layout">
        <div class="Polaris-Layout__Section">
            <form id="login-form" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                <div class="form-part">
                    <div class="Polaris-Card">
                        <div class="Polaris-Card__Section">
                            {{ csrf_field() }}
                            <div class="form-block__container{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="Polaris-Labelled__LabelWrapper">
                                    <div class="Polaris-Label">
                                        <label for="email" class="Polaris-Label__Text">
                                            E-Mail Address
                                        </label>
                                    </div>
                                </div>
                                <div class="Polaris-TextField">
                                    <input name="email" id="email" type="email" class="Polaris-TextField__Input" value="{{ old('email') }}">
                                    <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-block__container{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="Polaris-Labelled__LabelWrapper">
                                    <div class="Polaris-Label">
                                        <label for="password" class="Polaris-Label__Text">
                                            Password
                                        </label>
                                    </div>
                                </div>
                                <div class="Polaris-TextField">
                                    <input name="password" id="password" type="password" class="Polaris-TextField__Input">
                                    <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-block__container{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="Polaris-Choice" for="remember">
                                    <div class="Polaris-Choice__Control">
                                        <div class="Polaris-Checkbox">
                                            <input type="checkbox" id="remember" name="remember" value="false" class="Polaris-Checkbox__Input" aria-invalid="false">
                                            <div class="Polaris-Checkbox__Backdrop"></div>
                                            <div class="Polaris-Checkbox__Icon">
                                  <span class="Polaris-Icon">
                                    <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20">
                                      <g fill-rule="evenodd">
                                        <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                        <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                      </g>
                                    </svg>
                                  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-Choice__Label">Remember Me</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tables-nav-block">
                        <div class="left">
                            Don`t have an account?
                            <a class="Polaris-Link" href="{{ url('/register') }}" data-polaris-unstyled="true">
                                Create it
                            </a>
                        </div>
                        <div class="right">
                            <button type="submit" class="go-next-btn Polaris-Button Polaris-Button--primary">
                            <span class="Polaris-Button__Content">
                                <span>Login</span>
                            </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
