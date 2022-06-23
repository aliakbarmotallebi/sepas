<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends MainController
{
    public function index(Request $request)
    {
        return 'welcome home';
    }
}
