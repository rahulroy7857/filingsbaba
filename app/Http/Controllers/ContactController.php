<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:10',
            'menu-206' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
        ]);        
        Enquiry::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'service' => $request->input('menu-206'),
            'message' => $request->input('message'),
            'status' => '1'
        ]);

        // Send email notification (you can implement this later)
        // Mail::to('admin@filingsbaba.com')->send(new EnquiryNotification($enquiry));
        return redirect()->back()->with('success', 'Thank you for your enquiry. We will contact you soon!');
        
    }
} 