<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Salon | Beauty </title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #d4a373;
            --secondary-color: #fefae0;
            --dark-color: #333;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.8rem;
        }
        
        .nav-link {
            color: var(--dark-color);
            font-weight: 500;
            margin: 0 10px;
            position: relative;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color);
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            bottom: 0;
            left: 0;
            transition: width 0.3s;
        }
        
        .nav-link:hover:after, .nav-link.active:after {
            width: 100%;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 500;
        }
        
        .btn-primary:hover {
            background-color: transparent;
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0;
            text-align: center;
        }
        
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .hero-section p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .service-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            margin-bottom: 30px;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .about-section {
            background-color: var(--secondary-color);
            padding: 100px 0;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin: 15px;
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 60px 0 20px;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .social-icon {
            color: white;
            font-size: 1.2rem;
            margin-right: 15px;
        }
        
        .social-icon:hover {
            color: var(--primary-color);
        }
        
        .section-title {
            position: relative;
            margin-bottom: 50px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 3px;
            background: var(--primary-color);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Salon | Beauty </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Service') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-primary ms-lg-3">Book Now</a>
            </div>
        </div>
    </nav>



    @yield('content')
    <!-- Hero Section -->
    {{-- <section class="hero-section">
        <div class="container">
            <h1>Beauty & Wellness Salon</h1>
            <p>Experience luxury and relaxation with our premium beauty services. Our expert stylists are dedicated to making you look and feel your best.</p>
            <a href="#" class="btn btn-primary me-2">Our Services</a>
            <a href="#" class="btn btn-outline-light">Book Appointment</a>
        </div>
    </section> --}}

    <!-- Services Section -->
    {{-- <section class="py-5">
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
    </section> --}}

    <!-- About Section -->
    {{-- <section class="about-section">
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
    </section> --}}

    <!-- Testimonials Section -->
    {{-- <section class="py-5">
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
    </section> --}}

    <!-- Call to Action -->
    {{-- <section class="py-5 bg-dark text-white">
        <div class="container py-5 text-center">
            <h2 class="mb-4">Ready for Your Transformation?</h2>
            <p class="lead mb-5">Book your appointment today and experience the Glamour Salon difference.</p>
            <a href="#" class="btn btn-primary btn-lg">Book Now</a>
        </div>
    </section> --}}

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="mb-4">Glamour Salon</h3>
                    <p>123 Beauty Street, Cityville</p>
                    <p>Phone: (123) 456-7890</p>
                    <p>Email: info@glamoursalon.com</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h4 class="mb-4">Quick Links</h4>
                    <div class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">About Us</a>
                        <a href="{{ url('/Service') }}">Services</a>
                        <a href="#">Pricing</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h4 class="mb-4">Services</h4>
                    <div class="footer-links">
                        <a href="#">Hair Styling</a>
                        <a href="#">Makeup</a>
                        <a href="#">Skin Care</a>
                        <a href="#">Nail Care</a>
                        <a href="#">Spa</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="mb-4">Newsletter</h4>
                    <p>Subscribe to our newsletter for special offers and beauty tips.</p>
                    <form class="mt-4">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" aria-label="Your Email">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mt-5 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Glamour Salon. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white me-3">Privacy Policy</a>
                    <a href="#" class="text-white">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>