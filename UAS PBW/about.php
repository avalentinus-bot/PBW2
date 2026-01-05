<?php
// --- LOGIKA PHP (SAPAAN OTOMATIS) ---
// Mengatur zona waktu ke WIB (Waktu Indonesia Barat)
date_default_timezone_set('Asia/Jakarta');

// jam saat ini (format 0-23)
$jam = date('H');

// ini untuk sapaan berdasarkan jam
if ($jam >= 3 && $jam < 11) {
    $sapaan = "Selamat Pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat Siang";
} elseif ($jam >= 15 && $jam < 18) {
    $sapaan = "Selamat Sore";
} else {
    $sapaan = "Selamat Malam";
}

$nama = "Abednego"; // ini untuk menampilkan nama yang di about
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Perspective - About</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body id="page-top">

    <nav>
        <div class="nav-container">
            <a href="index.php#page-top" class="brand">My Perspective</a>
            <ul class="nav-links">
                <li><a href="index.php#page-top">Home</a></li>
                <li><a href="article.php#page-top">Article</a></li>
                <li><a href="gallery.php#page-top">Gallery</a></li>
                <li><a href="about.php#page-top" class="active">About</a></li>
                <li>
                    <button id="dark-btn" class="theme-btn" title="Dark Mode">
                        <i class="fas fa-moon"></i>
                    </button>
                    <button id="light-btn" class="theme-btn" title="Light Mode">
                        <i class="fas fa-sun"></i>
                    </button>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <h1 class="page-title">Tentang Saya</h1>
        
        <section class="about-me">
            <div class="about-container">
                
                <div class="about-image">
                    <img src="assets/me.jpg" alt="Foto Profil">
                </div>
                
                <div class="about-text">
                    <h3>Hi, <?= $sapaan; ?>, Saya <?= $nama; ?></h3>

                    <p>
                        Selamat datang di <strong>"My Perspective"</strong>, sebuah ruang digital tempat saya berbagi cara saya melihat dunia. Saya seorang penikmat fotografi.
                    </p>
                    <p>
                        Bagi saya, fotografi bukan hanya soal menekan tombol, tapi tentang menangkap momen, membingkai emosi, dan menemukan keindahan dalam hal-hal sederhana sehari-hari. Website ini adalah jurnal visual dan catatan refleksi pribadi saya.
                    </p>
                    <p>
                        Silakan lihat-lihat galeri saya atau baca beberapa jejak pikiran saya. Terima kasih sudah mampir!
                    </p>
                </div>

            </div>
        </section>
    </main>
    
    <footer>
        <div class="social-icons">
            <a href="https://www.instagram.com/abedvaln/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/abednego-valentinus-20777a344/" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
        <p>Abednego'v © <?= date('Y'); ?></p>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>