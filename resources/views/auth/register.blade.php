@extends('layouts.app')

@section('content')

<div class="Polaris-Layout">
    <div id="register_form_titles" class="Polaris-Layout__Section">
        <div class="form-title show" id="create_an_account_title">
            <div class="Polaris-Page__Title">
                <h2 class="page_title Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                    Create an account
                </h2>
                <p>This address will appear on your invoices. You can edit the address used to calculate shipping rates in your shipping settings</p>
                <br>
            </div>
        </div>
        <div class="form-title" id="public_information_title">
            <div class="Polaris-ProgressBar Polaris-ProgressBar--sizeSmall">
                <progress class="Polaris-ProgressBar__Progress" value="33" max="100"></progress>
                <div class="Polaris-ProgressBar__Indicator" role="progressbar" aria-hidden="true" style="width: 33%;">
                    <span class="Polaris-ProgressBar__Label">33%</span>
                </div>
            </div>
            <div class="Polaris-Page__Title">
                <h2 class="page_title Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                    Public Information
                </h2>
                <p>This address will appear on your invoices. You can edit the address used to calculate shipping rates in your shipping settings</p>
                <br>
            </div>
        </div>
        <div class="form-title" id="private_information_title">
            <div class="Polaris-ProgressBar Polaris-ProgressBar--sizeSmall">
                <progress class="Polaris-ProgressBar__Progress" value="66" max="100"></progress>
                <div class="Polaris-ProgressBar__Indicator" role="progressbar" aria-hidden="true" style="width: 66%;">
                    <span class="Polaris-ProgressBar__Label">66%</span>
                </div>
            </div>
            <div class="Polaris-Page__Title">
                <h2 class="page_title Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                    Private Information
                </h2>
                <p>This address will appear on your invoices. You can edit the address used to calculate shipping rates in your shipping settings</p>
                <br>
            </div>
        </div>
        <div class="form-title" id="verify_your_email_address_title">
            <div class="Polaris-ProgressBar Polaris-ProgressBar--sizeSmall">
                <progress class="Polaris-ProgressBar__Progress" value="100" max="100"></progress>
                <div class="Polaris-ProgressBar__Indicator" role="progressbar" aria-hidden="true" style="width: 100%;">
                    <span class="Polaris-ProgressBar__Label">100%</span>
                </div>
            </div>
            <div class="Polaris-Page__Title">
                <h2 class="page_title Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                    Verify your email address
                </h2>
                <p>Please verify your email to help us ensure that this email belongs to you, so we can notify you about updates and new customer messages.</p>
                <br>
                <p>Check your email {{isset($email)}} and click the link to activate your account. Didnt get the email?
                <p class="Polaris-Link resend-email" data-polaris-unstyled="true">Click here</p> to resend it.</p>
                <br>
                <p class="resend-done"></p>
            </div>
        </div>
    </div>
    <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary"></div>
</div>
<div class="Polaris-Layout">
    <div class="Polaris-Layout__Section">
        <form id="register-form" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            <div class="form-part show" data-title-id="create_an_account_title">
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
                                <input name="email"
                                       id="email"
                                       type="email"
                                       class="Polaris-TextField__Input"
                                       placeholder="email@domain.com"
                                       value="{{ old('email') }}"
                                       required>
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
                                <input name="password"
                                       id="password"
                                       type="password"
                                       class="Polaris-TextField__Input"
                                       placeholder="Eight symbols minimum"
                                       minlength="6"
                                       required>
                                <button type="button" class="show-password" onclick="if (password.type == 'text') password.type = 'password'; else password.type = 'text';">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANOSURBVGhD7dlJyI1RHMfxa56nhVmGhciUhcxEokRCpoWNpFCUIcnCwrAwJbEgG/NCNookkqQM2ViYokwhlDlDxu/vjdtzz/s/zz3Pvc+93sXzq8/m7Tnn3Ofe5/zPOc+by5IlS5YsWepQemIWNuEITuEizuI4dmERhqAh6lQGYgvu4XcCb6CbnYYG+G+ZiguwPmRSD7EaLVC1DMdlWB+oXM+xGPVRsbTCHvyE9SHSdAX9kXr64T6sQV3vcAwLMAmDMRpzsQ2h/XyF+kgtM/AR1mBRr7EMTVAs43EVVj8uPQWNUHLqYSN+wRog6jRaI0nU/yr8gNVn1CV0ROJokL2wOnXpunLK5xR8g9V31G10QnB0E/tgdebSgpfGGrAQVv+uOwi+mdCbeIm2SCtaHK1xXLqZ9ojNWliNLctRLN0wFiqlxdaGHlClssZyqVB4i8pMhExsUYltDF/64DyibR5DJTguBxFtE0e/oKZBQfriE6wGFq0TvvSG9lFWO9HK7ct0WG18ViIffbM3YF3oo8npi/tLuD6jK6yohFttfPQoasGtyWZYF8WZCCv6gCGP5wr48hZWG59bqJkvH/7+IYn8t+BkFKzrXbvhi6qS1SbOZOTORP4QagysDIB1vWsDfHkBq43PF3RGbhC+w7rIZw6sqMQ+gtUmagSs6NQYsmWJWo98tsK6yGc7fJkNq80/OvL6MgxWG5+7KFhPmuMmrIst2orHZSlUndx2J6CxfElSeLQ/043XihaxJBN/HOKiCqbqpG245sRIxKUpnsAay6Ijgzd69kNPgNdQa2UtIzqzW+NYDqNolsBqbClYWcuIqt17WGO49GopbntUkHWwOnGpwug8UU46IPT4q7N83Bwzo5dsVmcuTbq4LUtctCt+AKtflx7lNigpmlChdf0ouiMkzaA5EVpcTqLsd14T8ArWAC79OgegFxYtEY0Wu6FQiQ2tTio8qnipvefqAr1gsAaLo3OLFi29eEv6Pkw7BL1Oqkjm4ymsgdOiX3Un9EKwotHzvQZJN3fF6AYOoReqGtXyeTgHfQjrw4XQeULlvqT3VmlHJzv9X2QHdGPPYM0JzZnr2A/tx6r+7ZcaPefac7VDmtuZLFmyZMmSJcXkcn8AwYEbc9EOz28AAAAASUVORK5CYII=">
                                </button>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
<!--                        <div class="form-block__container{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="password-confirm" class="Polaris-Label__Text">
                                        Confirm Password
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="password_confirmation" id="password-confirm" type="password" class="Polaris-TextField__Input" required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>-->
                    </div>
                </div>
                <div class="tables-nav-block">
                    <div class="left">
                        Have an account?
                        <a class="Polaris-Link" href="{{ url('/login') }}" data-polaris-unstyled="true">
                            Log it
                        </a>
                    </div>
                    <div class="right">
                        <button type="button" class="go-next-btn Polaris-Button Polaris-Button--primary">
                            <span class="Polaris-Button__Content">
                                <span>Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-part" data-title-id="public_information_title">
                <div class="Polaris-Card">
                    <div class="Polaris-Card__Section">
                        <div class="form-block__container{{ $errors->has('legal_name_of_business') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="legal_name_of_business" class="Polaris-Label__Text">
                                        Legal name of business
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="legal_name_of_business"
                                       id="legal_name_of_business"
                                       type="text"
                                       class="Polaris-TextField__Input"
                                       placeholder="Organic Yoga Retreats"
                                       required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="form-block__container{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="phone" class="Polaris-Label__Text">
                                        Phone
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="phone"
                                       id="phone"
                                       type="phone"
                                       class="Polaris-TextField__Input"
                                       placeholder="+1 323 456 7890"
                                       required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="form-block__container{{ $errors->has('country') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="country" class="Polaris-Label__Text">
                                        Country
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-Select">
                                <select name="country" id="country" class="Polaris-Select__Input" required>
                                    @include('admin.partials._all_countries_select_options')
                                </select>
                                <div class="Polaris-Select__Icon">
                                    <span class="Polaris-Icon">
                                        <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg>
                                    </span>
                                </div>
                                <div class="Polaris-Select__Backdrop"></div>
                            </div>
                        </div>
                        <div class="form-block__container{{ $errors->has('city') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="city" class="Polaris-Label__Text">
                                        City
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="city"
                                       id="city"
                                       type="text"
                                       class="Polaris-TextField__Input"
                                       placeholder="Los Angeles, California"
                                       required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="form-block__container{{ $errors->has('website') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="website" class="Polaris-Label__Text">
                                        Website
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="website"
                                       id="website"
                                       type="text"
                                       class="Polaris-TextField__Input"
                                       placeholder="https://organicyogaretreats.com"
                                       required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="form-block__container{{ $errors->has('instagram_username') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="instagram_username" class="Polaris-Label__Text">
                                        Instagram username
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="instagram_username"
                                       id="instagram_username"
                                       type="text"
                                       class="Polaris-TextField__Input"
                                       placeholder="organicyogaretreats"
                                       required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="form-block__container{{ $errors->has('facebook_page_link') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="facebook_page_link" class="Polaris-Label__Text">
                                        Facebook page link
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="facebook_page_link"
                                       id="facebook_page_link"
                                       type="text"
                                       class="Polaris-TextField__Input"
                                       placeholder="https://www.facebook.com/luxuryretreats"
                                       required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="form-block__container{{ $errors->has('tripadvisor') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="tripadvisor" class="Polaris-Label__Text">
                                        Tripadvisor
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="tripadvisor"
                                       id="tripadvisor"
                                       type="text"
                                       class="Polaris-TextField__Input"
                                       placeholder="https://www.tripadvisor.com/retreat">
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tables-nav-block">
                    <div class="left">
                        <button type="button" class="go-prev-btn Polaris-Button">
                            <span class="Polaris-Button__Content">
                                <span>Previous</span>
                            </span>
                        </button>
                    </div>
                    <div class="right">
                        <button type="button" class="go-next-btn Polaris-Button Polaris-Button--primary">
                            <span class="Polaris-Button__Content">
                                <span>Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-part" data-title-id="private_information_title">
                <div class="Polaris-Card">
                    <div class="Polaris-Card__Section">
                        <div class="form-block__container{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="first_name" class="Polaris-Label__Text">
                                        First Name
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="first_name"
                                       id="first_name"
                                       type="text"
                                       class="Polaris-TextField__Input"
                                       placeholder="Johnny"
                                       required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="form-block__container{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="last_name" class="Polaris-Label__Text">
                                        Last Name
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="last_name"
                                       id="last_name"
                                       type="text"
                                       class="Polaris-TextField__Input"
                                       placeholder="Appleseed"
                                       required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="form-block__container{{ $errors->has('cell_phone') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="cell_phone" class="Polaris-Label__Text">
                                        Cell Phone
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="cell_phone"
                                       id="cell_phone"
                                       type="text"
                                       class="Polaris-TextField__Input"
                                       placeholder="+1 323 456 7890"
                                       required>
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="form-block__container{{ $errors->has('role') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="role" class="Polaris-Label__Text">
                                        Role
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-Select">
                                <select name="role" id="role" class="Polaris-Select__Input" required>
                                    <option value="user">User</option>
                                </select>
                                <div class="Polaris-Select__Icon">
                                    <span class="Polaris-Icon">
                                        <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg>
                                    </span>
                                </div>
                                <div class="Polaris-Select__Backdrop"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tables-nav-block">
                    <div class="left">
                        <button type="button" class="go-prev-btn Polaris-Button">
                            <span class="Polaris-Button__Content">
                                <span>Previous</span>
                            </span>
                        </button>
                    </div>
                    <div class="right">
                        <button id="register-form-submit" type="button" class="Polaris-Button Polaris-Button--primary">
                            <span class="Polaris-Button__Content">
                                <span>Register</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-part" data-title-id="verify_your_email_address_title">
                <div class="tables-nav-block">
                    <div class="right">
                        <a href="{{ url('/login') }}" class="Polaris-Button Polaris-Button--primary">
                            <span class="Polaris-Button__Content">
                                <span>Done</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="form-help-wraper Polaris-Layout__Section Polaris-Layout__Section--secondary">
        <div id="form-help" class="Polaris-Card">
            <div class="Polaris-Card__Header">
                <h2 class="Polaris-Heading">Help</h2>
            </div>
            <div class="Polaris-Card__Section">
                <p>
                    <span class="placeholder">We can help you...</span>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection