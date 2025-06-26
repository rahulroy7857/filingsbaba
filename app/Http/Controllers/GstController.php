<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class GstController extends Controller
{
    public function index()
    {
        return view('services.gst.index');
        
        // $gstServices = Service::active()->byCategory('GST')->orderBy('sort_order')->get();
        // return view('services.gst.index', compact('gstServices'));
    }

    // public function registration()
    // {
    //     $service = Service::active()->where('slug', 'gst-registration')->first();
    //     return view('services.gst.registration', compact('service'));
    // }

    // public function filing()
    // {
    //     $service = Service::active()->where('slug', 'gst-filing')->first();
    //     return view('services.gst.filing', compact('service'));
    // }

    // public function cancellation()
    // {
    //     $service = Service::active()->where('slug', 'gst-cancellation')->first();
    //     return view('services.gst.cancellation', compact('service'));
    // }

    // public function renewal()
    // {
    //     $service = Service::active()->where('slug', 'gst-renewal')->first();
    //     return view('services.gst.renewal', compact('service'));
    // }

    // public function amendment()
    // {
    //     $service = Service::active()->where('slug', 'gst-amendment')->first();
    //     return view('services.gst.amendment', compact('service'));
    // }
} 