<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

class ProfileController extends PanelController
{
    public function index(Request $request)
    {
        return 'welcome user';
    }
}
