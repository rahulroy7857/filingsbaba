@extends('layouts.main')

@section('title', 'Company Compliance - FilingsBaba')

@section('styles')
    <style>
        /* Service Details Section Styles */
        .service-details-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .service-details-content {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .image-box {
            position: relative;
            overflow: hidden;
        }

        .image-box img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .image-box:hover img {
            transform: scale(1.05);
        }

        .content-box {
            padding: 40px;
        }

        .content-box h2 {
            color: #333;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
        }

        .content-box h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(45deg, #007bff, #00d4ff);
        }

        .content-box p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        /* Features Box */
        .features-box {
            margin-bottom: 40px;
        }

        .features-box h3 {
            color: #333;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .features-box ul {
            list-style: none;
            padding: 0;
        }

        .features-box ul li {
            padding: 10px 0;
            color: #555;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .features-box ul li i {
            color: #28a745;
            margin-right: 15px;
            font-size: 18px;
        }

        /* Process Box */
        .process-box {
            margin-bottom: 40px;
        }

        .process-box h3 {
            color: #333;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .process-step {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .process-step:hover {
            transform: translateY(-5px);
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #007bff, #00d4ff);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 700;
            margin: 0 auto 15px;
        }

        .process-step h4 {
            color: #333;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .process-step p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        /* Requirements Box */
        .requirements-box {
            margin-bottom: 40px;
        }

        .requirements-box h3 {
            color: #333;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .requirements-box ul {
            list-style: none;
            padding: 0;
        }

        .requirements-box ul li {
            padding: 8px 0;
            color: #555;
            font-size: 16px;
            position: relative;
            padding-left: 25px;
        }

        .requirements-box ul li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }

        /* Benefits Box */
        .benefits-box {
            margin-bottom: 40px;
        }

        .benefits-box h3 {
            color: #333;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .benefits-box ul {
            list-style: none;
            padding: 0;
        }

        .benefits-box ul li {
            padding: 10px 0;
            color: #555;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .benefits-box ul li i {
            color: #007bff;
            margin-right: 15px;
            font-size: 16px;
        }

        /* Sidebar Styles */
        .sidebar {
            position: sticky;
            top: 20px;
        }

        .service-widget,
        .contact-widget,
        .pricing-widget {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .service-widget h3,
        .contact-widget h3,
        .pricing-widget h3 {
            color: #333;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        }

        .service-widget ul {
            list-style: none;
            padding: 0;
        }

        .service-widget ul li {
            margin-bottom: 10px;
        }

        .service-widget ul li a {
            color: #555;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
            display: block;
            padding: 8px 0;
        }

        .service-widget ul li a:hover {
            color: #007bff;
            padding-left: 10px;
        }

        /* Contact Widget */
        .contact-info {
            margin-bottom: 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-item i {
            color: #007bff;
            font-size: 20px;
            margin-right: 15px;
            width: 20px;
        }

        .contact-item h5 {
            color: #333;
            font-size: 14px;
            font-weight: 600;
            margin: 0 0 5px 0;
        }

        .contact-item p {
            color: #666;
            font-size: 14px;
            margin: 0;
        }

        /* Pricing Widget */
        .price-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .price {
            font-size: 32px;
            font-weight: 700;
            color: #007bff;
            margin-bottom: 5px;
        }

        .duration {
            color: #666;
            font-size: 14px;
        }

        /* Theme Button */
        .theme-btn {
            display: inline-block;
            background: linear-gradient(45deg, #007bff, #00d4ff);
            color: #fff;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
            width: 100%;
        }

        .theme-btn:hover {
            background: linear-gradient(45deg, #0056b3, #0099cc);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }

        /* Pricing Section */
        .pricing-section {
            padding: 80px 0;
        }

        .sec-title {
            margin-bottom: 50px;
        }

        .sec-title h2 {
            color: #333;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .sec-title p {
            color: #666;
            font-size: 18px;
        }

        .pricing-block {
            margin-bottom: 30px;
        }

        .pricing-block .inner-box {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .pricing-block .inner-box:hover {
            transform: translateY(-10px);
        }

        .pricing-block.featured .inner-box {
            border: 3px solid #007bff;
            transform: scale(1.05);
        }

        .pricing-block .header {
            background: linear-gradient(45deg, #007bff, #00d4ff);
            color: #fff;
            padding: 30px;
            text-align: center;
        }

        .pricing-block .header h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .pricing-block .header .price {
            font-size: 36px;
            font-weight: 700;
            color: #fff;
        }

        .pricing-block .content {
            padding: 30px;
        }

        .pricing-block .content ul {
            list-style: none;
            padding: 0;
        }

        .pricing-block .content ul li {
            padding: 8px 0;
            color: #555;
            font-size: 16px;
            position: relative;
            padding-left: 25px;
        }

        .pricing-block .content ul li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }

        .pricing-block .footer {
            padding: 0 30px 30px;
        }

        /* Page Title */
        .page-title {
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            padding: 120px 0 80px;
            color: #fff;
        }

        .page-title:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .page-title .content-box {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .page-title h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .bread-crumb {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .bread-crumb li {
            color: #fff;
            font-size: 16px;
        }

        .bread-crumb li:not(:last-child):after {
            content: '>';
            margin: 0 10px;
            color: #fff;
        }

        .bread-crumb li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .bread-crumb li a:hover {
            color: #007bff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content-box {
                padding: 20px;
            }

            .page-title h1 {
                font-size: 32px;
            }

            .process-step {
                margin-bottom: 15px;
            }

            .sidebar {
                position: static;
                margin-top: 30px;
            }

            .pricing-block.featured .inner-box {
                transform: none;
            }
        }

        @media (max-width: 576px) {
            .service-details-section {
                padding: 40px 0;
            }

            .page-title {
                padding: 80px 0 60px;
            }

            .page-title h1 {
                font-size: 28px;
            }

            .content-box h2 {
                font-size: 24px;
            }

            .sec-title h2 {
                font-size: 28px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('main/images/background/page-title.jpg') }}');">
        <div class="container">
            <div class="content-box">
                <h1>Company Compliance</h1>
                <ul class="bread-crumb">
                    <li><a href="{{ route('Home') }}">Home</a></li>
                    <li><a href="{{ route('compliance.index') }}">Compliance Services</a></li>
                    <li>Company Compliance</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Service Details Section -->
    <section class="service-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="service-details-content">
                        <div class="image-box">
                            <img src="{{ asset('main/images/services/company-compliance.jpg') }}" alt="Company Compliance">
                        </div>

                        <div class="content-box">
                            <h2>Company Compliance</h2>
                            <p>Ensure your company meets all statutory compliance requirements with our comprehensive
                                compliance services. We help businesses maintain regulatory standards and avoid penalties
                                through timely filings and proper documentation.</p>

                            <div class="features-box">
                                <h3>What We Offer</h3>
                                <ul>
                                    <li><i class="lnr lnr-checkmark-circle"></i> Annual Compliance Filing</li>
                                    <li><i class="lnr lnr-checkmark-circle"></i> Board Meeting Compliance</li>
                                    <li><i class="lnr lnr-checkmark-circle"></i> Statutory Audit Compliance</li>
                                    <li><i class="lnr lnr-checkmark-circle"></i> ROC Filing Compliance</li>
                                    <li><i class="lnr lnr-checkmark-circle"></i> Tax Compliance Management</li>
                                    <li><i class="lnr lnr-checkmark-circle"></i> Corporate Governance Compliance</li>
                                </ul>
                            </div>

                            <div class="process-box">
                                <h3>Process</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="process-step">
                                            <div class="step-number">1</div>
                                            <h4>Compliance Assessment</h4>
                                            <p>Professional handling of compliance assessment with expert guidance.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="process-step">
                                            <div class="step-number">2</div>
                                            <h4>Document Preparation</h4>
                                            <p>Professional handling of document preparation with expert guidance.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="process-step">
                                            <div class="step-number">3</div>
                                            <h4>Filing Submission</h4>
                                            <p>Professional handling of filing submission with expert guidance.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="process-step">
                                            <div class="step-number">4</div>
                                            <h4>Compliance Monitoring</h4>
                                            <p>Professional handling of compliance monitoring with expert guidance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="requirements-box">
                                <h3>Required Documents</h3>
                                <ul>
                                    <li>Company Registration Certificate</li>
                                    <li>Board Resolution</li>
                                    <li>Financial Statements</li>
                                    <li>Audit Reports</li>
                                    <li>Directors' Details</li>
                                    <li>Shareholding Pattern</li>
                                </ul>
                            </div>

                            <div class="benefits-box">
                                <h3>Benefits</h3>
                                <ul>
                                    <li><i class="lnr lnr-arrow-right"></i> Legal Compliance</li>
                                    <li><i class="lnr lnr-arrow-right"></i> Avoid Penalties</li>
                                    <li><i class="lnr lnr-arrow-right"></i> Business Continuity</li>
                                    <li><i class="lnr lnr-arrow-right"></i> Professional Support</li>
                                    <li><i class="lnr lnr-arrow-right"></i> Timely Filing</li>
                                </ul>
                            </div>

                            <div class="faq-section">
                                <h3>Frequently Asked Questions</h3>

                                <div class="faq-item">
                                    <div class="faq-question">What is Company Compliance?</div>
                                    <div class="faq-answer">
                                        Company compliance refers to adhering to all legal and regulatory requirements that
                                        apply to a company, including filing annual returns, maintaining statutory
                                        registers, and following corporate governance norms.
                                    </div>
                                </div>

                                <div class="faq-item">
                                    <div class="faq-question">What are the mandatory compliance requirements?</div>
                                    <div class="faq-answer">
                                        Mandatory requirements include filing annual returns, financial statements, board
                                        meetings, general meetings, and maintaining statutory registers as per Companies
                                        Act, 2013.
                                    </div>
                                </div>

                                <div class="faq-item">
                                    <div class="faq-question">What happens if compliance is not met?</div>
                                    <div class="faq-answer">
                                        Non-compliance can result in penalties, fines, disqualification of directors, and in
                                        severe cases, striking off of the company from the register.
                                    </div>
                                </div>

                                <div class="faq-item">
                                    <div class="faq-question">How often should board meetings be held?</div>
                                    <div class="faq-answer">
                                        A minimum of 4 board meetings should be held in a year, with not more than 120 days
                                        gap between two consecutive meetings.
                                    </div>
                                </div>

                                <div class="faq-item">
                                    <div class="faq-question">What is the deadline for filing annual returns?</div>
                                    <div class="faq-answer">
                                        Annual returns must be filed within 60 days from the date of annual general meeting,
                                        and financial statements within 30 days from the AGM.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="sidebar">
                        <div class="service-widget">
                            <h3>Our Compliance Services</h3>
                            <ul>
                                <li><a href="{{ route('compliance.company-compliance') }}">Company Compliance</a></li>
                                <li><a href="{{ route('compliance.llp-compliance') }}">LLP Compliance</a></li>
                                <li><a href="{{ route('compliance.opc-compliance') }}">OPC Compliance</a></li>
                                <li><a href="{{ route('compliance.name-change-company') }}">Name Change - Company</a></li>
                                <li><a href="{{ route('compliance.registered-office-change') }}">Registered Office
                                        Change</a></li>
                                <li><a href="{{ route('compliance.din-ekyc-filing') }}">DIN eKYC Filing</a></li>
                                <li><a href="{{ route('compliance.din-reactivation') }}">DIN Reactivation</a></li>
                                <li><a href="{{ route('compliance.director-change') }}">Director Change</a></li>
                                <li><a href="{{ route('compliance.remove-director') }}">Remove Director</a></li>
                                <li><a href="{{ route('compliance.adt1-filing') }}">ADT-1 Filing</a></li>
                                <li><a href="{{ route('compliance.dpt3-filing') }}">DPT-3 Filing</a></li>
                                <li><a href="{{ route('compliance.llp-form11-filing') }}">LLP Form 11 Filing</a></li>
                                <li><a href="{{ route('compliance.dormant-status-filing') }}">Dormant Status Filing</a>
                                </li>
                                <li><a href="{{ route('compliance.moa-amendment') }}">MOA Amendment</a></li>
                                <li><a href="{{ route('compliance.aoa-amendment') }}">AOA Amendment</a></li>
                                <li><a href="{{ route('compliance.authorized-capital-increase') }}">Authorized Capital
                                        Increase</a></li>
                                <li><a href="{{ route('compliance.share-transfer') }}">Share Transfer</a></li>
                                <li><a href="{{ route('compliance.demat-of-shares') }}">Demat of Shares</a></li>
                                <li><a href="{{ route('compliance.winding-up-llp') }}">Winding Up - LLP</a></li>
                                <li><a href="{{ route('compliance.winding-up-company') }}">Winding Up - Company</a></li>
                            </ul>
                        </div>

                        <div class="contact-widget">
                            <h3>Get Free Consultation</h3>
                            <p>Contact our experts for personalized assistance.</p>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="lnr lnr-phone"></i>
                                    <div>
                                        <h5>Call Us</h5>
                                        <p>+91 8825155352 , +91 7004670611</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="lnr lnr-envelope"></i>
                                    <div>
                                        <h5>Email Us</h5>
                                        <p>contact@filingsbaba.cloud</p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}" class="theme-btn">Contact Now</a>
                        </div>

                        <div class="pricing-widget">
                            <h3>Service Details</h3>
                            <div class="price-info">
                                <div class="price">₹15,000</div>
                                <div class="duration">Annual</div>
                            </div>
                            <a href="{{ route('contact') }}" class="theme-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center">
                        <h2>Pricing Plans</h2>
                        <p>Choose the plan that best suits your business needs</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-block">
                        <div class="inner-box">
                            <div class="header">
                                <h3>Basic</h3>
                                <div class="price">₹10,500</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Basic Company Compliance</li>
                                    <li>Document Verification</li>
                                    <li>Basic Support</li>
                                    <li>Standard Processing</li>
                                </ul>
                            </div>
                            <div class="footer">
                                <a href="{{ route('contact') }}" class="theme-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-block featured">
                        <div class="inner-box">
                            <div class="header">
                                <h3>Standard</h3>
                                <div class="price">₹15,000</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Everything in Basic</li>
                                    <li>Priority Processing</li>
                                    <li>Enhanced Support</li>
                                    <li>Compliance Monitoring</li>
                                    <li>Post-service Support</li>
                                </ul>
                            </div>
                            <div class="footer">
                                <a href="{{ route('contact') }}" class="theme-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-block">
                        <div class="inner-box">
                            <div class="header">
                                <h3>Premium</h3>
                                <div class="price">₹22,500</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Everything in Standard</li>
                                    <li>Express Processing</li>
                                    <li>Dedicated Account Manager</li>
                                    <li>24/7 Support</li>
                                    <li>Annual Compliance Support</li>
                                </ul>
                            </div>
                            <div class="footer">
                                <a href="{{ route('contact') }}" class="theme-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
