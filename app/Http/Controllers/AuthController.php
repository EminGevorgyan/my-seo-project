<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function storeIntendedUrl(){
        $previousUrl = url()->previous();
        $ignoredUrls = [route('login'), route('register')];

        if (!session()->has('url.intended') && !in_array($previousUrl, $ignoredUrls)) {
            session(['url.intended' => $previousUrl]);
        }
    }
    public function login(){
        self::storeIntendedUrl();
        return view('auth.login', ['inf'=>'this is the login page', 'title'=>'Login']);
    }
    public function register(){
        self::storeIntendedUrl();
        return view('auth.register', ['inf'=>'this is the register page', 'title'=>'Register']);
    }
    public function handleReg(Request $request){
        $data = $request->validate([
            'name'=>'required|min:3|unique:users,name|string|max:255',
            'email'=>'required|email|unique:users,email|string|max:255',
            'password'=>'required|confirmed|min:8',
            'remember'=>'boolean',
        ]);

        $user = User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
        Auth::login($user, $request->remember ?? false);

        return redirect()->intended(route('home'));
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
            return redirect()->intended(route('home'));
        }
        return back()->withErrors([
            'login'=>'Wrong email or password'
        ])->onlyInput('login');
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->back();
    }
    public function destroy(User $user)
    {
        // Удаляем юзера
        $user->delete();

        // Обязательно делаем логаут, иначе сессия останется "битой"
        auth()->logout();

        return redirect(route('home'));
    }
}
