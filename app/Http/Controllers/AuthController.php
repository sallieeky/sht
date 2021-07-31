<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        event(new Registered($user));
    }


    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } else {
            return redirect()->back();
        }
    }


    public function sendMail()
    {
        return view('sendmail');
    }
    public function sendMailPost(Request $request)
    {
        $data = [
            'nama' => $request->to,
            'pesan' => $request->pesan
        ];
        Mail::send('pesan.pesan', $data, function ($message) use ($request) {
            $message->to($request->to);
            $message->subject("Pesan Dari SHT");
        });
        return redirect()->back();
    }
}
