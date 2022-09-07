<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocailController extends Controller
{

    public function gotogoogle(){

        return Socialite::driver('google')->redirect();
    }

    public function googlestore(){

        $user = Socialite::driver('google')->user();
        dd($user);
    }
    
}
