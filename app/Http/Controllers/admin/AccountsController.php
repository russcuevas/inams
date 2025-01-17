<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function AccountPage()
    {
        return view ('admin.accounts.accounts_list');
    }
}
