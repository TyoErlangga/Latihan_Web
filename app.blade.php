<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshDrinks Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0a74da, #e6f0ff);
            font-family: 'Poppins', sans-serif;
            color: #001f3f;
        }
        nav.navbar {
            background: linear-gradient(90deg, #004e92, #4286f4);
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        nav a.nav-link {
            color: #fff !important;
            font-weight: 500;
        }
        nav a.nav-link:hover {
            color: #dff3ff !important;
        }
        .footer {
            background: linear-gradient(90deg, #004e92, #4286f4);
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .btn-primary {
            background: linear-gradient(90deg, #004e92, #4286f4);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #4286f4, #004e92);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="{{ url('/') }}">🥤 FreshDrinks</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

<footer class="footer">
    <p>&copy; 2025 FreshDrinks Marketplace. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
