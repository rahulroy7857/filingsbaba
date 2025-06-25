<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class FssaiController extends Controller
{
    public function index()
    {
        $fssaiServices = Service::active()->byCategory('FSSAI')->orderBy('sort_order')->get();
        return view('services.fssai.index', compact('fssaiServices'));
    }

    public function registration()
    {
        $service = Service::active()->where('slug', 'fssai-registration')->first();
        return view('services.fssai.registration', compact('service'));
    }

    public function renewal()
    {
        $service = Service::active()->where('slug', 'fssai-renewal')->first();
        return view('services.fssai.renewal', compact('service'));
    }

    public function modification()
    {
        $service = Service::active()->where('slug', 'fssai-modification')->first();
        return view('services.fssai.modification', compact('service'));
    }

    public function license()
    {
        $service = Service::active()->where('slug', 'fssai-license')->first();
        return view('services.fssai.license', compact('service'));
    }
} 