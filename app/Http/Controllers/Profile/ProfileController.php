<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(int $id = null)
    {
        $user = User::findOrFail($id);
        return view('profile/view', ['user' => $user]);
    }
}
