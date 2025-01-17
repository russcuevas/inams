<?php

namespace App\Http\Controllers\tenants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantsMaintenanceController extends Controller
{
    public function TenantsMaintenancePage()
    {
        return view('tenants.dashboard.maintenance');
    }
}
