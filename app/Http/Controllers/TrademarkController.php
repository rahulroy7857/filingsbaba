<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class TrademarkController extends Controller
{
    public function index()
    {
        return view('services.trademark.trademarkregistration');       
    }   
    
    // public function trademarkregistration()
    // {
    //     return view('services.trademark.trademarkregistration');
    // }
    
    public function trademarkobjection()
    {
        return view('services.trademark.trademarkobjection');       
    }
    
    public function trademarkopposition()
    {
        return view('services.trademark.trademarkopposition');       
    }
    
    public function trademarkcertificate()
    {
        return view('services.trademark.trademarkcertificate');       
    }
    
    public function trademarkhearing()
    {
        return view('services.trademark.trademarkhearing');       
    }
    
    public function trademarkrenewal()
    {
        return view('services.trademark.trademarkrenewal');       
    }
} 