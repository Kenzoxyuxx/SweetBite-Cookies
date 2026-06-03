<?php
// ============================================
// LOGIN.PHP - Halaman login
// Pembuat: Moh Dimas Riyan
// WhatsApp: 0857-3709-9324
// ============================================

include 'includes/header.php';
?>

<!-- ==================== HEADER LOGIN ==================== -->
<section class="page-header">
    <div class="container">
        <h1 class="text-center fade-in">Login <span class="text-warning">Akun</span></h1>
        <p class="text-center text-muted">Masuk untuk menikmati layanan SweetBite Cookies</p>
    </div>
</section>

<!-- ==================== FORM LOGIN ==================== -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="login-form">
                <h4 class="text-center mb-4">
                    <i class="fas fa-sign-in-alt text-warning"></i> Form Login
                </h4>
                
                <div class="alert alert-info">
                    <i class="fas fa-info-circle"></i> Demo Akun:
                    <strong>Username:</strong> admin | <strong>Password:</strong> 12345
                </div>
                
                <form id="loginForm">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" id="loginUsername" placeholder="admin" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="loginPassword" placeholder="12345" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-warning w-100">
                        <i class="fas fa-sign-in-alt me-2"></i>Login
                    </button>
                </form>
                
                <div class="text-center mt-3">
                    <p class="text-muted small">
                        Belum punya akun? <a href="register.php" class="text-warning">Daftar di sini</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>