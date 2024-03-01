<?php
 
namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login.index', [
            "title" => "Login"
        ]);
    }

    public function login(Request $request) {

        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/student')->with('success', 'Login berhasil');
        }
    
        return back()->with('error', 'Login Failed.');
    }

    public function registerView()
    {
        return view ('login.register', [
            "title" => "register"
        ]);
    }
    
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'password' => 'nullable',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        ModelsUser::create($validateData);
        return redirect('/auth/login')->with('success', 'Register berhasil, silahkan login!');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('student.all')->with('success', "Logout Success");
    }
}