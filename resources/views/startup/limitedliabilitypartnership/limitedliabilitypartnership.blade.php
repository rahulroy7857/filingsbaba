@extends('layouts.main')
@section('title', 'limited-liability-partnership')
@section('content')

   <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1>LLP Registration in India</h1>
                    <p class="lead mb-4">Register your Limited Liability Partnership (LLP) with filingsbaba. Get DIN, DSC, name approval, incorporation certificate & more with expert assistance.</p>
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
                                <small>4.9/5 (2,158 Reviews)</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-users me-2"></i>
                            <span>2200+ LLPs Registered</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-image">
                    <img src="https://www.pngplay.com/wp-content/uploads/15/Business-Woman-PNG-Clipart-Background.png">
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
                    <h2 class="section-title">What is a Limited Liability Partnership (LLP)?</h2>
                    <p class="mb-4">An LLP is a hybrid business structure that combines the benefits of a partnership firm and a company. It provides limited liability protection to its partners while allowing them to manage the business directly.</p>
                    
                    <div class="mb-4">
                        <h5>Key Features of LLP:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Limited liability protection for partners</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Separate legal entity</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Flexible management structure</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> No requirement of minimum capital</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Less compliance than private limited company</li>
                        </ul>
                    </div>
                    
                    <a href="#contact" class="btn btn-if-outline">Talk to Our Expert</a>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="row g-4">
                        <?php
                        $features = [
                            [
                                'icon' => 'fas fa-shield-alt',
                                'title' => 'Limited Liability',
                                'desc' => 'Personal assets protected from business liabilities'
                            ],
                            [
                                'icon' => 'fas fa-file-contract',
                                'title' => 'LLP Agreement',
                                'desc' => 'Customized agreement drafted as per your requirements'
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
            <h2 class="section-title center text-center">Benefits of LLP Registration</h2>
            <p class="text-center mb-5">Why choose LLP for your business?</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h5>Limited Liability</h5>
                        <p>Partners are not personally liable for debts of the LLP.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h5>Flexible Management</h5>
                        <p>Partners can directly manage the business unlike companies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-piggy-bank"></i>
                        </div>
                        <h5>Tax Benefits</h5>
                        <p>LLPs enjoy tax benefits compared to companies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h5>Less Compliance</h5>
                        <p>Fewer compliance requirements than private limited companies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <h5>Funding Options</h5>
                        <p>Easier to get business loans and bank facilities.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h5>Credibility</h5>
                        <p>Higher credibility among customers and vendors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title center text-center">LLP Registration Process</h2>
            <p class="text-center mb-5">Simple 4-step process to register your LLP</p>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="process-step">
                        <div class="process-step-number">1</div>
                        <h4>Document Collection</h4>
                        <p>Submit PAN, Aadhaar, address proof, photos and other required documents of all partners.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="process-step-number">2</div>
                        <h4>DSC & DIN</h4>
                        <p>We obtain Digital Signature Certificate (DSC) and Director Identification Number (DIN) for designated partners.</p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="process-step">
                        <div class="process-step-number">3</div>
                        <h4>Name Approval</h4>
                        <p>Apply for name reservation with MCA through RUN-LLP service.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="process-step-number">4</div>
                        <h4>Incorporation</h4>
                        <p>File FiLLiP form with ROC for LLP incorporation and get certificate.</p>
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
                    <p class="mb-4">List of documents needed for LLP registration</p>
                    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">For Partners:</h5>
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
                    <h2 class="section-title">LLP Compliance Requirements</h2>
                    <p class="mb-4">Annual compliance requirements after registration</p>
                    
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Annual Return (Form 11):</strong> Filed within 60 days of financial year end</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Statement of Accounts (Form 8):</strong> Filed within 30 days from end of 6 months of financial year</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Income Tax Return:</strong> Filed by 30th September each year</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>GST Returns:</strong> Monthly/Quarterly based on turnover</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Audit:</strong> Mandatory if turnover exceeds ₹40 lakhs or contribution exceeds ₹25 lakhs</li>
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
            <h2 class="section-title center text-center">LLP Registration Packages</h2>
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
                                    <li><i class="fas fa-check text-success me-2"></i> DSC (2 Partners)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> DIN (2 Partners)</li>
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
                                    <li><i class="fas fa-check text-success me-2"></i> DSC (2 Partners)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> DIN (2 Partners)</li>
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
                                    <li><i class="fas fa-check text-success me-2"></i> DSC (2 Partners)</li>
                                    <li><i class="fas fa-check text-success me-2"></i> DIN (2 Partners)</li>
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
            <p class="text-center mb-5">Trusted by 9,200+ business owners across India</p>
            
            <div class="row g-4">
                <?php
                $testimonials = [
                    [
                        'name' => 'Rahul & Priya Sharma',
                        'business' => 'Consulting Firm, Delhi',
                        'rating' => 5,
                        'comment' => 'filingsbaba made our LLP registration process smooth and hassle-free. The team was professional and completed everything within 10 days. Highly recommended!'
                    ],
                    [
                        'name' => 'Vikram Patel',
                        'business' => 'IT Services, Bangalore',
                        'rating' => 5,
                        'comment' => 'Excellent service! We were three partners starting our IT business. The CA explained everything clearly and got all registrations done quickly.'
                    ],
                    [
                        'name' => 'Neha Gupta',
                        'business' => 'Fashion Boutique, Mumbai',
                        'rating' => 4,
                        'comment' => 'Good experience overall. The team was responsive and completed all formalities within promised timeline. The LLP agreement was comprehensive.'
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
            <p class="text-center mb-5">Find answers to common questions about LLP registration</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php
                    $faqs = [
                        [
                            'question' => 'What is a Limited Liability Partnership (LLP)?',
                            'answer' => 'An LLP is a hybrid business structure that combines the benefits of a partnership firm and a company. It provides limited liability protection to its partners while allowing them to manage the business directly. It is governed by the Limited Liability Partnership Act, 2008.'
                        ],
                        [
                            'question' => 'How many partners are required to form an LLP?',
                            'answer' => 'Minimum 2 partners are required to form an LLP. There is no maximum limit on number of partners. At least one designated partner must be resident in India.'
                        ],
                        [
                            'question' => 'What is the difference between LLP and partnership firm?',
                            'answer' => 'Key differences:<br>
                            - Partners have unlimited liability in partnership but limited in LLP<br>
                            - LLP is a separate legal entity while partnership is not<br>
                            - LLP registration is mandatory while partnership is optional<br>
                            - LLP has more compliance requirements than partnership'
                        ],
                        [
                            'question' => 'What is the minimum capital required for LLP?',
                            'answer' => 'There is no minimum capital requirement for LLP registration. You can start an LLP with any amount of capital as deemed suitable for your business operations.'
                        ],
                        [
                            'question' => 'Can LLP be converted to private limited company?',
                            'answer' => 'Yes, an LLP can be converted to private limited company. The process involves obtaining approval from ROC and filing necessary forms. filingsbaba can assist with the complete conversion process.'
                        ],
                        [
                            'question' => 'What are the compliance requirements for LLP?',
                            'answer' => 'Key compliances include:<br>
                            - Filing annual return (Form 11)<br>
                            - Filing statement of accounts (Form 8)<br>
                            - Filing income tax returns<br>
                            - Maintaining proper books of accounts<br>
                            - Conducting audit if turnover exceeds thresholds'
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
            <h2 class="display-5 fw-bold mb-4">Start Your LLP Today</h2>
            <p class="lead mb-5">Get expert assistance for LLP registration and all compliance needs</p>
            
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
                                        <select class="form-select" name="partners">
                                            <option value="">Number of Partners</option>
                                            <option value="2">2 Partners</option>
                                            <option value="3">3 Partners</option>
                                            <option value="4">4 Partners</option>
                                            <option value="5+">5+ Partners</option>
                                        </select>
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