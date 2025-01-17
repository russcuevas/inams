<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function MaintenancePage()
    {
        return view ('admin.maintenance.maintenance_list');
    }
}
