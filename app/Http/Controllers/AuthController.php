<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AuthController extends Controller
{
    public function getSignupPage(): View
    {
        return view('auth.signup');
    }
}
