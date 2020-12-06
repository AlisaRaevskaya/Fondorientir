<?php

namespace App\Http\Controllers\Auth;

use App\Http\Models\User;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function forgot()
    {
        return view('auth.forgot-password');
    }
    public function password(Request $req)
    {
        $user=User::whereEmail($req->email)->first();

        if ($user === 0) {
            return redirect()->back()->with(['error'=>'Такого пользователя не существует']);
        }

        $user=User::findById($user->id);
        $reminder=Reminder::exists($user)?  :Reminder::create($user);
        $this->sendEmail($user, $reminder->code);
        return redirect()->back()->with(['success'=>'Письмо отправлено на Вашу почту']);
    }

    public function sendByEmail()
    {
    }
}
