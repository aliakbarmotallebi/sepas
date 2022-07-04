<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view($this->theme.'categories.index');
    }
}
