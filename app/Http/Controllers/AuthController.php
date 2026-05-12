<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
   
    public function index()
    {
        return view('auth');
    }

  
    public function register(Request $request)
    {
        
        $request->validate([
            'name' => 'required|min:2',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|min:8|confirmed',

            'role' => 'required'
        ]);
    
        User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make($request->password),

            'role' => $request->role
        ]);

        return redirect('auth');

    }

    
   public function login(Request $request)
{
        // 1. validate input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // 2. attempt login
        if (Auth::attempt($credentials)) {

            // 3. regenerate session (security best practice)
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            }

            if ($user->role === 'teacher') {
                return redirect('/teacher/dashboard');
            }

            return redirect('/parent/dashboard');
        }

        // 4. if login fails
        return back()->withErrors([
            'email' => 'Invalid credentials'
        ]);
    }

   
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/auth');
    }

   
}
