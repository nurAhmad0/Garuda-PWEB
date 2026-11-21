<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    private const AUTH_DUMMY_HASH = '$2y$12$bpzlaJ2igPGuYZPnSM78AuhcDeRtqXFvxu0XTgnL.gMUbcwrbS1OK';
    public function showRegister(): View
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request): RedirectResponse
    {
        $data = $request->validated();
        try {
            User::create([
                'nama'     => $data['nama'],
                'email'    => $data['email'],
                'password' => Hash::make($data['password']),
                'role'     => $data['role'],
            ]);
        } catch (QueryException $e) {
            // 1062 = duplicate entry -> constraint UNIQUE uq_users_email di database
            if ((int) ($e->errorInfo[1] ?? 0) === 1062) {
                return back()->withInput()->withErrors(['email' => 'Email sudah terdaftar.']);
            }
            throw $e;
        }
        return redirect()->route('login')
            ->with('flash', ['Pendaftaran berhasil. Silakan masuk.', 'ok']);
    }
    public function showLogin(): View
    {
        return view('auth.login');
    }
    public function login(Request $request): RedirectResponse
    {
        $email    = strtolower(trim((string) $request->input('email', '')));
        $password = (string) $request->input('password', '');
        $user = (strlen($email) <= 100 && strlen($password) <= 1024)
            ? User::where('email', $email)->first()
            : null;
        $ok = Hash::check($password, $user?->password ?? self::AUTH_DUMMY_HASH);
        if ($user === null || ! $ok) {
            return back()
                ->withInput($request->only('email'))
                ->with('flash', ['Email atau password salah.', 'err']);
        }
        Auth::login($user);
        $request->session()->regenerate();
        $request->session()->regenerateToken();
        if (Hash::needsRehash($user->password)) {
            $user->forceFill(['password' => Hash::make($password)])->save();
        }
        return redirect()
            ->route($user->role === 'admin' ? 'admin' : 'dashboard')
            ->with('flash', ['Selamat datang kembali.', 'ok']);
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')
            ->with('flash', ['Anda telah keluar.', 'ok']);
    }
}
