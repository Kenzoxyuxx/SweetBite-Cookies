<?php
// ============================================
// PRODUK.PHP - Halaman semua produk SweetBite Cookies
// Pembuat: Moh Dimas Riyan
// WhatsApp: 0857-3709-9324
// ============================================

include 'includes/header.php';
?>

<!-- ==================== HEADER PRODUK ==================== -->
<section class="page-header">
    <div class="container">
        <h1 class="text-center fade-in">Semua Produk <span class="text-warning">SweetBite Cookies</span></h1>
        <p class="text-center text-muted">Pilihan cookies premium untuk segala suasana</p>
    </div>
</section>

<!-- ==================== DAFTAR PRODUK LENGKAP ==================== -->
<section class="all-products">
    <div class="container">
        <div class="row g-4">
            <!-- Produk 1: Choco Chip -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="images/choco-chip.jpg" alt="Choco Chip Cookies">
                    </div>
                    <div class="product-body">
                        <h5>Choco Chip Cookies</h5>
                        <div class="product-price">Rp25.000</div>
                        <p>Cookies dengan choco chip premium melimpah, renyah di luar lembut di dalam.</p>
                        <button class="btn btn-warning w-100" onclick="showProductDetail('Choco Chip Cookies', 'Rp25.000', 'Cookies dengan choco chip premium yang melimpah, tekstur renyah di luar dan lembut di dalam. Dibuat dengan butter asli dan cokelat Belgia.', 'images/choco-chip.jpg')">
                            <i class="fas fa-info-circle me-1"></i> Detail Produk
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 2: Red Velvet -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="images/red-velvet.jpg" alt="Red Velvet Cookies">
                    </div>
                    <div class="product-body">
                        <h5>Red Velvet Cookies</h5>
                        <div class="product-price">Rp28.000</div>
                        <p>Cookies merah elegan dengan sensasi creamy cheese topping yang lezat.</p>
                        <button class="btn btn-warning w-100" onclick="showProductDetail('Red Velvet Cookies', 'Rp28.000', 'Cookies red velvet dengan warna merah elegan dan taburan keju creamy premium. Tekstur lembut dan manis yang pas.', 'images/red-velvet.jpg')">
                            <i class="fas fa-info-circle me-1"></i> Detail Produk
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 3: Matcha -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="images/matcha.jpg" alt="Matcha Cookies">
                    </div>
                    <div class="product-body">
                        <h5>Matcha Cookies</h5>
                        <div class="product-price">Rp30.000</div>
                        <p>Cookies dengan bubuk matcha asli Jepang, rasa unik dan menyegarkan.</p>
                        <button class="btn btn-warning w-100" onclick="showProductDetail('Matcha Cookies', 'Rp30.000', 'Cookies matcha dari bubuk matcha asli Jepang grade premium. Rasa autentik dengan aroma yang menenangkan.', 'images/matcha.jpg')">
                            <i class="fas fa-info-circle me-1"></i> Detail Produk
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 4: Almond -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="images/almond.jpg" alt="Almond Cookies">
                    </div>
                    <div class="product-body">
                        <h5>Almond Cookies</h5>
                        <div class="product-price">Rp32.000</div>
                        <p>Cookies dengan potongan almond utuh, gurih, renyah, dan bergizi.</p>
                        <button class="btn btn-warning w-100" onclick="showProductDetail('Almond Cookies', 'Rp32.000', 'Cookies premium dengan potongan almond utuh pilihan. Kombinasi sempurna rasa manis dan gurih dengan tekstur renyah.', 'images/almond.jpg')">
                            <i class="fas fa-info-circle me-1"></i> Detail Produk
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 5: Double Chocolate -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="images/double-choco.jpg" alt="Double Chocolate Cookies">
                    </div>
                    <div class="product-body">
                        <h5>Double Chocolate Cookies</h5>
                        <div class="product-price">Rp35.000</div>
                        <p>Double kelezatan cokelat untuk pecinta cokelat sejati.</p>
                        <button class="btn btn-warning w-100" onclick="showProductDetail('Double Chocolate Cookies', 'Rp35.000', 'Double chocolate cookies dengan paduan cokelat hitam dan putih. Sangat legit dan cocok untuk pecinta cokelat!', 'images/double-choco.jpg')">
                            <i class="fas fa-info-circle me-1"></i> Detail Produk
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>