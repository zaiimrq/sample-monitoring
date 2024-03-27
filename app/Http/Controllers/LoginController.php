<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;

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

        try {
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
            }

        } catch(AuthenticationException $e){
            
            return back()->withErrors([
                'username' => $e->getMessage()
            ])->onlyInput('username');
        }
    
    }
}
