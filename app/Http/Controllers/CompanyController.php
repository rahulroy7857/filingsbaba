<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companyServices = Service::active()->byCategory('Company')->orderBy('sort_order')->get();
        return view('services.company.index', compact('companyServices'));
    }

    public function registration()
    {
        $service = Service::active()->where('slug', 'company-registration')->first();
        return view('services.company.registration', compact('service'));
    }

    public function privateLimited()
    {
        $service = Service::active()->where('slug', 'private-limited-company')->first();
        return view('services.company.private-limited', compact('service'));
    }

    public function publicLimited()
    {
        $service = Service::active()->where('slug', 'public-limited-company')->first();
        return view('services.company.public-limited', compact('service'));
    }

    public function llp()
    {
        $service = Service::active()->where('slug', 'llp-registration')->first();
        return view('services.company.llp', compact('service'));
    }

    public function partnership()
    {
        $service = Service::active()->where('slug', 'partnership-firm')->first();
        return view('services.company.partnership', compact('service'));
    }

    public function proprietorship()
    {
        $service = Service::active()->where('slug', 'proprietorship-firm')->first();
        return view('services.company.proprietorship', compact('service'));
    }
} 