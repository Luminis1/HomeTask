<?php

namespace App\Http\Controllers\Mails;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    private static $instance = null;

    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function mailer($address, $name, $token)
    {
        $data = [
            'name' => $name,
            'link' => 'yoga/emailVerify/'. $token ,
            'token' => $token
            ];

        $email = $address;


        Mail::send(['text'=>'mail'],$data, function($message) use ($email){
            $message->to($email, 'luminis')->subject('Yoga email confirmation');
            $message->from('Luminis111@gmail.com', 'Yoga');
        });
    }
    private function __construct(){}
    private function __clone() {}

}
