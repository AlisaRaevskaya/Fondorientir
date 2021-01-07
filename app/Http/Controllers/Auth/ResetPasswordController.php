<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function showReset($email){
        // $user=User::where('email',$email)->first()
        return view('auth.reset-password', $email);
    }

    public function showReset($email){
        $user=User::where('email',$email)->first()
    }

    public function update($email){
        $user=User::where('email',$email)->first()
    }

}