@extends('layouts.main')

@section('title', 'GST Services - FilingsBaba')

@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url('{{ asset('main/images/background/page-title.jpg') }}');">
    <div class="container">
        <div class="content-box">
            <h1>GST Services</h1>
            <ul class="bread-crumb">
                <li><a href="{{ route('Home') }}">Home</a></li>
                <li>GST Services</li>
            </ul>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <h2>Comprehensive GST Services</h2>
                    <p>Expert assistance for all your GST registration, filing, and compliance needs</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="lnr lnr-file-add"></i>
                        </div>
                        <h3><a href="{{ route('gst.registration') }}">GST Registration</a></h3>
                        <p>Complete GST registration services for businesses of all sizes. Get your GST number quickly and efficiently.</p>
                        <div class="text">
                            <ul>
                                <li>Quick online registration</li>
                                <li>Document verification</li>
                                <li>GST number generation</li>
                                <li>Post-registration support</li>
                            </ul>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('gst.registration') }}" class="theme-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="lnr lnr-calendar-full"></i>
                        </div>
                        <h3><a href="{{ route('gst.filing') }}">GST Filing</a></h3>
                        <p>Timely and accurate GST return filing services. Ensure compliance and avoid penalties.</p>
                        <div class="text">
                            <ul>
                                <li>Monthly/Quarterly returns</li>
                                <li>GSTR-1, GSTR-3B filing</li>
                                <li>Reconciliation services</li>
                                <li>Penalty avoidance</li>
                            </ul>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('gst.filing') }}" class="theme-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="lnr lnr-cross-circle"></i>
                        </div>
                        <h3><a href="{{ route('gst.cancellation') }}">GST Cancellation</a></h3>
                        <p>Professional assistance for GST registration cancellation when your business closes or changes.</p>
                        <div class="text">
                            <ul>
                                <li>Proper documentation</li>
                                <li>Final return filing</li>
                                <li>Tax clearance</li>
                                <li>Legal compliance</li>
                            </ul>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('gst.cancellation') }}" class="theme-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="lnr lnr-sync"></i>
                        </div>
                        <h3><a href="{{ route('gst.renewal') }}">GST Renewal</a></h3>
                        <p>Seamless GST registration renewal services to maintain your business compliance.</p>
                        <div class="text">
                            <ul>
                                <li>Timely renewal</li>
                                <li>Document updates</li>
                                <li>Status verification</li>
                                <li>Continuous compliance</li>
                            </ul>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('gst.renewal') }}" class="theme-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-block">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="lnr lnr-pencil"></i>
                        </div>
                        <h3><a href="{{ route('gst.amendment') }}">GST Amendment</a></h3>
                        <p>Update your GST registration details with our amendment services.</p>
                        <div class="text">
                            <ul>
                                <li>Business details update</li>
                                <li>Address changes</li>
                                <li>Partner modifications</li>
                                <li>Quick processing</li>
                            </ul>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('gst.amendment') }}" class="theme-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us-section" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <h2>Why Choose Our GST Services?</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="feature-block text-center">
                    <div class="icon-box">
                        <i class="lnr lnr-clock"></i>
                    </div>
                    <h4>Quick Processing</h4>
                    <p>Fast and efficient processing of all GST-related applications</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="feature-block text-center">
                    <div class="icon-box">
                        <i class="lnr lnr-users"></i>
                    </div>
                    <h4>Expert Team</h4>
                    <p>Experienced professionals with deep knowledge of GST regulations</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="feature-block text-center">
                    <div class="icon-box">
                        <i class="lnr lnr-phone"></i>
                    </div>
                    <h4>24/7 Support</h4>
                    <p>Round-the-clock customer support for all your queries</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="feature-block text-center">
                    <div class="icon-box">
                        <i class="lnr lnr-shield"></i>
                    </div>
                    <h4>100% Compliance</h4>
                    <p>Ensure complete compliance with all GST regulations and requirements</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="background-image: url('{{ asset('main/images/background/cta-bg.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content text-center">
                    <h2>Ready to Get Started with GST Services?</h2>
                    <p>Contact us today for expert assistance with all your GST requirements</p>
                    <div class="btn-box">
                        <a href="{{ route('contact') }}" class="theme-btn">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 