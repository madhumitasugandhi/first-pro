<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colombo Food Products</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero {
            background: url('https://images.unsplash.com/photo-1606788075761-3d62e2d8c8f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;
            color: #fff;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
        }
        .hero p {
            font-size: 1.25rem;
        }
        .products img {
            border-radius: 15px;
        }
        footer {
            background: #222;
            color: #fff;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('logo.jpg') }}" alt="Logo" height="50" class="me-2">
                <span class="fw-bold">Colombo Food Products</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <!-- Hero Section -->
<section class="hero position-relative text-white d-flex align-items-center" style="height:100vh; background:url('https://images.unsplash.com/photo-1577801596074-228c35d1f26a?auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;">
    <div class="container text-center">
        <h5 class="text-uppercase fw-bold">Fresh & Natural</h5>
        <h1 class="display-3 fw-bold">Start your day with<br> <span class="text-warning">Fresh Juices</span></h1>
        <p class="lead">Sip Bold, Live Fresh with Colombo Food Products</p>
        <a href="#products" class="btn btn-warning btn-lg mt-3">Shop Now</a>
    </div>

    <!-- Decorative juice glass image on right -->
    <div class="position-absolute bottom-0 end-0 me-5 mb-3 d-none d-md-block">
        <img src="https://i.ibb.co/3c3x9bQ/juice-glass.png" alt="Juice Glass" style="max-height:400px;">
    </div>

    <!-- Dark overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.4);"></div>
</section>


    <!-- Products -->
    <section id="products" class="products py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Products</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="https://source.unsplash.com/400x300/?mango,juice" class="card-img-top" alt="Mango Juice">
                        <div class="card-body">
                            <h5 class="card-title">Mango Delight</h5>
                            <p class="card-text">Refreshing mango juice full of vitamins and freshness.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="https://source.unsplash.com/400x300/?orange,juice" class="card-img-top" alt="Orange Juice">
                        <div class="card-body">
                            <h5 class="card-title">Orange Twist</h5>
                            <p class="card-text">Freshly squeezed orange juice to energize your day.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="https://source.unsplash.com/400x300/?berry,smoothie" class="card-img-top" alt="Berry Smoothie">
                        <div class="card-body">
                            <h5 class="card-title">Berry Blast</h5>
                            <p class="card-text">A healthy blend of berries packed with antioxidants.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Colombo Food Products Pvt Ltd | Sip Bold, Live Fresh</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
