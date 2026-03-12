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
            'name'=>'required|min:3|unique:users,name|string|max:255',
            'email'=>'required|email|unique:users,email|string|max:255',
            'password'=>'required|confirmed|min:8',
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
        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);
        $loginType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $userExists = \App\Models\User::where($loginType, $request->login)->exists();

        if (!$userExists) {
            return back()->withErrors(['login' => 'user not found!']);
        }
        $credentials = [
            $loginType => $request->login,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'login'=>'Wrong email or password'
        ])->onlyInput('login');
    }

}
