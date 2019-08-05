<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getLogout() {
        Auth::logout();
        return redirect(\URL::previous());
    }

    public function sendMail()

    {

    $data['title'] = "Test it from HDTutu.com";

    Mail::send('emails.email', $data, function($message) {

        $message->to('20163902@student.hust.edu.vn', 'Receiver Name')

                ->subject('HDTuto.com Mail');

    });

    dd("Mail Sent successfully");

    }
}
