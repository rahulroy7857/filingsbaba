<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        // GST Services
        Service::create([
            'name' => 'GST Registration',
            'slug' => 'gst-registration',
            'description' => 'Complete GST registration services for businesses of all sizes. Get your GST number quickly and efficiently.',
            'features' => json_encode([
                'Quick online registration',
                'Document verification',
                'GST number generation',
                'Post-registration support',
                'Digital signature certificate assistance',
                'Bank account integration'
            ]),
            'requirements' => json_encode([
                'PAN Card',
                'Aadhaar Card',
                'Bank Statement',
                'Business Address Proof',
                'Passport Size Photo'
            ]),
            'process' => json_encode([
                'Document Collection',
                'Application Filing',
                'Verification',
                'GST Number Generation'
            ]),
            'benefits' => json_encode([
                'Legal recognition as a business entity',
                'Input tax credit benefits',
                'Enhanced business credibility',
                'Access to government tenders',
                'Compliance with tax laws',
                'Better business opportunities'
            ]),
            'price' => 1499.00,
            'duration' => '7-15 days',
            'category' => 'GST',
            'subcategory' => 'Registration',
            'sort_order' => 1
        ]);

        Service::create([
            'name' => 'GST Filing',
            'slug' => 'gst-filing',
            'description' => 'Timely and accurate GST return filing services. Ensure compliance and avoid penalties.',
            'features' => json_encode([
                'Monthly/Quarterly returns',
                'GSTR-1, GSTR-3B filing',
                'Reconciliation services',
                'Penalty avoidance',
                'Automated filing',
                'Compliance monitoring'
            ]),
            'requirements' => json_encode([
                'GST Number',
                'Business Documents',
                'Sales and Purchase Records',
                'Bank Statements'
            ]),
            'process' => json_encode([
                'Data Collection',
                'Return Preparation',
                'Verification',
                'Filing Submission'
            ]),
            'benefits' => json_encode([
                'Timely compliance',
                'Avoid penalties',
                'Input tax credit',
                'Business credibility',
                'Audit readiness'
            ]),
            'price' => 999.00,
            'duration' => 'Monthly/Quarterly',
            'category' => 'GST',
            'subcategory' => 'Filing',
            'sort_order' => 2
        ]);

        Service::create([
            'name' => 'GST Cancellation',
            'slug' => 'gst-cancellation',
            'description' => 'Professional assistance for GST registration cancellation when your business closes or changes.',
            'features' => json_encode([
                'Proper documentation',
                'Final return filing',
                'Tax clearance',
                'Legal compliance',
                'Status verification',
                'Complete closure'
            ]),
            'requirements' => json_encode([
                'GST Number',
                'Business Closure Proof',
                'Final Returns',
                'Tax Clearance'
            ]),
            'process' => json_encode([
                'Application Filing',
                'Document Verification',
                'Final Return Filing',
                'Cancellation Approval'
            ]),
            'benefits' => json_encode([
                'Legal closure',
                'No future liabilities',
                'Clean business records',
                'Compliance completion'
            ]),
            'price' => 799.00,
            'duration' => '15-30 days',
            'category' => 'GST',
            'subcategory' => 'Cancellation',
            'sort_order' => 3
        ]);

        // FSSAI Services
        Service::create([
            'name' => 'FSSAI Registration',
            'slug' => 'fssai-registration',
            'description' => 'Complete FSSAI registration services for food businesses. Ensure food safety compliance.',
            'features' => json_encode([
                'Quick registration',
                'Document verification',
                'License generation',
                'Compliance guidance',
                'Renewal reminders',
                'Expert support'
            ]),
            'requirements' => json_encode([
                'PAN Card',
                'Aadhaar Card',
                'Business Proof',
                'Food Safety Plan',
                'Premises Details'
            ]),
            'process' => json_encode([
                'Document Collection',
                'Application Filing',
                'Inspection (if required)',
                'License Generation'
            ]),
            'benefits' => json_encode([
                'Legal compliance',
                'Food safety assurance',
                'Business credibility',
                'Customer trust',
                'Government recognition'
            ]),
            'price' => 1999.00,
            'duration' => '15-30 days',
            'category' => 'FSSAI',
            'subcategory' => 'Registration',
            'sort_order' => 1
        ]);

        // Trademark Services
        Service::create([
            'name' => 'Trademark Registration',
            'slug' => 'trademark-registration',
            'description' => 'Comprehensive trademark registration services to protect your brand identity.',
            'features' => json_encode([
                'Trademark search',
                'Application filing',
                'Document preparation',
                'Status monitoring',
                'Renewal services',
                'Legal protection'
            ]),
            'requirements' => json_encode([
                'Trademark Logo/Name',
                'Business Proof',
                'User Affidavit',
                'Power of Attorney'
            ]),
            'process' => json_encode([
                'Trademark Search',
                'Application Filing',
                'Examination',
                'Publication',
                'Registration'
            ]),
            'benefits' => json_encode([
                'Brand protection',
                'Legal rights',
                'Market exclusivity',
                'Asset value',
                'Infringement protection'
            ]),
            'price' => 6999.00,
            'duration' => '18-24 months',
            'category' => 'Trademark',
            'subcategory' => 'Registration',
            'sort_order' => 1
        ]);

        // Company Registration Services
        Service::create([
            'name' => 'Private Limited Company',
            'slug' => 'private-limited-company',
            'description' => 'Complete private limited company registration services with expert guidance.',
            'features' => json_encode([
                'Name approval',
                'DSC and DIN',
                'MOA and AOA',
                'Company registration',
                'Bank account opening',
                'Compliance support'
            ]),
            'requirements' => json_encode([
                'Director PAN & Aadhaar',
                'Address Proof',
                'Business Plan',
                'Capital Details'
            ]),
            'process' => json_encode([
                'Name Approval',
                'DSC & DIN',
                'Document Preparation',
                'Registration Filing',
                'Certificate Generation'
            ]),
            'benefits' => json_encode([
                'Limited liability',
                'Separate legal entity',
                'Easy funding',
                'Professional image',
                'Tax benefits'
            ]),
            'price' => 8999.00,
            'duration' => '15-20 days',
            'category' => 'Company',
            'subcategory' => 'Private Limited',
            'sort_order' => 1
        ]);

        // Tax Services
        Service::create([
            'name' => 'Income Tax E-Filing',
            'slug' => 'income-tax-e-filing',
            'description' => 'Professional income tax e-filing services for individuals and businesses.',
            'features' => json_encode([
                'Return preparation',
                'E-filing submission',
                'Document verification',
                'Refund tracking',
                'Compliance monitoring',
                'Expert consultation'
            ]),
            'requirements' => json_encode([
                'PAN Card',
                'Aadhaar Card',
                'Income Documents',
                'Investment Proofs',
                'Bank Statements'
            ]),
            'process' => json_encode([
                'Document Collection',
                'Return Preparation',
                'Verification',
                'E-filing Submission',
                'Acknowledgement'
            ]),
            'benefits' => json_encode([
                'Timely compliance',
                'Avoid penalties',
                'Quick refunds',
                'Legal protection',
                'Peace of mind'
            ]),
            'price' => 1499.00,
            'duration' => '7-10 days',
            'category' => 'Tax',
            'subcategory' => 'E-Filing',
            'sort_order' => 1
        ]);
    }
} 