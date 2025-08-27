<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowCare - Premium Skin Care Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #ff85a2;
            --secondary-color: #ffc4d0;
            --dark-color: #333;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
        }
        
        .hero-section {
            background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), 
                        url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #e67792;
            border-color: #e67792;
        }
        
        .category-card {
            transition: transform 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .category-card:hover {
            transform: translateY(-10px);
        }
        
        .product-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        
        .product-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        
        .badge-sale {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--primary-color);
        }
        
        .testimonial-card {
            background-color: var(--secondary-color);
            border-radius: 10px;
            padding: 20px;
        }
        
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer a {
            color: var(--secondary-color);
            text-decoration: none;
        }
        
        .newsletter {
            background-color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">GlowCare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cleansers</a></li>
                            <li><a class="dropdown-item" href="#">Moisturizers</a></li>
                            <li><a class="dropdown-item" href="#">Serums</a></li>
                            <li><a class="dropdown-item" href="#">Sunscreens</a></li>
                            <li><a class="dropdown-item" href="#">Masks</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="nav-link me-3"><i class="fas fa-search"></i></a>
                    <a href="#" class="nav-link me-3"><i class="fas fa-user"></i></a>
                    <a href="#" class="nav-link position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Discover Your Skin's Potential</h1>
            <p class="lead mb-5">Premium skincare products crafted with natural ingredients for radiant, healthy skin.</p>
            <a href="#" class="btn btn-primary btn-lg px-4 me-2">Shop Now</a>
            <a href="#" class="btn btn-outline-dark btn-lg px-4">Learn More</a>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Shop By Category</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="category-card text-center p-4">
                        <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80" class="img-fluid rounded-circle mb-3" alt="Cleansers" style="height: 150px; width: 150px; object-fit: cover;">
                        <h5>Cleansers</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary mt-2">View Products</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card text-center p-4">
                        <img src="https://images.unsplash.com/photo-1625772452859-1c03d5bf1137?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="img-fluid rounded-circle mb-3" alt="Moisturizers" style="height: 150px; width: 150px; object-fit: cover;">
                        <h5>Moisturizers</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary mt-2">View Products</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card text-center p-4">
                        <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" class="img-fluid rounded-circle mb-3" alt="Serums" style="height: 150px; width: 150px; object-fit: cover;">
                        <h5>Serums</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary mt-2">View Products</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card text-center p-4">
                        <img src="https://images.unsplash.com/photo-1556228579-5a3778a9bebb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" class="img-fluid rounded-circle mb-3" alt="Sunscreens" style="height: 150px; width: 150px; object-fit: cover;">
                        <h5>Sunscreens</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary mt-2">View Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h2>Featured Products</h2>
                <a href="#" class="btn btn-outline-primary">View All</a>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80" class="card-img-top" alt="Product 1">
                            <span class="badge badge-sale">Sale</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gentle Foaming Cleanser</h5>
                            <p class="card-text text-muted">For all skin types</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold text-primary">$24.99</span>
                                    <span class="text-decoration-line-through text-muted ms-2">$29.99</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="https://images.unsplash.com/photo-1625772452859-1c03d5bf1137?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Hydrating Moisturizer</h5>
                            <p class="card-text text-muted">For dry skin</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold text-primary">$32.99</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" class="card-img-top" alt="Product 3">
                            <span class="badge badge-sale">Bestseller</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Vitamin C Serum</h5>
                            <p class="card-text text-muted">Brightening formula</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold text-primary">$45.99</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="https://images.unsplash.com/photo-1556228579-5a3778a9bebb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Mineral Sunscreen SPF 50</h5>
                            <p class="card-text text-muted">Broad spectrum</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold text-primary">$28.99</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center" style="background-color: var(--secondary-color); border-radius: 10px;">
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80" class="img-fluid rounded-start" alt="Special Offer" style="height: 300px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-6 p-4">
                    <h2>Summer Glow Bundle</h2>
                    <p class="lead">Get our best-selling products together and save 20%</p>
                    <p>Includes: Cleanser, Moisturizer, Serum, and Sunscreen</p>
                    <div class="d-flex align-items-center mb-3">
                        <span class="fs-4 text-primary fw-bold me-2">$99.99</span>
                        <span class="text-decoration-line-through text-muted">$124.99</span>
                    </div>
                    <a href="#" class="btn btn-primary">Shop the Bundle</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Customers Say</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4">"The Vitamin C Serum has completely transformed my skin. My dark spots have faded and my complexion is so much brighter!"</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-3" width="50" height="50" alt="Customer">
                            <div>
                                <h6 class="mb-0">Sarah J.</h6>
                                <small class="text-muted">Verified Buyer</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4">"I've struggled with dry skin for years and this moisturizer is the only one that keeps my skin hydrated all day without feeling greasy."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" width="50" height="50" alt="Customer">
                            <div>
                                <h6 class="mb-0">Emily T.</h6>
                                <small class="text-muted">Verified Buyer</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4">"The sunscreen is amazing! It doesn't leave a white cast and works perfectly under makeup. I wear it every single day."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle me-3" width="50" height="50" alt="Customer">
                            <div>
                                <h6 class="mb-0">Jessica L.</h6>
                                <small class="text-muted">Verified Buyer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter py-5">
        <div class="container text-center">
            <h2 class="mb-4">Join Our Newsletter</h2>
            <p class="mb-4">Subscribe to get 10% off your first order and receive skincare tips and exclusive offers.</p>
            <form class="row g-2 justify-content-center">
                <div class="col-md-6">
                    <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5>GlowCare</h5>
                    <p>Premium skincare products crafted with natural ingredients for radiant, healthy skin.</p>
                    <div class="social-icons">
                        <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Shop</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">All Products</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">Special Offers</a></li>
                        <li><a href="#">Gift Sets</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i> 123 Skincare St, Beauty City</li>
                        <li><i class="fas fa-phone me-2"></i> (123) 456-7890</li>
                        <li><i class="fas fa-envelope me-2"></i> info@glowcare.com</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 GlowCare. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <img src="https://via.placeholder.com/300x50?text=Payment+Methods" alt="Payment Methods" class="img-fluid" style="height: 30px;">
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>