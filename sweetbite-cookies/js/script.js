// ============================================
// SCRIPT.JS - SweetBite Cookies
// Pembuat: Moh Dimas Riyan
// WhatsApp: 0857-3709-9324
// Project Ujikom Kelas X - Landing Page UMKM
// ============================================

// ============================================
// DATA STORAGE (Simulasi tanpa database)
// Array untuk menyimpan data user
// ============================================
let usersData = [];

// ============================================
// FUNGSI REGISTER (DOM Manipulation)
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    // Informasi developer di console
    console.log('🍪 SweetBite Cookies Website Ready!');
    console.log('👨‍💻 Developed by: Moh Dimas Riyan');
    console.log('📞 WhatsApp: 0857-3709-9324');
    console.log('📝 Informasi Login:');
    console.log('   Username: admin');
    console.log('   Password: 12345');
    
    // Cek halaman register
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const fullName = document.getElementById('fullName').value;
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Validasi form
            if (fullName === '' || username === '' || email === '' || password === '') {
                alert('⚠️ Semua field harus diisi!');
                return;
            }
            
            if (password.length < 5) {
                alert('⚠️ Password minimal 5 karakter!');
                return;
            }
            
            if (!email.includes('@') || !email.includes('.')) {
                alert('⚠️ Email tidak valid!');
                return;
            }
            
            // Simpan data
            usersData.push({
                fullName: fullName,
                username: username,
                email: email,
                password: password
            });
            
            updateUserTable();
            registerForm.reset();
            alert(`✅ Selamat! ${fullName} berhasil terdaftar.`);
            console.log('Data User Terbaru:', usersData);
        });
    }
    
    updateUserTable();
});

// ============================================
// FUNGSI UPDATE TABEL
// ============================================
function updateUserTable() {
    const tableBody = document.getElementById('userTableBody');
    if (!tableBody) return;
    
    if (usersData.length === 0) {
        tableBody.innerHTML = '<tr><td colspan="4" class="text-center text-muted">Belum ada data. Silakan daftar melalui form di atas.</td></tr>';
        return;
    }
    
    let html = '';
    usersData.forEach((user, index) => {
        html += `
            <tr>
                <td>${index + 1}</td>
                <td>${user.fullName}</td>
                <td>${user.username}</td>
                <td>${user.email}</td>
            </tr>
        `;
    });
    tableBody.innerHTML = html;
}

// ============================================
// FUNGSI LOGIN (Hardcoded)
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const username = document.getElementById('loginUsername').value;
            const password = document.getElementById('loginPassword').value;
            
            if (username === 'admin' && password === '12345') {
                alert('✅ Login Berhasil! Selamat datang di SweetBite Cookies.');
                console.log('Login berhasil untuk user:', username);
                loginForm.reset();
            } else {
                alert('❌ Username atau Password Salah!\n\nGunakan:\nUsername: admin\nPassword: 12345');
                console.log('Login gagal untuk user:', username);
            }
        });
    }
});

// ============================================
// FUNGSI MODAL DETAIL PRODUK
// ============================================
function showProductDetail(name, price, description, image) {
    const modalImage = document.getElementById('modalProductImage');
    const modalProductTitle = document.getElementById('modalProductTitle');
    const modalProductDesc = document.getElementById('modalProductDesc');
    const modalProductPrice = document.getElementById('modalProductPrice');
    
    if (modalProductTitle) modalProductTitle.textContent = name;
    if (modalProductDesc) modalProductDesc.textContent = description;
    if (modalProductPrice) modalProductPrice.textContent = price;
    if (modalImage) {
        modalImage.src = image;
        modalImage.alt = name;
    }
    
    const modalElement = document.getElementById('productModal');
    if (modalElement) {
        const modal = new bootstrap.Modal(modalElement);
        modal.show();
    }
}

// ============================================
// FUNGSI ORDER ALERT
// ============================================
function showOrderAlert() {
    alert('🍪 Terima kasih! Pesanan Anda akan segera diproses.\n\nSilakan hubungi kami di WhatsApp: 0857-3709-9324');
}

// ============================================
// BACK TO TOP BUTTON
// ============================================
window.addEventListener('scroll', function() {
    const backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
        backToTopBtn.style.display = window.scrollY > 300 ? 'flex' : 'none';
    }
});

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}