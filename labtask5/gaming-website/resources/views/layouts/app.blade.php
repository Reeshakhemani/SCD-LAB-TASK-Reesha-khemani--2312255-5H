<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone - @yield('title', 'Your Ultimate Gaming Destination')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #6a11cb;
            --secondary-color: #2575fc;
            --dark-color: #1a1a2e;
            --accent-color: #00b4d8;
        }
        
        body {
            background: linear-gradient(135deg, var(--dark-color) 0%, #16213e 100%);
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        
        .navbar {
            background: rgba(26, 26, 46, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 2px solid var(--accent-color);
        }
        
        .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem;
            background: linear-gradient(45deg, var(--accent-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
            border-radius: 5px;
        }
        
        .nav-link:hover {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        }
        
        .hero-section {
            background: linear-gradient(135deg, rgba(106, 17, 203, 0.1) 0%, rgba(37, 117, 252, 0.1) 100%);
            padding: 100px 0;
            text-align: center;
        }
        
        .game-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }
        
        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 180, 216, 0.3);
        }
        
        .btn-gaming {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-gaming:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(106, 17, 203, 0.4);
            color: white;
        }
        
        .feature-icon {
            font-size: 3rem;
            background: linear-gradient(45deg, var(--accent-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }
        
        footer {
            background: rgba(26, 26, 46, 0.95);
            border-top: 2px solid var(--accent-color);
            margin-top: 50px;
        }
        
        .social-icons a {
            color: #ffffff;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            color: var(--accent-color);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fas fa-gamepad me-2"></i>GameZone
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                            <i class="fas fa-home me-1"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">
                            <i class="fas fa-info-circle me-1"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                            <i class="fas fa-envelope me-1"></i> Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-4">
        <div class="container text-center">
            <div class="social-icons mb-3">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-discord"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitch"></i></a>
            </div>
            <p>&copy; 2024 GameZone. All rights reserved. | Built with <i class="fas fa-heart text-danger"></i> for gamers</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>