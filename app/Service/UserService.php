<?php

namespace App\Service;

use Illuminate\Support\Facades\Auth;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function login($validUser): bool
    {
        return Auth::attempt($validUser);
    }
}
