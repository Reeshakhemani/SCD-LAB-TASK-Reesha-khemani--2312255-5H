@extends('layouts.app')

@section('title', 'Home - GameZone')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold mb-4">Welcome to <span style="background: linear-gradient(45deg, #00b4d8, #2575fc); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">GameZone</span></h1>
                    <p class="lead mb-4">Your ultimate destination for epic gaming adventures, latest news, and a thriving community of passionate gamers.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#featured" class="btn btn-gaming">
                            <i class="fas fa-play me-2"></i>Explore Games
                        </a>
                        <a href="{{ route('about') }}" class="btn btn-outline-light">
                            <i class="fas fa-users me-2"></i>Join Community
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Gaming Setup" class="img-fluid rounded-3 shadow-lg" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Games -->
    <section id="featured" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Featured Games</h2>
                <p class="lead">Discover the hottest games taking the world by storm</p>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="game-card p-4 text-center">
                        <div class="feature-icon">
                            <i class="fas fa-dragon"></i>
                        </div>
                        <h4>Dragon's Legacy</h4>
                        <p>Embark on an epic RPG adventure in a world filled with magic, dragons, and ancient mysteries.</p>
                        <div class="rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                        <button class="btn btn-gaming btn-sm">Learn More</button>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="game-card p-4 text-center">
                        <div class="feature-icon">
                            <i class="fas fa-space-shuttle"></i>
                        </div>
                        <h4>Cosmic Frontier</h4>
                        <p>Explore the vastness of space in this thrilling sci-fi shooter with stunning graphics.</p>
                        <div class="rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <button class="btn btn-gaming btn-sm">Learn More</button>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="game-card p-4 text-center">
                        <div class="feature-icon">
                            <i class="fas fa-car-crash"></i>
                        </div>
                        <h4>Neon Velocity</h4>
                        <p>High-speed racing through futuristic cities with customizable vehicles and intense competition.</p>
                        <div class="rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                        </div>
                        <button class="btn btn-gaming btn-sm">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5" style="background: rgba(149, 7, 118, 0.1);">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <h3 class="display-4 fw-bold">50K+</h3>
                    <p>Active Gamers</p>
                </div>
                <div class="col-md-3">
                    <h3 class="display-4 fw-bold">200+</h3>
                    <p>Games Available</p>
                </div>
                <div class="col-md-3">
                    <h3 class="display-4 fw-bold">24/7</h3>
                    <p>Support</p>
                </div>
                <div class="col-md-3">
                    <h3 class="display-4 fw-bold">99%</h3>
                    <p>Uptime</p>
                </div>
            </div>
        </div>
    </section>
@endsection