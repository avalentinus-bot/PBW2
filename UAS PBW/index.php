<?php
//LOGIKA PHP (TANGGAL & QUOTE ACAK)
date_default_timezone_set('Asia/Jakarta');

// 1. Menampilkan Tanggal Hari Ini (Format: Senin, 01 Januari 2026)
$tanggal_hari_ini = date("l, d F Y"); 

// 2. Database Kutipan (Array)
// Kamu bisa isi kutipan favoritmu sebanyak-banyaknya di sini.
$kumpulan_quote = [
    [
        "isi" => "Satu-satunya cara untuk melakukan pekerjaan hebat adalah dengan mencintai apa yang Anda lakukan.",
        "tokoh" => "Steve Jobs"
    ],
    [
        "isi" => "Bagi saya, fotografi adalah seni observasi. Ini tentang menemukan sesuatu yang menarik di tempat yang biasa.",
        "tokoh" => "Elliott Erwitt"
    ],
    [
        "isi" => "Jangan memotret apa yang terlihat, potretlah apa yang terasa.",
        "tokoh" => "David Alan Harvey"
    ],
    [
        "isi" => "Hal terbaik mengenai sebuah gambar adalah gambar itu tidak pernah berubah, bahkan ketika orang-orang di dalamnya sudah berubah.",
        "tokoh" => "Andy Warhol"
    ],
    [
        "isi" => "Fotografi adalah kisah yang gagal saya ceritakan melalui kata-kata.",
        "tokoh" => "Destin Sparks"
    ],
    [
        "isi" => "Pilihlah pilihanmu tanpa ada kata penyesalan",
        "tokoh" => "Baraza"
    ]
];

// Mengambil 1 kutipan secara acak (Random)
$quote_acak = $kumpulan_quote[array_rand($kumpulan_quote)];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Perspective - Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body id="page-top">
    <nav>
        <div class="nav-container">
            <a href="index.php#page-top" class="brand">My Perspective</a>
            <ul class="nav-links">
                <li><a href="index.php#page-top" class="active">Home</a></li>
                <li><a href="article.php#page-top">Article</a></li>
                <li><a href="gallery.php#page-top">Gallery</a></li>
                <li><a href="about.php#page-top">About</a></li>
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
        <section class="hero">
            <div class="hero-text">
                <h1>Life Through My Lens, Everyday.</h1>
                <p>A daily journal of captured moments and personal reflections.</p>
                
                <p id="datetime" style="font-weight: bold; color: #666;">
                    <i class="far fa-calendar-alt"></i> <?= $tanggal_hari_ini; ?>
                </p>
            </div>
            <div class="hero-image">
                <img src="assets/image5.jpg" alt="Memories Polaroid">
            </div>
        </section>

        <section class="gallery-preview">
            
            <h2 class="section-title">Galeri Pilihan</h2>
            
            <div class="preview-grid">   
                <a href="gallery.php" class="preview-item">
                    <img src="assets/sea.jpg" alt="Galeri Foto 1">
                </a>
                
                <a href="gallery.php" class="preview-item">
                    <img src="assets/image 4.jpg" alt="Galeri Foto 2">
                </a>

                <a href="gallery.php" class="preview-item">
                    <img src="assets/image6.jpg" alt="Galeri Foto 3">
                </a>

                <a href="gallery.php" class="preview-item">
                    <img src="assets/image10.jpg" alt="Galeri Foto 4">
                </a>  
            </div>
            
            <div class="cta-container">
                <a href="gallery.php" class="cta-button">Lihat Selengkapnya</a>
            </div>            
        </section>

        <section class="quote-section">
            
            <h2 class="section-title">Kutipan Hari Ini</h2>
            
            <blockquote>
                <p>"<?= $quote_acak['isi']; ?>"</p>
                <footer>— <?= $quote_acak['tokoh']; ?></footer>
            </blockquote>

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