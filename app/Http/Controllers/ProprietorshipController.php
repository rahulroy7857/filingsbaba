<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietorshipController extends Controller
{
    public function proprietorship_index()
    {
        return view('startup.proprietorship.proprietorship');
    }
    public function partnership()
    {
        return view('startup.partnership.partnership');
    }
    public function onePersonCompany()
    {
        return view('startup.onepersoncompany.onepersoncompany');
    }
    public function limitedLiabilityLPartnership()
    {
        return view('startup.limitedliabilitypartnership.limitedliabilitypartnership');
    }
    public function privateLimitedCompany()
    {
        return view('startup.privatelimitedcompany.privatelimitedcompany');
    }
}