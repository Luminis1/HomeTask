@extends('layouts.app')

@section('content')



<div class="Polaris-Layout">
    <div class="Polaris-Layout__Section">
        <div class="Polaris-Page__Title">
            <h2 class="page_title Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                Create an account
            </h2>
            <p>This address will appear on your invoices. You can edit the address used to calculate shipping rates in your shipping settings</p>
            <br>
        </div>
        <div class="Polaris-Page__Title">
            <h2 class="page_title Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                Public Information
            </h2>
            <p>This address will appear on your invoices. You can edit the address used to calculate shipping rates in your shipping settings</p>
            <br>
        </div>
        <div class="Polaris-Page__Title">
            <h2 class="page_title Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                Private Information
            </h2>
            <p>This address will appear on your invoices. You can edit the address used to calculate shipping rates in your shipping settings</p>
            <br>
        </div>
        <div class="Polaris-Page__Title">
            <h2 class="page_title Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                Verify your email address
            </h2>
            <p>Please verify your email to help us ensure that this email belongs to you, so we can notify you about updates and new customer messages.</p>
            <br>
            <p>Check your email <b>blablayogaretreat@gmail.com</b> and click the link to activate your account. Didnt het the email? <a class="Polaris-Link" href="#" data-polaris-unstyled="true">Click here</a> to resend it.</p>
            <br>
        </div>
    </div>
    <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary"></div>
</div>
<div class="Polaris-Layout">
    <div class="Polaris-Layout__Section">
        <form id="register-form" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
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
                        <div class="form-block__container{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="password-confirm" class="Polaris-Label__Text">
                                        Confirm Password
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="password_confirmation" id="password-confirm" type="password" class="Polaris-TextField__Input">
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
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
            <div class="form-part">
                <div class="Polaris-Card">
                    <div class="Polaris-Card__Section">
                        <div class="form-block__container{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="name" class="Polaris-Label__Text">
                                        Name
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="name" id="name" type="text" class="Polaris-TextField__Input" value="{{ old('name') }}">
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-block__container{{ $errors->has('legal_name_of_business') ? ' has-error' : '' }}">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="legal_name_of_business" class="Polaris-Label__Text">
                                        Legal name of business
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="legal_name_of_business" id="legal_name_of_business" type="text" class="Polaris-TextField__Input">
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
                                <input name="phone" id="phone" type="phone" class="Polaris-TextField__Input">
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
                            <div class="Polaris-TextField">
                                <input name="country" id="country" type="phone" class="Polaris-TextField__Input">
                                <div class="Polaris-TextField__Backdrop"></div>
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
                                <input name="city" id="city" type="text" class="Polaris-TextField__Input">
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
                                <input name="website" id="website" type="text" class="Polaris-TextField__Input">
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
                                <input name="instagram_username" id="instagram_username" type="text" class="Polaris-TextField__Input">
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
                                <input name="facebook_page_link" id="facebook_page_link" type="text" class="Polaris-TextField__Input">
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
                                <input name="tripadvisor" id="tripadvisor" type="text" class="Polaris-TextField__Input">
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
            <div class="form-part">
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
                                <input name="first_name" id="first_name" type="text" class="Polaris-TextField__Input">
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
                                <input name="last_name" id="last_name" type="text" class="Polaris-TextField__Input">
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
                                <input name="cell_phone" id="cell_phone" type="text" class="Polaris-TextField__Input">
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
                                <select name="role" id="role" class="Polaris-Select__Input">
                                    <option value="owner/founder">Owner / Founder</option>
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
                        <button type="button" class="go-next-btn Polaris-Button Polaris-Button--primary">
                            <span class="Polaris-Button__Content">
                                <span>Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-part">
                <div class="tables-nav-block">
                    <div class="right">
                        <button type="submit" class="go-next-btn Polaris-Button Polaris-Button--primary">
                            <span class="Polaris-Button__Content">
                                <span>Done</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
        <div class="Polaris-Card">
            <div class="Polaris-Card__Header">
                <h2 class="Polaris-Heading">Help</h2>
            </div>
            <div class="Polaris-Card__Section">
                <p>Select styles that that are included in your program</p>
            </div>
        </div>
    </div>
</div>
@endsection
