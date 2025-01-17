<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function SystemPage()
    {
        return view('admin.systems.system_settings');
    }
}
