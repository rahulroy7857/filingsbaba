@extends('layouts.main')
@section('title', 'partnership- FilingsBaba')
@section('content')
<?php
$services = [
    ["Private Limited Company", "Popular choice for startups", "₹8,999"],
    ["Limited Liability Partnership", "Flexible business structure", "₹7,999"],
    ["One Person Company", "Single founder companies", "₹6,999"],
    ["Proprietorship Company", "For non-profit organizations", "₹9,999"]
];
$features = [
    ["Expert Assistance", "Our experts handle all paperwork"],
    ["Fast Processing", "Quick company registration"],
    ["Transparent Pricing", "No hidden charges"],
    ["Post Registration Support", "Compliance and tax filing help"]
];
$testimonials = [
    ["Rahul Sharma", "Got my Pvt Ltd company registered in just 7 days!"],
    ["Priya Patel", "Excellent service and support throughout the process."],
    ["Amit Joshi", "Highly recommend for hassle-free company registration."]
];
?>
  <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Start Your Business Journey Today</h1>
            <p class="lead mb-5">Register your company in India quickly and hassle-free with our expert assistance</p>
            <div class="row g-4 justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                        <img src="https://www.johnmarshallbank.com/wp-content/uploads/2019/12/business-meeting-med.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Company Registration Services</h2>
                <p class="text-muted">Choose the right business structure for your needs</p>
            </div>
            <div class="row g-4">
                <?php foreach($services as $service): ?>
                <div class="col-md-3">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <i class="fas fa-building fa-3x" style="color: var(--accent-color);"></i>
                            </div>
                            <h5 class="card-title"><?php echo htmlspecialchars($service[0]); ?></h5>
                            <p class="card-text text-muted"><?php echo htmlspecialchars($service[1]); ?></p>
                            <h4 class="text-primary"><?php echo htmlspecialchars($service[2]); ?></h4>
                            <a href="#contact" class="btn btn-outline-primary mt-2">Register Now</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Why Choose Us?</h2>
                <p class="text-muted">We make company registration simple and stress-free</p>
            </div>
            <div class="row g-4">
                <?php foreach($features as $index => $feature): ?>
                <div class="col-md-3">
                    <div class="text-center p-3">
                        <div class="feature-icon">
                            <i class="fas fa-<?php 
                                echo $index == 0 ? 'user-tie' : 
                                    ($index == 1 ? 'bolt' : 
                                        ($index == 2 ? 'rupee-sign' : 'headset')); 
                            ?>"></i>
                        </div>
                        <h5><?php echo htmlspecialchars($feature[0]); ?></h5>
                        <p class="text-muted"><?php echo htmlspecialchars($feature[1]); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Simple 4-Step Registration Process</h2>
                <p class="text-muted">Get your company registered quickly and efficiently</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="text-center p-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <h3 class="mb-0">1</h3>
                        </div>
                        <h5 class="mt-3">Submit Documents</h5>
                        <p class="text-muted">Provide basic details and documents</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <h3 class="mb-0">2</h3>
                        </div>
                        <h5 class="mt-3">Application Filing</h5>
                        <p class="text-muted">We file all required applications</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <h3 class="mb-0">3</h3>
                        </div>
                        <h5 class="mt-3">Government Approval</h5>
                        <p class="text-muted">Receive approval from MCA</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <h3 class="mb-0">4</h3>
                        </div>
                        <h5 class="mt-3">Company Incorporation</h5>
                        <p class="text-muted">Get your certificate of incorporation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">What Our Clients Say</h2>
                <p class="text-muted">Trusted by thousands of entrepreneurs</p>
            </div>
            <div class="row g-4">
                <?php foreach($testimonials as $testimonial): ?>
                <div class="col-md-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <?php echo substr(htmlspecialchars($testimonial[0]), 0, 1); ?>
                            </div>
                            <h5 class="ms-3 mb-0"><?php echo htmlspecialchars($testimonial[0]); ?></h5>
                        </div>
                        <p class="mb-0">"<?php echo htmlspecialchars($testimonial[1]); ?>"</p>
                        <div class="mt-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="fw-bold mb-3">Ready to Register Your Company?</h2>
                    <p class="mb-0">Get in touch with our experts for a free consultation</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="tel:+919876543210" class="btn btn-light btn-lg me-2">
                        <i class="fas fa-phone me-2"></i>Call Us
                    </a>
                    <a href="#contact-form" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-envelope me-2"></i>Email Us
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection