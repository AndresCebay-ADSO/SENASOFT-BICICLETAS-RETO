<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'emailUser' => 'required|email',
        'passUser' => 'required|string',
    ]);

    $user = User::where('emailUser', $request->emailUser)->first();

    if ($user && \Hash::check($request->passUser, $user->passUser)) {
        // Iniciar sesión manualmente
        auth()->login($user);
        
        if ($user->idRolUser === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    } else {
        return back()->withErrors(['login' => 'Credenciales incorrectas']);
    }
}
}