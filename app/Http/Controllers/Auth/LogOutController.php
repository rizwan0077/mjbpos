<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogOutController extends Controller
{
    // To logout the user

    public function logout() {
        Auth::logout();
        return redirect('login');
    }
}
