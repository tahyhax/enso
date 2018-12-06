<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.individual.index');
    }
}
