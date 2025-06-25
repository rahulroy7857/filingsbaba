<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class TrademarkController extends Controller
{
    public function index()
    {
        $trademarkServices = Service::active()->byCategory('Trademark')->orderBy('sort_order')->get();
        return view('services.trademark.index', compact('trademarkServices'));
    }

    public function registration()
    {
        $service = Service::active()->where('slug', 'trademark-registration')->first();
        return view('services.trademark.registration', compact('service'));
    }

    public function renewal()
    {
        $service = Service::active()->where('slug', 'trademark-renewal')->first();
        return view('services.trademark.renewal', compact('service'));
    }

    public function objection()
    {
        $service = Service::active()->where('slug', 'trademark-objection')->first();
        return view('services.trademark.objection', compact('service'));
    }

    public function opposition()
    {
        $service = Service::active()->where('slug', 'trademark-opposition')->first();
        return view('services.trademark.opposition', compact('service'));
    }

    public function assignment()
    {
        $service = Service::active()->where('slug', 'trademark-assignment')->first();
        return view('services.trademark.assignment', compact('service'));
    }

    public function series()
    {
        $service = Service::active()->where('slug', 'series-trademark')->first();
        return view('services.trademark.series', compact('service'));
    }

    public function copyright()
    {
        $service = Service::active()->where('slug', 'copyright-registration')->first();
        return view('services.trademark.copyright', compact('service'));
    }
} 