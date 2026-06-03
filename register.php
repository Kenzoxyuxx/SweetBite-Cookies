<?php
// ============================================
// REGISTER.PHP - Halaman pendaftaran user
// Pembuat: Moh Dimas Riyan
// WhatsApp: 0857-3709-9324
// ============================================

include 'includes/header.php';
?>

<!-- ==================== HEADER REGISTER ==================== -->
<section class="page-header">
    <div class="container">
        <h1 class="text-center fade-in">Daftar Akun <span class="text-warning">SweetBite</span></h1>
        <p class="text-center text-muted">Bergabunglah untuk mendapatkan penawaran spesial</p>
    </div>
</section>

<!-- ==================== FORM REGISTER ==================== -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="register-form">
                <h4 class="text-center mb-4">
                    <i class="fas fa-user-plus text-warning"></i> Form Pendaftaran
                </h4>
                <form id="registerForm">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama lengkap" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Pilih username" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Minimal 5 karakter" required>
                    </div>
                    
                    <button type="submit" class="btn btn-warning w-100">
                        <i class="fas fa-check me-2"></i>Daftar Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ==================== TABEL DATA USER ==================== -->
<div class="container my-5">
    <div class="table-container">
        <h4 class="text-center mb-4">
            <i class="fas fa-table"></i> Data Pengguna Terdaftar
        </h4>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="userTable">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody id="userTableBody">
                    <tr>
                        <td colspan="4" class="text-center text-muted">
                            Belum ada data. Silakan daftar melalui form di atas.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>