<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }

    public function adminProfile()
    {
        return view('admin.profile');
    }
}
