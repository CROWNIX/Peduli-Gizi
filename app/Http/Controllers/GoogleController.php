<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;


class GoogleController extends Controller{
    public function login(){
        return Socialite::driver("google")->redirect();
    }

    public function callback(){
        try {
            $googleUser = Socialite::driver("google")->user();
            $user = User::where("email", $googleUser->email)->first();
            
            $username = Str::slug($googleUser->name, '-');

            if($user){
                Auth::login($user);
                
                if($user->role->name == "admin"){
                    return redirect("/admin");
                }
                
                return redirect("/");
            }
            
            $user = User::create([
                "name" => ucwords($googleUser->name),
                "username" => $username,
                "email" => $googleUser->email,
                "image" => $googleUser->avatar,
            ]);
            
            Auth::login($user);
            return redirect("/beranda");
        } catch (\Throwable $th) {
            dd($th);
            abort(404);
        }
    }
}