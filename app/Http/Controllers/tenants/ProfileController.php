<?php

namespace App\Http\Controllers\tenants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function ProfilePage()
    {
        return view('tenants.dashboard.profile');
    }
}
