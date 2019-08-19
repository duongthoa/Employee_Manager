<?php

namespace App\Mail;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    //protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(/*User $user*/)
    {
        //$this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('mail')->subject('Notifications Mail')
            ->with([
            'HoTenNV' => $request->input('HoTenNV'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);
    }
}
