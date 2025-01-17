<?php

namespace App\Http\Controllers\tenants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantsMessageController extends Controller
{
    public function TenantsMessagePage()
    {
        return view('tenants.dashboard.message');
    }
}
