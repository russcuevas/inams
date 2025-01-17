<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppartmentController extends Controller
{
    public function AppartmentPage()
    {
        return view ('admin.apartments.apartment_list');
    }
}
