<?php

namespace App\Http\Controllers\tenants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantsPaymentController extends Controller
{
    public function TenantsPaymentPage()
    {
        return view('tenants.dashboard.payment');
    }
}
