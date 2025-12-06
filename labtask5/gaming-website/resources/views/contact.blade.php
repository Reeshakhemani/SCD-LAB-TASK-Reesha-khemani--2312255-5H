@extends('layouts.app')

@section('title', 'Contact Us - GameZone')

@section('content')
    <!-- Contact Hero -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold mb-4">Contact <span style="background: linear-gradient(45deg, #00b4d8, #2575fc); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">GameZone</span></h1>
                    <p class="lead">We'd love to hear from you! Get in touch with our team for any questions or support.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Contact Support" class="img-fluid rounded-3 shadow-lg" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="game-card p-5">
                        <h2 class="display-5 fw-bold mb-4">Send us a Message</h2>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control bg-dark text-light border-secondary" id="firstName" placeholder="Enter your first name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control bg-dark text-light border-secondary" id="lastName" placeholder="Enter your last name">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control bg-dark text-light border-secondary" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select bg-dark text-light border-secondary" id="subject">
                                    <option selected>Select a subject</option>
                                    <option>Technical Support</option>
                                    <option>Account Issues</option>
                                    <option>Game Suggestions</option>
                                    <option>Partnership</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control bg-dark text-light border-secondary" id="message" rows="5" placeholder="Tell us how we can help you..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-gaming btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="game-card p-4 mb-4">
                        <h4 class="fw-bold mb-4"><i class="fas fa-map-marker-alt me-2"></i>Visit Our Office</h4>
                        <p class="mb-3">
                            123 Gaming Street<br>
                            Tech City, TC 10101<br>
                            Digital Realm
                        </p>
                    </div>
                    
                    <div class="game-card p-4 mb-4">
                        <h4 class="fw-bold mb-4"><i class="fas fa-phone me-2"></i>Contact Info</h4>
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            support@gamezone.com
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            +1 (555) 123-GAME
                        </p>
                        <p>
                            <i class="fas fa-clock me-2"></i>
                            24/7 Support Available
                        </p>
                    </div>
                    
                    <div class="game-card p-4">
                        <h4 class="fw-bold mb-4"><i class="fas fa-headset me-2"></i>Quick Support</h4>
                        <p class="mb-3">Need immediate help? Check our knowledge base or join our Discord community.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-gaming btn-sm">
                                <i class="fab fa-discord me-2"></i>Join Discord
                            </a>
                            <a href="#" class="btn btn-outline-light btn-sm">
                                <i class="fas fa-book me-2"></i>Knowledge Base
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5" style="background: rgba(0, 180, 216, 0.1);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Frequently Asked Questions</h2>
                <p class="lead">Quick answers to common questions</p>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="game-card p-4 mb-3">
                        <h5 class="fw-bold">How do I create an account?</h5>
                        <p class="mb-0">Click the "Sign Up" button in the top right corner and follow the simple registration process.</p>
                    </div>
                    
                    <div class="game-card p-4 mb-3">
                        <h5 class="fw-bold">Is GameZone free to use?</h5>
                        <p class="mb-0">Yes! Our basic features are completely free. We offer premium subscriptions for additional benefits.</p>
                    </div>
                    
                    <div class="game-card p-4 mb-3">
                        <h5 class="fw-bold">What games are available on GameZone?</h5>
                        <p class="mb-0">We feature over 200 games across various genres, from action and adventure to strategy and RPGs.</p>
                    </div>
                    
                    <div class="game-card p-4">
                        <h5 class="fw-bold">How can I report a technical issue?</h5>
                        <p class="mb-0">Use the contact form above or join our Discord community for immediate technical support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection