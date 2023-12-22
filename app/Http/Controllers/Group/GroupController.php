<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('group/view');
    }
}
