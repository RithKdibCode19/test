@extends('Frontend.Layout')
@section('content')

 <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Beauty & Wellness Salon</h1>
            <p>Experience luxury and relaxation with our premium beauty services. Our expert stylists are dedicated to making you look and feel your best.</p>
            <a href="#" class="btn btn-primary me-2">Our Services</a>
            <a href="#" class="btn btn-outline-light">Book Appointment</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container py-5">
            <h2 class="text-center section-title">Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card service-card text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h3>Hair Styling</h3>
                        <p>Professional haircuts, coloring, and treatments tailored to your unique style and hair type.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h3>Skin Care</h3>
                        <p>Rejuvenating facials and skin treatments using premium products for a radiant complexion.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-hand-sparkles"></i>
                        </div>
                        <h3>Nail Care</h3>
                        <p>Manicures, pedicures, and nail art services to keep your hands and feet looking flawless.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Salon Interior" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">About Our Salon</h2>
                    <p>Glamour Salon has been providing exceptional beauty services since 2010. Our mission is to enhance your natural beauty while providing a relaxing and luxurious experience.</p>
                    <p>We use only the highest quality products and our team undergoes regular training to stay updated with the latest trends and techniques in the beauty industry.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2 text-primary"></i>
                                <span>Certified Experts</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2 text-primary"></i>
                                <span>Premium Products</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2 text-primary"></i>
                                <span>Hygienic Environment</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2 text-primary"></i>
                                <span>Personalized Service</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary mt-3">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container py-5">
            <h2 class="text-center section-title">What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client" class="testimonial-img">
                        <h4>Sarah Johnson</h4>
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"The best salon experience I've ever had! My hairstylist listened to exactly what I wanted and delivered beyond my expectations."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" class="testimonial-img">
                        <h4>Emily Davis</h4>
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>"I've been coming here for years. The staff is professional, the atmosphere is relaxing, and I always leave feeling beautiful."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client" class="testimonial-img">
                        <h4>Michael Brown</h4>
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"As a guy, I was hesitant about going to a salon, but the barber here gave me the best haircut I've ever had. Highly recommend!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-dark text-white">
        <div class="container py-5 text-center">
            <h2 class="mb-4">Ready for Your Transformation?</h2>
            <p class="lead mb-5">Book your appointment today and experience the Glamour Salon difference.</p>
            <a href="#" class="btn btn-primary btn-lg">Book Now</a>
        </div>
    </section>
@endsection