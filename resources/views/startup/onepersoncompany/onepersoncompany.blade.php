@extends('layouts.main')
@section('title', 'one-person-company- FilingsBaba')
@section('content')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1>One Person Company (OPC) Registration in India</h1>
                    <p class="lead mb-4">Start your OPC with filingsbaba. Get DSC, DIN, name approval, incorporation certificate & more with expert assistance.</p>
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
                                <small>4.9/5 (1,526 Reviews)</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-users me-2"></i>
                            <span>1200+ OPCs Registered</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-image">
                    <img src="https://www.pngkey.com/png/full/231-2318296_business-women-png-happy-business-woman-png.png">
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
                    <h2 class="section-title">What is a One Person Company (OPC)?</h2>
                    <p class="mb-4">A One Person Company (OPC) is a type of company that can be formed with only one person as its member. It combines the benefits of sole proprietorship and company form of business.</p>
                    
                    <div class="mb-4">
                        <h5>Key Features of OPC:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Single person can incorporate the company</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Limited liability protection</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Separate legal entity</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Perpetual succession</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> More credible than proprietorship</li>
                        </ul>
                    </div>
                    
                    <a href="#contact" class="btn btn-if-outline">Talk to Our Expert</a>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="row g-4">
                        <?php
                        $features = [
                            [
                                'icon' => 'fas fa-user-tie',
                                'title' => 'Single Promoter',
                                'desc' => 'Can be formed with just one director and shareholder'
                            ],
                            [
                                'icon' => 'fas fa-shield-alt',
                                'title' => 'Limited Liability',
                                'desc' => 'Personal assets protected from business liabilities'
                            ],
                            [
                                'icon' => 'fas fa-bolt',
                                'title' => 'Quick Registration',
                                'desc' => 'Complete registration in 10-12 working days'
                            ],
                            [
                                'icon' => 'fas fa-rupee-sign',
                                'title' => 'Affordable',
                                'desc' => 'Lower compliance cost than private limited company'
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

    <!-- Benefits Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title center text-center">Benefits of One Person Company</h2>
            <p class="text-center mb-5">Why choose OPC for your business?</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h5>Limited Liability</h5>
                        <p>Personal assets are protected as OPC is a separate legal entity.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <h5>Sole Ownership</h5>
                        <p>Complete control over business with single ownership.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <h5>Funding Options</h5>
                        <p>Easier to raise funds than proprietorship through equity.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5>Business Growth</h5>
                        <p>Can be converted to private limited company when business grows.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <h5>Bank Facilities</h5>
                        <p>Easier to get business loans and bank facilities.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h5>Credibility</h5>
                        <p>Higher credibility among customers and vendors than proprietorship.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title center text-center">OPC Registration Process</h2>
            <p class="text-center mb-5">Simple 4-step process to register your OPC</p>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="process-step">
                        <div class="process-step-number">1</div>
                        <h4>Document Collection</h4>
                        <p>Submit PAN, Aadhaar, address proof, photos and other required documents.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="process-step-number">2</div>
                        <h4>DSC & DIN</h4>
                        <p>We obtain Digital Signature Certificate (DSC) and Director Identification Number (DIN).</p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="process-step">
                        <div class="process-step-number">3</div>
                        <h4>Name Approval</h4>
                        <p>Apply for name reservation with MCA through RUN service.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="process-step-number">4</div>
                        <h4>Incorporation</h4>
                        <p>File SPICe+ form with ROC for company incorporation and get certificate.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#contact" class="btn btn-if-primary btn-lg">Start My Registration</a>
            </div>
        </div>
    </section>

    <!-- Documents Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">Documents Required</h2>
                    <p class="mb-4">List of documents needed for OPC registration</p>
                    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">For Director/Shareholder:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> PAN Card (Copy)</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Aadhaar Card (Copy)</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Passport Size Photo</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Address Proof (Electricity Bill/Rent Agreement)</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Bank Statement (Latest 2 months)</li>
                            </ul>
                            
                            <h5 class="mb-3 mt-4">For Registered Office:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Electricity Bill (Not older than 2 months)</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> NOC from Owner (If rented)</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Sale Deed/Property Deed (If owned)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <h2 class="section-title">OPC Compliance Requirements</h2>
                    <p class="mb-4">Annual compliance requirements after registration</p>
                    
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Annual Return (Form MGT-7):</strong> Filed within 60 days of AGM</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Financial Statements (Form AOC-4):</strong> Filed within 30 days of AGM</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Income Tax Return:</strong> Filed by 30th September each year</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>GST Returns:</strong> Monthly/Quarterly based on turnover</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Board Meetings:</strong> Minimum 2 meetings per year</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Annual General Meeting:</strong> Conducted once every year</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Audit:</strong> Mandatory if turnover exceeds ₹2 crore</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-5" id="pricing">
        <div class="container">
            <h2 class="section-title center text-center">OPC Registration Packages</h2>
            <p class="text-center mb-5">Choose the package that fits your requirements</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="pricing-card h-100">
                        <div class="pricing-header">
                            <h4 class="mb-0">Basic</h4>
                        </div>
                        <div class="pricing-body text-center p-4">
                            <div class="pricing-price">₹7,999</div>
                            <small class="text-muted">+ Govt. Fees</small>
                            <div class="pricing-features">
                                <ul>
                                    <li><i class="fas fa-check text-success me-2"></i> DSC (1 Director)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> DIN (1 Director)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Name Approval</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Incorporation Certificate</li>
                                    <li><i class="fas fa-times text-muted me-2"></i> GST Registration</li>
                                    <li><i class="fas fa-times text-muted me-2"></i> MSME Registration</li>
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
                            <div class="pricing-price">₹11,999</div>
                            <small class="text-muted">+ Govt. Fees</small>
                            <div class="pricing-features">
                                <ul>
                                    <li><i class="fas fa-check text-success me-2"></i> DSC (1 Director)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> DIN (1 Director)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Name Approval</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Incorporation Certificate</li>
                                    <li><i class="fas fa-check text-success me-2"></i> GST Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> MSME Registration</li>
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
                            <div class="pricing-price">₹15,999</div>
                            <small class="text-muted">+ Govt. Fees</small>
                            <div class="pricing-features">
                                <ul>
                                    <li><i class="fas fa-check text-success me-2"></i> DSC (1 Director)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> DIN (1 Director)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Name Approval</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Incorporation Certificate</li>
                                    <li><i class="fas fa-check text-success me-2"></i> GST Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> MSME Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Trademark Application (1 Class)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> GST Returns (3 months)</li>
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
            <p class="text-center mb-5">Trusted by 6,800+ business owners across India</p>
            
            <div class="row g-4">
                <?php
                $testimonials = [
                    [
                        'name' => 'Rajiv Mehta',
                        'business' => 'IT Consultant, Bangalore',
                        'rating' => 5,
                        'comment' => 'filingsbaba made my OPC registration seamless. The entire process was completed in 12 days with no follow-ups needed from my side. Highly recommended for solo entrepreneurs!'
                    ],
                    [
                        'name' => 'Priya Sharma',
                        'business' => 'Fashion Designer, Delhi',
                        'rating' => 5,
                        'comment' => 'Excellent service! As a solo entrepreneur, I wanted limited liability protection without the complexity of private limited. The team explained everything clearly and got all registrations done quickly.'
                    ],
                    [
                        'name' => 'Vikram Patel',
                        'business' => 'E-commerce, Mumbai',
                        'rating' => 4,
                        'comment' => 'Good experience overall. The CA assigned to me was knowledgeable and responsive. The OPC registration was completed within promised timeline and I got all documents digitally.'
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
                                <img src="assets/images/user-placeholder.jpg" alt="<?php echo $testimonial['name']; ?>" width="50" height="50" class="rounded-circle">
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
            <p class="text-center mb-5">Find answers to common questions about OPC registration</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php
                    $faqs = [
                        [
                            'question' => 'What is a One Person Company (OPC)?',
                            'answer' => 'A One Person Company (OPC) is a type of company that can be formed with only one person as its member. It was introduced through the Companies Act, 2013 to enable entrepreneurs to carry out business with limited liability protection as a sole proprietor.'
                        ],
                        [
                            'question' => 'Who can form an OPC?',
                            'answer' => 'Any Indian citizen resident in India can form an OPC. The person must be at least 18 years old and can be both the director and shareholder of the company. NRIs and foreign nationals cannot form an OPC.'
                        ],
                        [
                            'question' => 'What is the minimum capital required for OPC?',
                            'answer' => 'There is no minimum capital requirement for OPC registration. You can start an OPC with any amount of capital as deemed suitable for your business operations.'
                        ],
                        [
                            'question' => 'Can OPC have more than one director?',
                            'answer' => 'Yes, an OPC can have maximum 15 directors but only one shareholder. The sole shareholder must nominate another person as nominee director who will take over in case of death/incapacity of the original member.'
                        ],
                        [
                            'question' => 'What are the compliance requirements for OPC?',
                            'answer' => 'Key compliances include:<br>
                            - Filing annual return (Form MGT-7)<br>
                            - Filing financial statements (Form AOC-4)<br>
                            - Conducting at least 2 board meetings per year<br>
                            - Filing income tax returns<br>
                            - Maintaining proper books of accounts'
                        ],
                        [
                            'question' => 'Can OPC be converted to private limited company?',
                            'answer' => 'Yes, an OPC can be converted to private limited company when its paid-up share capital exceeds ₹50 lakh or turnover exceeds ₹2 crore. The conversion process is simple and filingsbaba can assist with the complete procedure.'
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
            <h2 class="display-5 fw-bold mb-4">Start Your One Person Company Today</h2>
            <p class="lead mb-5">Get expert assistance for OPC registration and all compliance needs</p>
            
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg">
                        <div class="card-body p-4">
                            <form action="process_contact.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="city" placeholder="City" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="3" placeholder="Tell us about your business"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-if-primary w-100">Get Free Consultation</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
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
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

@endsection