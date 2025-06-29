<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class FssaiController extends Controller
{
    public function index()
    {
        return view('services.fssai.fssairegistration');       
    }   
    
    
    public function fssairenewal()
    {
        return view('services.fssai.fssairenewal');       
    }
    
    public function fssaimodification()
    {
        return view('services.fssai.fssaimodification');       
    }
} 