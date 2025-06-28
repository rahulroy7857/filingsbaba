<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class GstController extends Controller
{
    public function index()
    {
        return view('services.gst.gstregistration');       
       
    }   
  
  
    
    public function gstfilings()
    {
        return view('services.gst.gstfilings');
    }
    
    public function gstcancellation()
    {
        return view('services.gst.gstcancellation');       
       
    }

   
} 