<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Service\UserService;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function login(Request $request, UserService $userService)
    {

        $validated = $request->validate([
            'username' => ['required', 'min:5', 'max:20'],
            'password' => ['required', 'min:5']
        ]);

            if ($userService->login($validated))
            {
                $user = User::findOrFail(Auth::user()->id);
                $request->session()->regenerate();

                return response()->redirectToIntended(
                        $user->when($user->hasRole('admin'), 
                            fn() => route('admin.dashboard'), 
                            fn() => route('timses.dashboard')
                        )
                );
            } else {
                return back()->withErrors([
                    'username' => 'Username atau passwor salah !'
                ])->onlyInput('username');
            }

            
    
    }
}
