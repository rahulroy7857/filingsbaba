@extends('layouts.main')
@section('title', 'Proprietorship Services - FilingsBaba')
@section('content')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1>Proprietorship Registration in India</h1>
                    <p class="lead mb-4">Start your business legally with filingsbaba. Get GST, MSME registration,
                        current account and more with expert assistance.</p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#pricing" class="btn btn-light btn-lg">View Pricing</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">Talk to Expert</a>
                    </div>
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <div class="d-flex">
                                    <?php for($i=0; $i<5; $i++): ?>
                                    <i class="fas fa-star text-warning"></i>
                                    <?php endfor; ?>
                                </div>
                                <small>4.9/5 (2,458 Reviews)</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-users me-2"></i>
                            <span>2000+ Proprietorships Registered</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-image">
                    <div class="card shadow-lg">
                        <div class="card-body p-4">
                            <h3 class="mb-4">Start Your Proprietorship Today</h3>
                            <form action="process_lead.php" method="POST">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="city" placeholder="City" required>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" name="service">
                                        <option value="Basic Proprietorship">Basic Proprietorship</option>
                                        <option value="Proprietorship with GST">Proprietorship with GST</option>
                                        <option value="Complete Package">Complete Package</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-if-primary w-100">Get Started Now</button>
                            </form>
                            <div class="mt-3 text-center">
                                <small class="text-muted">By submitting, you agree to our <a href="#">Terms</a> and <a
                                        href="#">Privacy Policy</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Badges -->
    <section class="trust-badges">
        <div class="container">
            <div class="row align-items-center">
                <?php
                $trust_badges = [
                    'google-partner.png' => 'Google Partner',
                    'msme-registered.png' => 'MSME Registered',
                    'startup-india.png' => 'Startup India Recognized',
                    'iso-certified.png' => 'ISO Certified',
                ];
                
                foreach($trust_badges as $img => $alt): ?>
                <div class="col">
                    <div class="trust-badge-item">
                        <img src="assets/images/<?php echo $img; ?>" alt="<?php echo $alt; ?>">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">Why Choose filingsbaba for Proprietorship Registration?</h2>
                    <p class="mb-4">filingsbaba makes proprietorship registration simple, fast and affordable with
                        expert assistance at every step.</p>

                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i> 
                            <strong>2000+ Proprietorships Registered</strong> - Trusted by businesses across India
                        </li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>4.9/5 Customer
                                Rating</strong> - Highest rated business registration platform</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>7-10 Day
                                Process</strong> - Fastest proprietorship registration in India</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>Dedicated
                                CA</strong> - Expert assistance throughout the process</li>
                    </ul>

                    <a href="#contact" class="btn btn-if-outline mt-3">Talk to Our Expert</a>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="row g-4">
                        <?php
                        $features = [
                            [
                                'icon' => 'fas fa-bolt',
                                'title' => 'Quick Registration',
                                'desc' => 'Get your proprietorship registered in just 7-10 working days'
                            ],
                            [
                                'icon' => 'fas fa-rupee-sign',
                                'title' => 'Lowest Price',
                                'desc' => 'Starting at just ₹1,999 all-inclusive pricing'
                            ],
                            [
                                'icon' => 'fas fa-headset',
                                'title' => 'Expert Assistance',
                                'desc' => 'Dedicated CA will assist you throughout the process'
                            ],
                            [
                                'icon' => 'fas fa-file-alt',
                                'title' => 'Documentation',
                                'desc' => 'We help prepare all required documents and filings'
                            ]
                        ];
                        
                        foreach($features as $feature): ?>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="<?php echo $feature['icon']; ?>"></i>
                                </div>
                                <h5><?php echo $feature['title']; ?></h5>
                                <p class="mb-0"><?php echo $feature['desc']; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title center text-center">Simple 4-Step Proprietorship Registration Process</h2>
            <p class="text-center mb-5">We handle everything from documentation to registration</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="process-step">
                        <div class="process-step-number">1</div>
                        <h4>Document Collection</h4>
                        <p>Share basic documents like PAN, Aadhaar and address proof. Our expert will verify them and
                            prepare the application.</p>
                    </div>

                    <div class="process-step">
                        <div class="process-step-number">2</div>
                        <h4>Business Name Selection</h4>
                        <p>Choose a name for your proprietorship business (optional as registration is in owner's name).
                            We'll check availability.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="process-step">
                        <div class="process-step-number">3</div>
                        <h4>GST & MSME Registration</h4>
                        <p>We'll apply for GST registration (if required) and MSME certificate for your business to
                            avail government benefits.</p>
                    </div>

                    <div class="process-step">
                        <div class="process-step-number">4</div>
                        <h4>Current Account Opening</h4>
                        <p>Assistance in opening a current account with our partner banks for smooth business
                            transactions.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#contact" class="btn btn-if-primary btn-lg">Start My Registration</a>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-5" id="pricing">
        <div class="container">
            <h2 class="section-title center text-center">Proprietorship Registration Packages</h2>
            <p class="text-center mb-5">Choose the package that fits your business requirements</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="pricing-card h-100">
                        <div class="pricing-header">
                            <h4 class="mb-0">Basic</h4>
                        </div>
                        <div class="pricing-body text-center p-4">
                            <div class="pricing-price">₹1,999</div>
                            <small class="text-muted">+ Govt. Fees</small>
                            <div class="pricing-features">
                                <ul>
                                    <li><i class="fas fa-check text-success me-2"></i> Proprietorship Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> MSME Certificate</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Current Account Assistance</li>
                                    <li><i class="fas fa-times text-muted me-2"></i> GST Registration</li>
                                    <li><i class="fas fa-times text-muted me-2"></i> GST Return Filing</li>
                                </ul>
                            </div>
                            <a href="#contact" class="btn btn-if-outline w-100">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pricing-card h-100 pricing-popular">
                        <div class="pricing-header">
                            <h4 class="mb-0">Standard</h4>
                            <div class="popular-badge">MOST POPULAR</div>
                        </div>
                        <div class="pricing-body text-center p-4">
                            <div class="pricing-price">₹4,999</div>
                            <small class="text-muted">+ Govt. Fees</small>
                            <div class="pricing-features">
                                <ul>
                                    <li><i class="fas fa-check text-success me-2"></i> Proprietorship Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> MSME Certificate</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Current Account Assistance</li>
                                    <li><i class="fas fa-check text-success me-2"></i> GST Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> GST Return Filing (3 months)</li>
                                </ul>
                            </div>
                            <a href="#contact" class="btn btn-if-primary w-100">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pricing-card h-100">
                        <div class="pricing-header">
                            <h4 class="mb-0">Premium</h4>
                        </div>
                        <div class="pricing-body text-center p-4">
                            <div class="pricing-price">₹7,999</div>
                            <small class="text-muted">+ Govt. Fees</small>
                            <div class="pricing-features">
                                <ul>
                                    <li><i class="fas fa-check text-success me-2"></i> Proprietorship Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> MSME Certificate</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Current Account Assistance</li>
                                    <li><i class="fas fa-check text-success me-2"></i> GST Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> GST Return Filing (6 months)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Trademark Consultation</li>
                                </ul>
                            </div>
                            <a href="#contact" class="btn btn-if-outline w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <p>Not sure which package you need? <a href="#contact">Talk to our expert</a></p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title center text-center">What Our Customers Say</h2>
            <p class="text-center mb-5">Trusted by 2000+ business owners across India</p>

            <div class="row g-4">
                <?php
                $testimonials = [
                    [
                        'name' => 'Rohit Kumar',
                        'business' => 'Textile Trader, New Delhi',
                        'rating' => 5,
                        'comment' => 'filingsbaba made proprietorship registration so simple. Got my GST and current account opened within 10 days. The CA assigned to me was very knowledgeable and helpful. Highly recommended!'
                    ],
                    [
                        'name' => 'Priya Sharma',
                        'business' => 'Beauty Salon, Delhi',
                        'rating' => 5,
                        'comment' => 'Excellent service! The CA was very patient in explaining everything and helped me choose the right package for my salon business. The entire process was completed faster than I expected.'
                    ],
                    [
                        'name' => 'Vikram Patel',
                        'business' => 'IT Consultant, Bangalore',
                        'rating' => 4,
                        'comment' => 'Quick and professional service. Got all my documents processed without any hassle. The team was responsive to all my queries. Will use their services again for compliance filings.'
                    ]
                ];
                
                foreach($testimonials as $testimonial): ?>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <?php for($i=0; $i<$testimonial['rating']; $i++): ?>
                            <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="mb-4">"<?php echo $testimonial['comment']; ?>"</p>
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <img src="assets/images/user-placeholder.jpg" alt="<?php echo $testimonial['name']; ?>"
                                    width="50" height="50" class="rounded-circle">
                            </div>
                            <div>
                                <h6 class="mb-0"><?php echo $testimonial['name']; ?></h6>
                                <small class="text-muted"><?php echo $testimonial['business']; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title center text-center">Frequently Asked Questions</h2>
            <p class="text-center mb-5">Find answers to common questions about proprietorship registration</p>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php
                    $faqs = [
                        [
                            'question' => 'What is a proprietorship firm?',
                            'answer' => 'A proprietorship is the simplest business form with one owner who is personally liable for all business debts. It has no separate legal identity from its owner. The proprietor owns all assets and is responsible for all liabilities of the business.'
                        ],
                        [
                            'question' => 'Is registration mandatory for proprietorship?',
                            'answer' => 'No, proprietorship doesn\'t require mandatory registration under any specific law. However, getting GST registration (if turnover exceeds threshold), MSME registration, shop license or opening a current account requires certain documents that serve as proof of business existence.'
                        ],
                        [
                            'question' => 'What documents are required for proprietorship registration?',
                            'answer' => 'Basic documents include:<br>
                            - PAN card of proprietor<br>
                            - Aadhaar card<br>
                            - Address proof (electricity bill, rent agreement etc.)<br>
                            - Passport photos<br>
                            - Bank account details<br>
                            Additional documents may be needed for GST registration or current account opening.'
                        ],
                        [
                            'question' => 'How long does proprietorship registration take?',
                            'answer' => 'The filingsbaba standard process takes 7-10 working days to complete all formalities including GST registration (if applicable), MSME registration and current account opening assistance. The timeline may vary slightly depending on document submission and government processing times.'
                        ],
                        [
                            'question' => 'Can I convert my proprietorship to LLP or company later?',
                            'answer' => 'Yes, you can easily convert your proprietorship to LLP or private limited company when your business grows. The conversion process involves registering the new entity and transferring assets/liabilities. filingsbaba can assist with the complete conversion process including documentation and filings.'
                        ]
                    ];
                    
                    foreach($faqs as $index => $faq): ?>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(<?php echo $index; ?>)">
                            <?php echo $faq['question']; ?>
                        </div>
                        <div class="faq-answer" id="faqAnswer<?php echo $index; ?>">
                            <?php echo $faq['answer']; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="contact">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Start Your Proprietorship Business Today</h2>
            <p class="lead mb-5">Get expert assistance for proprietorship registration and all compliance needs</p>

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg">
                        <div class="card-body p-4">
                            <form action="process_contact.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Email Address" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" name="phone" placeholder="Phone Number"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="city" placeholder="City" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="3"
                                            placeholder="Tell us about your business"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-if-primary w-100">Get Free
                                            Consultation</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    // Toggle FAQ answers
    function toggleFaq(index) {
        const answer = document.getElementById('faqAnswer' + index);
        const question = answer.previousElementSibling;

        if (answer.classList.contains('show')) {
            answer.classList.remove('show');
            question.classList.remove('active');
        } else {
            // Close all other FAQs
            document.querySelectorAll('.faq-answer').forEach(el => el.classList.remove('show'));
            document.querySelectorAll('.faq-question').forEach(el => el.classList.remove('active'));

            // Open selected FAQ
            answer.classList.add('show');
            question.classList.add('active');
        }
    }

    // Form submission handling
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your form submission logic here (AJAX or other)
            alert('Thank you for your inquiry! Our expert will contact you shortly.');
            this.reset();
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    </script>
</body>

</html>

@endsection