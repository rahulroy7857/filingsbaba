@extends('layouts.main')
@section('title', 'partnership- FilingsBaba')
@section('content')

<!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1>Partnership Firm Registration in India</h1>
                    <p class="lead mb-4">Register your partnership firm with filingsbaba. Get GST, MSME registration, current account and more with expert assistance.</p>
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
                                <small>4.9/5 (1,842 Reviews)</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-users me-2"></i>
                            <span>1500+ Partnerships Registered</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-image">
                    <div class="card shadow-lg">
                        <div class="card-body p-4">
                            <h3 class="mb-4">Start Your Partnership Today</h3>
                            <form action="process_lead.php" method="POST">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="city" placeholder="City" required>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" name="partners">
                                        <option value="">Number of Partners</option>
                                        <option value="2">2 Partners</option>
                                        <option value="3">3 Partners</option>
                                        <option value="4">4 Partners</option>
                                        <option value="5+">5+ Partners</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-if-primary w-100 mt-3">Get Started Now</button>
                                </div>
                            </form>
                            <div class="mt-3 text-center">
                                <small class="text-muted">By submitting, you agree to our <a href="#" class="text-green">Terms</a> and <a href="#" class="text-green">Privacy Policy</a></small>
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
                    <h2 class="section-title">What is a Partnership Firm?</h2>
                    <p class="mb-4">A partnership firm is a business structure where two or more individuals manage and operate a business in accordance with the terms and objectives set out in a Partnership Deed.</p>
                    
                    <div class="mb-4">
                        <h5>Key Features of Partnership:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Minimum 2 partners required (max 20)</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Governed by Indian Partnership Act, 1932</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Partners share profits and losses</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> No minimum capital requirement</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Partners have unlimited liability</li>
                        </ul>
                    </div>
                    
                    <a href="#contact" class="btn btn-if-outline">Talk to Our Expert</a>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="row g-4">
                        <?php
                        $features = [
                            [
                                'icon' => 'fas fa-file-contract',
                                'title' => 'Partnership Deed Drafting',
                                'desc' => 'Expert drafting of partnership deed with all clauses'
                            ],
                            [
                                'icon' => 'fas fa-bolt',
                                'title' => 'Quick Registration',
                                'desc' => 'Complete registration in 7-10 working days'
                            ],
                            [
                                'icon' => 'fas fa-rupee-sign',
                                'title' => 'Affordable Pricing',
                                'desc' => 'Starting at just ₹2,999 all-inclusive'
                            ],
                            [
                                'icon' => 'fas fa-headset',
                                'title' => 'Dedicated CA',
                                'desc' => 'Expert assistance throughout the process'
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
            <h2 class="section-title center text-center">Benefits of Partnership Registration</h2>
            <p class="text-center mb-5">Why choose partnership firm for your business?</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h5>Easy to Form</h5>
                        <p>Simple registration process with minimal compliance requirements compared to companies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>Shared Responsibility</h5>
                        <p>Workload, risks and decision making is shared among partners.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-piggy-bank"></i>
                        </div>
                        <h5>Low Cost</h5>
                        <p>No minimum capital requirement and lower registration cost than companies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h5>Flexibility</h5>
                        <p>Partners can decide terms of operation through partnership deed.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Credibility</h5>
                        <p>Registered partnership gains trust from customers and vendors.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <h5>Bank Account</h5>
                        <p>Can open current account in firm's name after registration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title center text-center">Partnership Registration Process</h2>
            <p class="text-center mb-5">Simple 4-step process to register your partnership firm</p>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="process-step">
                        <div class="process-step-number">1</div>
                        <h4>Document Collection</h4>
                        <p>Share PAN, Aadhaar, address proof and photos of all partners. Our expert will verify them.</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="process-step-number">2</div>
                        <h4>Partnership Deed Drafting</h4>
                        <p>We draft the partnership deed with all clauses as per your business requirements.</p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="process-step">
                        <div class="process-step-number">3</div>
                        <h4>Registration (Optional)</h4>
                        <p>Register the partnership deed with Registrar of Firms (optional but recommended).</p>
                    </div>
                    
                    <div class="process-step">
                        <div class="process-step-number">4</div>
                        <h4>GST & Bank Account</h4>
                        <p>Assistance with GST registration and current account opening in firm's name.</p>
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
                    <p class="mb-4">List of documents needed for partnership registration</p>
                    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">For All Partners:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> PAN Card (Copy)</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Aadhaar Card (Copy)</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Passport Size Photo</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Address Proof (Electricity Bill/Rent Agreement)</li>
                            </ul>
                            
                            <h5 class="mb-3 mt-4">For Registered Office:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Electricity Bill (Not older than 2 months)</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> NOC from Owner (If rented)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <h2 class="section-title">Partnership Deed Contents</h2>
                    <p class="mb-4">Key clauses included in your partnership deed</p>
                    
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Name and address of the firm</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Names and addresses of all partners</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Nature of business</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Date of commencement</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Capital contribution by each partner</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Profit-sharing ratio</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Rights and duties of partners</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Salaries/remuneration to partners</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Admission/retirement of partners</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Dissolution of firm</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Dispute resolution mechanism</li>
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
            <h2 class="section-title center text-center">Partnership Registration Packages</h2>
            <p class="text-center mb-5">Choose the package that fits your requirements</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="pricing-card h-100">
                        <div class="pricing-header">
                            <h4 class="mb-0">Basic</h4>
                        </div>
                        <div class="pricing-body text-center p-4">
                            <div class="pricing-price">₹2,999</div>
                            <small class="text-muted">+ Govt. Fees</small>
                            <div class="pricing-features">
                                <ul>
                                    <li><i class="fas fa-check text-success me-2"></i> Partnership Deed Drafting</li>
                                    <li><i class="fas fa-check text-success me-2"></i> MSME Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Bank Account Assistance</li>
                                    <li><i class="fas fa-times text-muted me-2"></i> GST Registration</li>
                                    <li><i class="fas fa-times text-muted me-2"></i> Firm Registration</li>
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
                                    <li><i class="fas fa-check text-success me-2"></i> Partnership Deed Drafting</li>
                                    <li><i class="fas fa-check text-success me-2"></i> MSME Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Bank Account Assistance</li>
                                    <li><i class="fas fa-check text-success me-2"></i> GST Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Firm Registration</li>
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
                                    <li><i class="fas fa-check text-success me-2"></i> Partnership Deed Drafting</li>
                                    <li><i class="fas fa-check text-success me-2"></i> MSME Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Bank Account Assistance</li>
                                    <li><i class="fas fa-check text-success me-2"></i> GST Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> Firm Registration</li>
                                    <li><i class="fas fa-check text-success me-2"></i> GST Returns (3 months)</li>
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
            <p class="text-center mb-5">Trusted by 8,500+ business owners across India</p>
            
            <div class="row g-4">
                <?php
                $testimonials = [
                    [
                        'name' => 'Arun & Neha Patel',
                        'business' => 'Restaurant Owners, Mumbai',
                        'rating' => 5,
                        'comment' => 'filingsbaba made our partnership registration so smooth. The partnership deed was drafted perfectly covering all aspects of our restaurant business. Highly recommended!'
                    ],
                    [
                        'name' => 'Rahul Sharma',
                        'business' => 'IT Services, Bangalore',
                        'rating' => 5,
                        'comment' => 'Excellent service! We were three partners starting our IT business. The CA explained everything clearly and got all registrations done quickly.'
                    ],
                    [
                        'name' => 'Priya & Rohan Gupta',
                        'business' => 'Fashion Boutique, Delhi',
                        'rating' => 4,
                        'comment' => 'Good experience overall. The team was responsive and completed all formalities within promised timeline. The partnership deed was comprehensive.'
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
            <p class="text-center mb-5">Find answers to common questions about partnership registration</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php
                    $faqs = [
                        [
                            'question' => 'What is a partnership firm?',
                            'answer' => 'A partnership firm is a business structure where two or more individuals manage and operate a business in accordance with the terms and objectives set out in a Partnership Deed. It is governed by the Indian Partnership Act, 1932.'
                        ],
                        [
                            'question' => 'Is registration mandatory for partnership firm?',
                            'answer' => 'No, registration of a partnership firm is not mandatory under Indian law. However, registered partnership firms enjoy certain benefits like the ability to file suits against third parties and other partners. Most banks also require registration for opening a business bank account.'
                        ],
                        [
                            'question' => 'What is the difference between partnership and LLP?',
                            'answer' => 'Key differences:<br>
                            - Partners have unlimited liability in partnership but limited in LLP<br>
                            - LLP is a separate legal entity while partnership is not<br>
                            - LLP registration is mandatory while partnership is optional<br>
                            - LLP has more compliance requirements than partnership'
                        ],
                        [
                            'question' => 'How many partners can a partnership firm have?',
                            'answer' => 'A partnership firm must have minimum 2 partners and can have maximum 20 partners for general businesses. For banking business, the maximum number of partners is 10 as per Banking Regulation Act.'
                        ],
                        [
                            'question' => 'Can a partnership firm be converted to LLP?',
                            'answer' => 'Yes, a partnership firm can be converted to LLP. The process involves obtaining DIN/DPIN for all partners, getting DSC, name approval and filing Form 17 with ROC. filingsbaba can assist with the complete conversion process.'
                        ],
                        [
                            'question' => 'What is the validity of partnership firm?',
                            'answer' => 'A partnership firm continues to exist until it is dissolved as per terms of the partnership deed or by mutual agreement of partners. The death, retirement or insolvency of a partner may dissolve the firm unless the deed provides otherwise.'
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
            <h2 class="display-5 fw-bold mb-4">Start Your Partnership Firm Today</h2>
            <p class="lead mb-5">Get expert assistance for partnership registration and all compliance needs</p>
            
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