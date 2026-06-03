<?php
// ============================================
// INDEX.PHP - Halaman Home SweetBite Cookies
// Pembuat: Moh Dimas Riyan
// WhatsApp: 0857-3709-9324
// Project Ujikom Kelas X - Landing Page UMKM
// ============================================

include 'includes/header.php';
?>

<!-- ==================== HERO SECTION ==================== -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <!-- Headline -->
                <h1 class="hero-title fade-in">
                    Cookies Premium dengan <span class="text-warning">Rasa yang Tak Terlupakan</span>
                </h1>
                
                <!-- Subheadline -->
                <p class="hero-subtitle fade-in">
                    Nikmati cookies homemade berkualitas tinggi yang dibuat dengan cinta 
                    dan bahan pilihan terbaik.
                </p>
                
                <!-- Tombol CTA -->
                <a href="produk.php" class="btn btn-warning btn-lg cta-button fade-in">
                    <i class="fas fa-eye me-2"></i>Lihat Produk
                </a>
            </div>
            
            <div class="col-lg-6 order-lg-1 order-1 mb-4 mb-lg-0">
                <img src="images/hero-cookies.jpg" 
                     alt="SweetBite Cookies Premium" 
                     class="img-fluid hero-image fade-in">
            </div>
        </div>
    </div>
</section>

<!-- ==================== SECTION KEUNGGULAN ==================== -->
<section class="features">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Mengapa Memilih <span class="text-warning">SweetBite?</span></h2>
            <p class="section-subtitle">Keunggulan yang membuat cookies kami istimewa</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h5>100% Homemade</h5>
                    <p>Dibuat langsung dengan resep rumahan dan penuh cinta</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h5>Bahan Premium</h5>
                    <p>Menggunakan bahan berkualitas tinggi terbaik</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h5>Tanpa Pengawet</h5>
                    <p>Alami dan aman untuk dikonsumsi semua usia</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h5>Pengiriman Cepat</h5>
                    <p>Diantar langsung ke rumah Anda dengan aman</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== PRODUK UNGGULAN ==================== -->
<section class="featured-products">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Produk <span class="text-warning">Unggulan</span> Kami</h2>
            <p class="section-subtitle">Cookies terlaris yang wajib Anda coba</p>
        </div>
        
        <div class="row g-4">
            <!-- Produk 1: Choco Chip -->
            <div class="col-md-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="images/choco-chip.jpg" alt="Choco Chip Cookies">
                    </div>
                    <div class="product-body">
                        <h5>Choco Chip Cookies</h5>
                        <p>Cookies dengan choco chip melimpah, renyah di luar lembut di dalam</p>
                        <button class="btn btn-sm btn-warning w-100" onclick="showProductDetail('Choco Chip Cookies', 'Rp25.000', 'Cookies dengan choco chip premium yang melimpah, tekstur renyah di luar dan lembut di dalam. Cocok untuk teman ngopi atau teh sore.', 'images/choco-chip.jpg')">
                            <i class="fas fa-info-circle me-1"></i> Detail
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 2: Red Velvet -->
            <div class="col-md-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="images/red-velvet.jpg" alt="Red Velvet Cookies">
                    </div>
                    <div class="product-body">
                        <h5>Red Velvet Cookies</h5>
                        <p>Cookies merah elegan dengan sensasi creamy cheese topping</p>
                        <button class="btn btn-sm btn-warning w-100" onclick="showProductDetail('Red Velvet Cookies', 'Rp28.000', 'Cookies red velvet dengan warna merah elegan dan taburan keju creamy. Manis pas dan lembut di mulut.', 'images/red-velvet.jpg')">
                            <i class="fas fa-info-circle me-1"></i> Detail
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 3: Matcha -->
            <div class="col-md-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="images/matcha.jpg" alt="Matcha Cookies">
                    </div>
                    <div class="product-body">
                        <h5>Matcha Cookies</h5>
                        <p>Cookies dengan bubuk matcha asli Jepang, rasa unik dan menyegarkan</p>
                        <button class="btn btn-sm btn-warning w-100" onclick="showProductDetail('Matcha Cookies', 'Rp30.000', 'Cookies matcha dari bubuk matcha asli Jepang, rasa autentik dengan aroma yang menenangkan. Cocok untuk pecinta matcha.', 'images/matcha.jpg')">
                            <i class="fas fa-info-circle me-1"></i> Detail
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 4: Almond -->
            <div class="col-md-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="images/almond.jpg" alt="Almond Cookies">
                    </div>
                    <div class="product-body">
                        <h5>Almond Cookies</h5>
                        <p>Cookies dengan potongan almond utuh, gurih dan renyah</p>
                        <button class="btn btn-sm btn-warning w-100" onclick="showProductDetail('Almond Cookies', 'Rp32.000', 'Cookies premium dengan potongan almond utuh yang gurih dan renyah. Kombinasi sempurna rasa manis dan gurih.', 'images/almond.jpg')">
                            <i class="fas fa-info-circle me-1"></i> Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TESTIMONI PELANGGAN ==================== -->
<section class="testimonials">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-white">Apa Kata <span class="text-warning">Pelanggan</span> Kami?</h2>
            <p class="section-subtitle text-white-50">Testimoni dari mereka yang sudah mencoba SweetBite Cookies</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Cookies-nya enak banget! Choco chip-nya melimpah, renyah dan gak eneg. Pengiriman juga cepat. Recommended!"
                    </p>
                    <div class="testimonial-author">
                        <i class="fas fa-user-circle"></i>
                        <span>Putri Maharani</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Matcha cookies-nya authentik banget! Rasanya balance, tidak terlalu manis. Cocok buat oleh-oleh atau camilan di kantor."
                    </p>
                    <div class="testimonial-author">
                        <i class="fas fa-user-circle"></i>
                        <span>Budi Santoso</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Red velvet cookies-nya lembut banget! Topping kejunya creamy. Anak-anak juga suka. Bakal repeat order lagi."
                    </p>
                    <div class="testimonial-author">
                        <i class="fas fa-user-circle"></i>
                        <span>Siti Aisyah</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CALL TO ACTION (CTA) ==================== -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2>Pesan Sekarang dan <span class="text-dark">Rasakan Kelezatannya!</span></h2>
            <p>Dapatkan diskon 10% untuk pembelian pertama Anda</p>
            <a href="produk.php" class="btn btn-dark btn-lg">
                <i class="fas fa-shopping-cart me-2"></i>Pesan Sekarang
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>