@extends('layouts.main')

@section('title', $service->name ?? 'Service - FilingsBaba')

@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url('{{ asset('main/images/background/page-title.jpg') }}');">
    <div class="container">
        <div class="content-box">
            <h1>{{ $service->name ?? 'Service' }}</h1>
            <ul class="bread-crumb">
                <li><a href="{{ route('Home') }}">Home</a></li>
                <li><a href="{{ route($category.'.index') }}">{{ ucfirst($category) }} Services</a></li>
                <li>{{ $service->name ?? 'Service' }}</li>
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
                        <img src="{{ asset('main/images/services/'.$service->slug.'.jpg') }}" alt="{{ $service->name }}">
                    </div>
                    
                    <div class="content-box">
                        <h2>{{ $service->name }}</h2>
                        <p>{{ $service->description }}</p>
                        
                        @if($service->features_array)
                        <div class="features-box">
                            <h3>What We Offer</h3>
                            <ul>
                                @foreach($service->features_array as $feature)
                                    <li><i class="lnr lnr-checkmark-circle"></i> {{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        @if($service->process_array)
                        <div class="process-box">
                            <h3>Process</h3>
                            <div class="row">
                                @foreach($service->process_array as $index => $step)
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="process-step">
                                        <div class="step-number">{{ $index + 1 }}</div>
                                        <h4>{{ $step }}</h4>
                                        <p>Professional handling of {{ strtolower($step) }} with expert guidance.</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        
                        @if($service->requirements_array)
                        <div class="requirements-box">
                            <h3>Required Documents</h3>
                            <ul>
                                @foreach($service->requirements_array as $requirement)
                                    <li>{{ $requirement }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        @if($service->benefits_array)
                        <div class="benefits-box">
                            <h3>Benefits</h3>
                            <ul>
                                @foreach($service->benefits_array as $benefit)
                                    <li><i class="lnr lnr-arrow-right"></i> {{ $benefit }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="sidebar">
                    <div class="service-widget">
                        <h3>Our Services</h3>
                        <ul>
                            @foreach($relatedServices as $relatedService)
                                <li><a href="{{ route($category.'.'.$relatedService->slug) }}">{{ $relatedService->name }}</a></li>
                            @endforeach
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
                                    <p>+91 98765 43210</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="lnr lnr-envelope"></i>
                                <div>
                                    <h5>Email Us</h5>
                                    <p>info@filingsbaba.com</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="theme-btn">Contact Now</a>
                    </div>
                    
                    @if($service->price)
                    <div class="pricing-widget">
                        <h3>Service Details</h3>
                        <div class="price-info">
                            <div class="price">₹{{ number_format($service->price) }}</div>
                            <div class="duration">{{ $service->duration }}</div>
                        </div>
                        <a href="{{ route('contact') }}" class="theme-btn">Get Started</a>
                    </div>
                    @endif
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
                            <div class="price">₹{{ number_format($service->price * 0.7) }}</div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Basic {{ $service->name }}</li>
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
                            <div class="price">₹{{ number_format($service->price) }}</div>
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
                            <div class="price">₹{{ number_format($service->price * 1.5) }}</div>
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