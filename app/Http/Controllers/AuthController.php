<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login', ['inf'=>'this is the login page', 'title'=>'Login']);
    }
    public function register(){
        return view('auth.register', ['inf'=>'this is the register page', 'title'=>'Register']);
    }
    public function handleReg(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'remember'=>'boolean',
        ]);
        User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);

        return redirect('/login')->with('success', 'Регистрация прошла успешно!');
    }
    public function handleLogin(Request $request){
        $data = $request->validate([
            'name' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt(['email'=>$data['name'], 'password'=>$data['password']], $request->remember)){
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Вы успешно вошли!');
        }
        return back()->withErrors([
            'email'=>'Wrong email or password'
        ])->onlyInput('email');
    }

}
