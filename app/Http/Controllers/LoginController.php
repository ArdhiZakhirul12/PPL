<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function mitra()
    {
        return view('login.login', [
            'title' => 'login mitra'
        ]);
    }

    public function loginMitra(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required | email',
            'password'  => 'required | min:5 | max:255'
        ]);
        try {
            if(Auth::attempt($credentials)){
            // Auth::attempt($credentials);
            $request->session()->regenerate();
            $user = User::find(auth()->user()->id);
            if($user->role == 'mitra'){
                return redirect()->intended('/m/dashboard');}
            elseif($user->role == 'admin'){
                    return redirect()->intended('/a/dashboard');}
            elseif($user->role == 'investor'){
                    return redirect()->intended('/i/dashboard');}
                 
            }  
            else{
                return back()->with('loginError', 'Login gagal');
            }
        } catch (Exception $err) {
            return back()->with('loginError', $err->getMessage());
        }
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}


