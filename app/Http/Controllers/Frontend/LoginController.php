<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;


class LoginController extends Controller
{
    public function index(){

        return view('pages.auth.signIn');
    }
    public function signUp(){
        return view('pages.auth.signUp');
    }

    public function postLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redirect('/')->with("message_error_login","username or password salah");
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required|min:2',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>['required','confirmed',
            Password::min(8)->letters()->numbers()->mixedcase()]
        ],[
            'name.required'=> 'name tidak boleh kosong',
            'email.unique'=>'email sudah ada',
            'password.confirmed'=>'password not match',
            'password.required'=>'password wajib isi gan',
        ]);

        DB::table('users')->insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);
        
        toastr()->success('Registrasi Berhasil');
        return redirect('sign-up');
    }
    
  
}
