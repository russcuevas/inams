<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantsController extends Controller
{
    public function TenantsPage()
    {
        return view('admin.tenants.tenants_list');
    }
}
