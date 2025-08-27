<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    $request->validate([
        'nameUser' => 'required|string|max:255',
        'lastnameUser' => 'required|string|max:255',
        'numDocUser' => 'required|integer',
        'emailUser' => 'required|email|unique:users,emailUser',
        'passUser' => 'required|string|min:6|confirmed',
    ]);

    try {
        User::create([
            'nameUser' => $request->nameUser,
            'lastnameUser' => $request->lastnameUser,
            'numDocUser' => $request->numDocUser,
            'emailUser' => $request->emailUser,
            'passUser' => bcrypt($request->passUser),
            'idRolUser' => 'cliente',
        ]);

        return redirect()->route('auth.index')->with('success', 'Usuario registrado correctamente');
    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Error al registrar usuario: ' . $e->getMessage()]);
    }
}
}
