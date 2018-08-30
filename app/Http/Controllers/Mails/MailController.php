<?php

namespace App\Http\Controllers\Mails;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /*
     * Синглтон для отправки писем с подтверждением мэйла
     */

    private static $instance = null;
    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function mailer()
    {
        $data = [
            'name' => session('name'),
            'link' => $_SERVER['HTTP_HOST'] . '/emailVerify/'. session('token') ,
            ];
        $email = session('email');
        Mail::send(['html'=>'mail'],$data, function($message) use ($email){
            $message->to($email, 'luminis')->subject('Yoga email confirmation');
            $message->from('Luminis111@gmail.com', 'Yoga');
        });

    }
    private function __construct(){}
    private function __clone() {}

}
