<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function login(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => ['required', 'min:5', 'max:20'],
            'password' => ['required', 'min:5']
        ]);


        if (Auth::attempt($validated)) {

            $user = Auth::user();
            $request->session()->regenerate();
            return response()->redirectToIntended(
                $user->hasRole('admin') ? route('admin-home') : route('dashboard')
            );
        } else {
            return back()->withErrors([
                'username' => 'Username atau password salah !'
            ])->onlyInput('usename');
        }
    }
}
