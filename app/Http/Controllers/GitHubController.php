<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function gitHubLogin() {
        return Socialite::driver('github')->redirect();
    }

    public function gitHubCallback() {

        $user = Socialite::driver('github')->user();
        $gitUser = new User();

        if ($gitUser->github_id == $user->id) {

            Auth::login($gitUser);
            return redirect()->route("dashboard");

        } else {

            $gitUser->name = $user->name;
            $gitUser->email = $user->email;
            $gitUser->photo  = $user->avatar;
            $gitUser->github_id = $user->id;
            $gitUser->password = Hash::make("12345678");
            $gitUser->auth_type = "github";
            $gitUser->save();

            Auth::login($gitUser);
            return redirect()->route("dashboard");

        }

//        return redirect()->route("dashboard");

    }

}
