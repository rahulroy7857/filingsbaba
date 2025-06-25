<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function index()
    {
        $taxServices = Service::active()->byCategory('Tax')->orderBy('sort_order')->get();
        return view('services.tax.index', compact('taxServices'));
    }

    public function eFiling()
    {
        $service = Service::active()->where('slug', 'income-tax-e-filing')->first();
        return view('services.tax.e-filing', compact('service'));
    }

    public function businessTax()
    {
        $service = Service::active()->where('slug', 'business-tax-filing')->first();
        return view('services.tax.business-tax', compact('service'));
    }

    public function itr1()
    {
        $service = Service::active()->where('slug', 'itr-1-return-filing')->first();
        return view('services.tax.itr1', compact('service'));
    }

    public function itr2()
    {
        $service = Service::active()->where('slug', 'itr-2-return-filing')->first();
        return view('services.tax.itr2', compact('service'));
    }

    public function itr3()
    {
        $service = Service::active()->where('slug', 'itr-3-return-filing')->first();
        return view('services.tax.itr3', compact('service'));
    }

    public function itr4()
    {
        $service = Service::active()->where('slug', 'itr-4-return-filing')->first();
        return view('services.tax.itr4', compact('service'));
    }

    public function itr5()
    {
        $service = Service::active()->where('slug', 'itr-5-return-filing')->first();
        return view('services.tax.itr5', compact('service'));
    }

    public function itr6()
    {
        $service = Service::active()->where('slug', 'itr-6-return-filing')->first();
        return view('services.tax.itr6', compact('service'));
    }

    public function itr7()
    {
        $service = Service::active()->where('slug', 'itr-7-return-filing')->first();
        return view('services.tax.itr7', compact('service'));
    }

    public function ca15cb()
    {
        $service = Service::active()->where('slug', '15ca-15cb-filing')->first();
        return view('services.tax.ca15cb', compact('service'));
    }

    public function tds()
    {
        $service = Service::active()->where('slug', 'tds-return-filing')->first();
        return view('services.tax.tds', compact('service'));
    }

    public function notice()
    {
        $service = Service::active()->where('slug', 'income-tax-notice')->first();
        return view('services.tax.notice', compact('service'));
    }
} 