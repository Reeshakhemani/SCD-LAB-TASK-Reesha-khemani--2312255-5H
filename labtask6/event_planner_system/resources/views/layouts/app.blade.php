<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Event Planner System')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Page Specific Styles -->
    @stack('styles')
    
    <style>
        :root {
            --primary-color: #667eea;
            --secondary-color: #764ba2;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
        }
        
        body {
            background: linear-gradient(135deg, #a9bad4ff 0%, #d3b9cfb9 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar-brand {
            font-weight: bold;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .event-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(139, 22, 22, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            margin-bottom: 20px;
        }
        
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .status-badge {
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85em;
        }
        
        .status-upcoming {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
        }
        
        .status-ongoing {
            background: linear-gradient(45deg, var(--warning-color), #fd7e14);
            color: white;
        }
        
        .status-completed {
            background: linear-gradient(45deg, var(--success-color), #20c997);
            color: white;
        }
        
        .btn-gradient {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            color: black;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            color: red;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: black;
            padding: 60px 0;
            border-radius: 0 0 30px 30px;
            margin-bottom: 40px;
        }
        
        .form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        
        .table-custom {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .table-custom thead th {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 15px;
            font-weight: 600;
        }
        
        .table-custom tbody td {
            padding: 15px;
            vertical-align: middle;
            border-color: #2884e0ff;
        }
        
        .detail-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(241, 18, 18, 0);
            border: none;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('events.index') }}">
                <i class="fas fa-calendar-alt me-2"></i>EventPlanner
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('events.index') }}">Events</a>
                <a class="nav-link" href="{{ route('events.create') }}">Create Event</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center py-4 mt-5 shadow-sm">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2024 Event Planner System. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Page Specific Scripts -->
    @stack('scripts')
</body>
</html>