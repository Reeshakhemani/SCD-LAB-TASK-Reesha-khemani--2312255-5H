@extends('layouts.app')

@section('title', 'About - GameZone')

@section('content')
    <!-- About Hero -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold mb-4">About <span style="background: linear-gradient(45deg, #00b4d8, #2575fc); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">GameZone</span></h1>
                    <p class="lead">Where passion for gaming meets cutting-edge technology and an incredible community.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Gaming Community" class="img-fluid rounded-3 shadow-lg" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-4 fw-bold mb-4">Our Story</h2>
                    <p class="lead mb-4">
                        Founded in 2020 by a group of passionate gamers, GameZone started as a small community forum 
                        and has grown into one of the most trusted gaming platforms on the web.
                    </p>
                    <p class="mb-5">
                        We believe that gaming is more than just entertainment – it's a way to connect, compete, 
                        and create unforgettable memories. Our mission is to provide the best gaming experience 
                        for players of all levels, from casual mobile gamers to professional esports athletes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5" style="background: rgba(0, 180, 216, 0.1);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Meet Our Team</h2>
                <p class="lead">The passionate gamers behind GameZone</p>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="game-card p-4 text-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             alt="Alex Chen" class="rounded-circle mb-3" width="120" height="120">
                        <h4>Alex Chen</h4>
                        <p class="text-accent">Founder & CEO</p>
                        <p>Former professional esports player with over 10 years of gaming industry experience.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="game-card p-4 text-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             alt="Sarah Martinez" class="rounded-circle mb-3" width="120" height="120">
                        <h4>Sarah Martinez</h4>
                        <p class="text-accent">Community Manager</p>
                        <p>Building and nurturing our amazing gaming community since day one.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="game-card p-4 text-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             alt="Marcus Johnson" class="rounded-circle mb-3" width="120" height="120">
                        <h4>Marcus Johnson</h4>
                        <p class="text-accent">Technical Director</p>
                        <p>Ensuring our platform delivers the smoothest gaming experience possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Our Values</h2>
            </div>
            
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Community First</h4>
                    <p>Our gamers are at the heart of everything we do. We listen, we adapt, and we grow together.</p>
                </div>
                
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Fair Play</h4>
                    <p>We maintain a zero-tolerance policy for cheating and toxic behavior in our gaming environment.</p>
                </div>
                
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4>Innovation</h4>
                    <p>Constantly pushing boundaries to bring you the latest and greatest in gaming technology.</p>
                </div>
            </div>
        </div>
    </section>
@endsection