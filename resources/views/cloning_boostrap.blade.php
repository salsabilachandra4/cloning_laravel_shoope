<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopee Clone</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar-brand {
            font-weight: bold;
            color: #ee2f09 !important;
        }
        .category-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .product-card img {
            object-fit: cover;
            height: 300px;
        }
    </style> --}}
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Shopee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Halaman Utama</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Keranjang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pesan</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="container mt-4">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/diskon shoope.png') }}" class="card-img-top" alt="diskon shopee">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/shoope cover 2.jpg') }}" class="card-img-top" alt="shopee cover">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Categories -->
    <div class="container mt-4">
        <h4 class="mb-3">Kategori Produk</h4>
        <div class="row">
            <div class="col-3 category-item">
                <img src="{{ asset('images/barang elektronik.jpg') }}" class="card-img-top" alt="Product 1">
                <p class="text-center mt-2">Elektronik</p>
            </div>
            <div class="col-3 category-item">
                <img src="{{ asset('images/gaya pakaian.jpg') }}" class="card-img-top" alt="Product 1">
                <p class="text-center mt-2">Gaya</p>
            </div>
            <div class="col-3 category-item">
                <img src="{{ asset('images/kecantikan.jpg') }}" class="card-img-top" alt="Product 1">
                <p class="text-center mt-2">Kecantikan</p>
            </div>
            <div class="col-3 category-item">
                <img src="{{ asset('images/aksesoris.jpg') }}" class="card-img-top" alt="Product 1">
                <p class="text-center mt-2">Aksesoris</p>
            </div>
        </div>
    </div>

    <!-- Products -->
    <div class="container mt-4">
        <h4 class="mb-3">Produk Terbaik 2024</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="{{ asset('images/cincin titanium.jpg') }}" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h6 class="card-title">Cincin Titanium</h6>
                        <p class="text-danger">Rp 499,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="{{ asset('images/jaket.jpg') }}" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h6 class="card-title">Jaket Stond Island Original</h6>
                        <p class="text-danger">Rp 990,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="{{ asset('images/ransel.jpg') }}" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h6 class="card-title">Ransel</h6>
                        <p class="text-danger">Rp 999,999</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="{{ asset('images/sepatu nike.jpg') }}" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h6 class="card-title">Sepatu Nike Air Jordan</h6>
                        <p class="text-danger">Rp 989,000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3 mt-4">
        <p>&copy; Shoope Pilihan Terbaik!!!</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
