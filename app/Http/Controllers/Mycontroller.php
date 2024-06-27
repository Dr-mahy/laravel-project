<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\Contactmail;
use App\Models\Client;
class Mycontroller extends Controller
{
    public function my_data(){
        return view('test');
    }
    public function myval(){
        // session()->put('test','First Laravel session');
        session()->flash('test1', 'First Laravel session');
        return "session created";
    }
    public function restoreval(){
        return "my session value is:". session('test');
    }
    public function deleteval(){
        // session()->forget('test');
        // return "session deleted";
        session()->flush();
        return " all sessions stoped";
    }
    // public function flush(){
    //     session()->flush();
    //     return " all sessions stoped";
    // }
    public function sendclientmail(){
        $data=Client::findOrFail(1)->toArray();
        $data['theMessage']='my message';
        Mail::to($data['email'])->send(
            new Contactmail($data)
        );
        return "mail sent";
    }
}
