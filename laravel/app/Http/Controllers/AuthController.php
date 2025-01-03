<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $roles = Role::all(); // Tüm rolleri alıyoruz
        return view('auth.register', compact('roles')); // Register view'ına gönderiyoruz
    }

    public function register(Request $request)
    {
        // Validasyon
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',   // Telefon alanı
            'role_id' => 'required|integer',  // Rol alanı
        ]);

        // Kullanıcı Kaydetme
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'phone' => $validated['phone'],  // Telefon
            'role_id' => $validated['role_id'], // Rol
        ]);

        // Kullanıcıyı giriş yaptır (Opsiyonel)
        auth()->login($user);

        return redirect()->route('home'); // Giriş yaptıktan sonra anasayfaya yönlendir
    }


}
