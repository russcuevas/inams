<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function TenantsLoginPage()
    {
        return view('auth.tenants.login');
    }

    public function AdminLoginPage()
    {
        return view('auth.admin.login');
    }
}
