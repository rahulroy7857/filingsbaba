<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ComplianceController extends Controller
{
    public function index()
    {
        return view('services.compliance.company-compliance');       
    }   
    
    public function companyCompliance()
    {
        return view('services.compliance.company-compliance');
    }
    
    public function llpCompliance()
    {
        return view('services.compliance.llp-compliance');
    }
    
    public function opcCompliance()
    {
        return view('services.compliance.opc-compliance');
    }
    
    public function nameChangeCompany()
    {
        return view('services.compliance.name-change-company');
    }
    
    public function registeredOfficeChange()
    {
        return view('services.compliance.registered-office-change');
    }
    
    public function dinEkycFiling()
    {
        return view('services.compliance.din-ekyc-filing');
    }
    
    public function dinReactivation()
    {
        return view('services.compliance.din-reactivation');
    }
    
    public function directorChange()
    {
        return view('services.compliance.director-change');
    }
    
    public function removeDirector()
    {
        return view('services.compliance.remove-director');
    }
    
    public function adt1Filing()
    {
        return view('services.compliance.adt1-filing');
    }
    
    public function dpt3Filing()
    {
        return view('services.compliance.dpt3-filing');
    }
    
    public function llpForm11Filing()
    {
        return view('services.compliance.llp-form11-filing');
    }
    
    public function dormantStatusFiling()
    {
        return view('services.compliance.dormant-status-filing');
    }
    
    public function moaAmendment()
    {
        return view('services.compliance.moa-amendment');
    }
    
    public function aoaAmendment()
    {
        return view('services.compliance.aoa-amendment');
    }
    
    public function authorizedCapitalIncrease()
    {
        return view('services.compliance.authorized-capital-increase');
    }
    
    public function shareTransfer()
    {
        return view('services.compliance.share-transfer');
    }
    
    public function dematOfShares()
    {
        return view('services.compliance.demat-of-shares');
    }
    
    public function windingUpLlp()
    {
        return view('services.compliance.winding-up-llp');
    }
    
    public function windingUpCompany()
    {
        return view('services.compliance.winding-up-company');
    }
} 