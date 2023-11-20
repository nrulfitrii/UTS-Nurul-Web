<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginIndex()
    {
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        // dd($credential);
        //! attempt dibawah ini jika ingin attempt costum
        if (
            Auth::attempt(['email'=>$request->email, 'password'=>$request->password,])
        ) {
            $request->session()->regenerate();
            // dd($request);
            return redirect()->route('dashboard.index');
        }
        // dd('fail');
        return back()->with('status_fail','Email atau Password Salah');
    }
    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
     
        return redirect()->route('login');
    }
}
