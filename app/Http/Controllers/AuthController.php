<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
            'password'=>'required|confirmed'
        ]);
        User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
//            'password'=>Hash::make($data['password']),
            'password'=>$data['password'],
        ]);
        return redirect('/login')->with('success', 'Регистрация прошла успешно!');
//        $user = new (config('auth.providers.users.model'));
//        $user->name = request('name');
//        $user->email = request('email');
//        $user->password = bcrypt(request('password'));
//        $user->save();
    }
}
