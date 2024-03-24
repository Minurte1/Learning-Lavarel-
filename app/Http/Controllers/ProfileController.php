<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Lấy thông tin của người dùng đã đăng nhập
        return view('profile.index', compact('user'));
    }
}
