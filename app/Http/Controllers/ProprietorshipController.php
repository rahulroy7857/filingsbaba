<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietorshipController extends Controller
{
    public function proprietorship_index()
    {
        return view('startup.proprietorship.proprietorship');
    }
}