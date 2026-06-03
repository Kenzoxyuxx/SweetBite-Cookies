<?php
// ============================================
// HEADER.PHP - SweetBite Cookies
// Pembuat: Moh Dimas Riyan
// WhatsApp: 0857-3709-9324
// Project Ujikom Kelas X - Landing Page UMKM
// ============================================
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="author" content="Moh Dimas Riyan">
    <meta name="description" content="SweetBite Cookies - Cookies Premium Homemade Berkualitas Tinggi">
    <title>SweetBite Cookies | Cookies Premium Homemade</title>
    
    <!-- Bootstrap 5 CSS (Online CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons (Online CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Font Awesome Icons (Online CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- External CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<!-- ==================== STICKY NAVBAR ==================== -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <!-- Brand Logo -->
        <a class="navbar-brand" href="../index.php">
            <i class="fas fa-cookie-bite me-2"></i>
            <span class="fw-bold">SweetBite</span> Cookies
        </a>
        
        <!-- Tombol Toggle untuk Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu Navigasi -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../produk.php">
                        <i class="fas fa-box-open me-1"></i>Produk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../register.php">
                        <i class="fas fa-user-plus me-1"></i>Register
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">
                        <i class="fas fa-sign-in-alt me-1"></i>Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ==================== MODAL DETAIL PRODUK (Bootstrap Modal) ==================== -->
<div class="modal fade" id="productModal" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="modalProductName">
                    <i class="fas fa-cookie-bite me-2"></i> Detail Produk
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalProductBody">
                <!-- Konten detail produk akan diisi oleh JavaScript -->
                <div class="text-center">
                    <img src="" alt="Product Image" id="modalProductImage" class="img-fluid mb-3" style="border-radius: 15px; max-height: 200px; object-fit: cover;">
                    <h4 id="modalProductTitle"></h4>
                    <p class="text-muted" id="modalProductDesc"></p>
                    <p class="fw-bold text-success fs-4" id="modalProductPrice"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-warning" onclick="showOrderAlert()">
                    <i class="fas fa-shopping-cart me-1"></i> Pesan Sekarang
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Konten utama dimulai di sini -->
<main></main>