<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\AuthenticationException;

class UserService
{
    public function login(array $userValid): bool|RedirectResponse
    {
        return Auth::attempt($userValid)?:
        throw new AuthenticationException("Username atau password salah !");

    }
}
