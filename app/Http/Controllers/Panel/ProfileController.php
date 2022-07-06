<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

class ProfileController extends PanelController
{

    public function index(Request $request)
    {
        $user = $request->user();

        return view('user.layouts.index', 
            compact('user')
        );
    }

    public function profileEdit(Request $request)
    {
        $user = $request->user();

        return view('user.layouts.profile', 
            compact('user')
        );
    }
}
