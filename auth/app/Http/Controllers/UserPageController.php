<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{
    public function showUser()
    {
        $userId = Auth::user()->getAuthIdentifier();
        $user = Auth::user();
        $userData = ['id' => $userId, 'email' => $user['email'], 'name' => $user['name']];
        return view('showUserProfile', ['user' => $userData]);
    }
}
