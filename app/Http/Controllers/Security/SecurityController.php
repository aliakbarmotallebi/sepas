<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('guest')->except('logout');
    }

    public function auth()
    {
        return view('security.security');
    }

    public function logout()
    {
        auth()->logout();

        return redirect(RouteServiceProvider::HOME);
    }
}
