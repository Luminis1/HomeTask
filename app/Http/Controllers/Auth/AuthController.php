<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Request;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Controllers\Mails\MailController;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'legal_name_of_business' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'website' => 'required',
            'instagram_username' => 'required',
            'facebook_page_link' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'cell_phone' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $salt = 'pLdsqpfCvijNwjutFbRKFkq4kdeCEtxdi4t7LEni';
        $verifyToken = md5((string)$data['email'] . (string)$data['password'] . (string)$salt);
        session([
            $verifyToken => $data['email'],
            'token' => base64_encode($data['email']),
            'name' => $data['first_name'],
            'email' => $data['email']
        ]);

        $mailer = MailController::getInstance();
        $mailer->mailer();

        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'legal_name_of_business' => $data['legal_name_of_business'],
            'country' => $data['country'],
            'city' => $data['city'],
            'website' => $data['website'],
            'instagram_username' => $data['instagram_username'],
            'facebook_page_link' => $data['facebook_page_link'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'cell_phone' => $data['last_name'],
            'role' => $data['role'],
        ]);
    }
}
