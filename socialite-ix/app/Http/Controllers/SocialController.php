<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([

            'name' => $googleUser->name,
            'email' => $googleUser->email,
            // 'google_token' => $googleUser->token,
            // 'google_refresh_token' => $googleUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/dashboard');

    }
}