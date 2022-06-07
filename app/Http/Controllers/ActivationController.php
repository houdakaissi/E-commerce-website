<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ActivateYourAccount;

use App\User;
class ActivationController extends Controller
{
     public function activateUserAccount($code){
             $user=User::whereCode($code)->first();
             $user->code= null;
             $user->update([
                       "active" => 1
             ]);
             Auth::login($user);
             return redirect("/")->withSuccess("connecté");

     }
     public function resendActivationCode($email){
        $user=User::whereEmail($email)->first();
       if( $user->active){
            return redirect("/");
     }
        Mail::to($user)->send(new ActivateYourAccount($user->code) );
        return redirect("/login")->withSuccess("le lien d'activation");

}
}
