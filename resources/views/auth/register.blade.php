@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('legal_name_of_business') ? ' has-error' : '' }}">
                        <label for="Legal name of business" class="col-md-4 control-label">Legal name of business</label>
                        <div class="col-md-6">
                            <input id="Legal name of business" type="text" class="form-control" name="legal_name_of_business">
                        </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">phone</label>
                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">country</label>
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">city</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="website" class="col-md-4 control-label">website</label>
                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control" name="website">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('instagram_username') ? ' has-error' : '' }}">
                            <label for="instagram_username" class="col-md-4 control-label">Instagram username</label>
                            <div class="col-md-6">
                                <input id="instagram_username" type="text" class="form-control" name="instagram_username">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('facebook_page_link') ? ' has-error' : '' }}">
                            <label for="facebook_page_link" class="col-md-4 control-label">Facebook page link</label>
                            <div class="col-md-6">
                                <input id="facebook_page_link" type="text" class="form-control" name="facebook_page_link">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tripadvisor') ? ' has-error' : '' }}">
                            <label for="tripadvisor" class="col-md-4 control-label">Tripadvisor</label>
                            <div class="col-md-6">
                                <input id="tripadvisor" type="text" class="form-control" name="tripadvisor">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cell_phone') ? ' has-error' : '' }}">
                            <label for="cell_phone" class="col-md-4 control-label">Cell Phone</label>
                            <div class="col-md-6">
                                <input id="cell_phone" type="text" class="form-control" name="cell_phone">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4 control-label">Cell Phone</label>
                            <div class="col-md-6">
                                <select id="role" type="text" class="form-control" name="role">
                                    <option>user</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
