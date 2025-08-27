

@extends('Frontend.Layout')
@section('content')
   <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Services Tabs -->
    <section class="py-5">
        <div class="container">
            <ul class="nav nav-pills service-tabs" id="servicesTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="hair-tab" data-bs-toggle="pill" data-bs-target="#hair" type="button" role="tab" aria-controls="hair" aria-selected="true">Hair Services</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="skin-tab" data-bs-toggle="pill" data-bs-target="#skin" type="button" role="tab" aria-controls="skin" aria-selected="false">Skin Care</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nails-tab" data-bs-toggle="pill" data-bs-target="#nails" type="button" role="tab" aria-controls="nails" aria-selected="false">Nail Services</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="spa-tab" data-bs-toggle="pill" data-bs-target="#spa" type="button" role="tab" aria-controls="spa" aria-selected="false">Spa Treatments</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="makeup-tab" data-bs-toggle="pill" data-bs-target="#makeup" type="button" role="tab" aria-controls="makeup" aria-selected="false">Makeup</button>
                </li>
            </ul>
            
            <div class="tab-content" id="servicesTabContent">
                <!-- Hair Services -->
                <div class="tab-pane fade show active" id="hair" role="tabpanel" aria-labelledby="hair-tab">
                    <h2 class="section-title">Hair Services</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Haircut">
                                <div class="service-card-body">
                                    <h3>Signature Haircut</h3>
                                    <p>A customized haircut tailored to your face shape, hair texture, and lifestyle.</p>
                                    <div class="service-price">$65+</div>
                                    <div class="service-duration"><i class="far fa-clock me-2"></i>60 min</div>
                                    <ul class="service-features">
                                        <li>Consultation with stylist</li>
                                        <li>Shampoo & conditioning</li>
                                        <li>Precision cutting</li>
                                        <li>Blowout styling</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1536599424071-0b215a388ba7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Hair Color">
                                <div class="service-card-body">
                                    <h3>Premium Hair Color</h3>
                                    <p>Full color service using ammonia-free, nourishing color products.</p>
                                    <div class="service-price">$95+</div>
                                    <div class="service-duration"><i class="far fa-clock me-2"></i>90-120 min</div>
                                    <ul class="service-features">
                                        <li>Color consultation</li>
                                        <li>Custom color formulation</li>
                                        <li>Processing with heat cap</li>
                                        <li>Deep conditioning treatment</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1600334129128-685c5582fd35?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Hair Treatment">
                                <div class="service-card-body">
                                    <h3>Keratin Smoothing Treatment</h3>
                                    <p>Professional smoothing treatment that reduces frizz and adds shine for up to 3 months.</p>
                                    <div class="service-price">$250+</div>
                                    <div class="service-duration"><i class="far fa-clock me-2"></i>3-4 hours</div>
                                    <ul class="service-features">
                                        <li>Formaldehyde-free formula</li>
                                        <li>Deep cleansing shampoo</li>
                                        <li>Treatment application</li>
                                        <li>Heat sealing process</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Skin Care -->
                <div class="tab-pane fade" id="skin" role="tabpanel" aria-labelledby="skin-tab">
                    <h2 class="section-title">Skin Care Services</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Facial">
                                <div class="service-card-body">
                                    <h3>Signature Facial</h3>
                                    <p>A relaxing facial that cleanses, exfoliates, and nourishes the skin.</p>
                                    <div class="service-price">$85</div>
                                    <div class="service-duration"><i class="far fa-clock me-2"></i>60 min</div>
                                    <ul class="service-features">
                                        <li>Skin analysis</li>
                                        <li>Double cleansing</li>
                                        <li>Exfoliation</li>
                                        <li>Custom mask</li>
                                        <li>Moisturizer & SPF</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Microdermabrasion">
                                <div class="service-card-body">
                                    <h3>Microdermabrasion</h3>
                                    <p>Advanced exfoliation that removes dead skin cells and stimulates collagen production.</p>
                                    <div class="service-price">$120</div>
                                    <div class="service-duration"><i class="far fa-clock me-2"></i>45 min</div>
                                    <ul class="service-features">
                                        <li>Deep cleansing</li>
                                        <li>Diamond-tip exfoliation</li>
                                        <li>Extraction (if needed)</li>
                                        <li>Hydrating serum</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Chemical Peel">
                                <div class="service-card-body">
                                    <h3>Chemical Peel</h3>
                                    <p>Professional peel that improves skin texture, tone, and reduces signs of aging.</p>
                                    <div class="service-price">$150+</div>
                                    <div class="service-duration"><i class="far fa-clock me-2"></i>60 min</div>
                                    <ul class="service-features">
                                        <li>Skin assessment</li>
                                        <li>Custom peel selection</li>
                                        <li>Application & monitoring</li>
                                        <li>Post-peel care</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Nail Services -->
                <div class="tab-pane fade" id="nails" role="tabpanel" aria-labelledby="nails-tab">
                    <h2 class="section-title">Nail Services</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1596704017255-ee7b0a1e0d8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Manicure">
                                <div class="service-card-body">
                                    <h3>Luxury Manicure</h3>
                                    <p>Our signature manicure with extra pampering for your hands.</p>
                                    <div class="service-price">$45</div>
                                    <div class="service-duration"><i class="far fa-clock me-2"></i>45 min</div>
                                    <ul class="service-features">
                                        <li>Soak in warm aromatherapy water</li>
                                        <li>Cuticle care</li>
                                        <li>Hand massage</li>
                                        <li>Nail shaping & polish</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1596464716127-f2a82984de30?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Pedicure">
                                <div class="service-card-body">
                                    <h3>Spa Pedicure</h3>
                                    <p>Ultimate foot treatment that leaves your feet soft and refreshed.</p>
                                    <div class="service-price">$65</div>
                                    <div class="service-duration"><i class="far fa-clock me-2"></i>60 min</div>
                                    <ul class="service-features">
                                        <li>Foot soak with salts</li>
                                        <li>Callus removal</li>
                                        <li>Leg & foot massage</li>
                                        <li>Nail shaping & polish</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1597248881519-db089d3744a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gel Polish">
                                <div class="service-card-body">
                                    <h3>Gel Polish Application</h3>
                                    <p>Long-lasting polish that stays chip-free for up to 3 weeks.</p>
                                    <div class="service-price">$30+</div>
                                    <div class="service-duration"><i class="far fa-clock me-2"></i>30 min</div>
                                    <ul class="service-features">
                                        <li>Nail prep</li>
                                        <li>Base coat application</li>
                                        <li>2 coats of color</li>
                                        <li>Top coat & curing</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="container">
            <h2 class="section-title">Why Choose Our Salon</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3>Certified Professionals</h3>
                        <p>Our team consists of licensed and experienced beauty experts who stay updated with the latest techniques.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h3>Premium Products</h3>
                        <p>We use only high-quality, professional-grade products that deliver visible results.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Personalized Service</h3>
                        <p>Every service is customized to your unique needs and preferences for optimal results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-dark text-white">
        <div class="container py-5 text-center">
            <h2 class="mb-4">Ready to Experience Our Services?</h2>
            <p class="lead mb-5">Book your appointment online or call us at (123) 456-7890</p>
            <a href="#" class="btn btn-primary btn-lg me-3">Book Online</a>
            <a href="contact.html" class="btn btn-outline-light btn-lg">Contact Us</a>
        </div>
    </section>
@endsection

 
