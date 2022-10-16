<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller{
    public function login(){
        return Socialite::driver("google")->redirect();
    }

    public function callback(){
        try {
            $googleUser = Socialite::driver("google")->user();
            $user = User::where("email", $googleUser->email)->first();

            if($user){
                Auth::login($user);
                
                if($user->role->name == "admin"){
                    return redirect("/admin");
                }
                
                return redirect("/");
            }
            
            User::create([
                "name" => ucwords($googleUser->name),
                "email" => $googleUser->email,
                "image" => $googleUser->avatar,
            ]);
            
            Auth::login($user);
            return redirect("/beranda");
        } catch (\Throwable $th) {
            abort(404);
        }
    }
}