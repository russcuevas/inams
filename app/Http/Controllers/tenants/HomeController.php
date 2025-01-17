<?php

namespace App\Http\Controllers\tenants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomePage(){
        return view('tenants.home');
    }

    public function LocationPage()
    {
        return view('tenants.location');
    }

    public function ApartmentsPage()
    {
        return view('tenants.apartments');
    }
}
