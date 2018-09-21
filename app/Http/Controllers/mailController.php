<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send(){

        // Mail::send(['text'=>'mail'],['name','Ripon Uddin Arman'],function($message){
        //     $message->to('devstar8932@gmail.com')->subject("Email Testing with Laravel");
        //     $message->from('ryc8932@gmail.com','Creative Losser Hopeless Genius');
        // });
        $data = array('name'=>"San Jose","body"=>"Cool");
        Mail::send('mail',$data,function($message){
            $message->to('devstar8932@gmail.com','To devstar')->subject('Test Email');
            $message->from('ryc8932@gmail.com','ryc');
        });
        echo "Email Sent. Check your inbox";
    }
}
