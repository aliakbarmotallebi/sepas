<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::latest()->paginate(self::$MaxResult);

        return view(
            'dashboard.messages.index',
            compact('messages')
        );
    }
}
