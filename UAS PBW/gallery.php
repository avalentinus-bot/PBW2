<?php
// --- DATA FOTO ---
// Masukkan lokasi/nama file fotomu di sini.
// Kalau misal mau nambahin foto, tinggal tambah baris baru di bawahnya.
$daftar_foto = [
    "assets/image 4.jpg",
    "assets/sea.jpg",
    "assets/image5.jpg",
    "assets/image7.jpg",
    "assets/image6.jpg",
    "assets/image8.jpg",
    "assets/image9.jpg",
    "assets/image10.jpg"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Perspective - Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body id="page-top">

    <nav>
        <div class="nav-container">
            <a href="index.php" class="brand">My Perspective</a>
            <ul class="nav-links">
                <li><a href="index.php#page-top">Home</a></li>
                
                <li><a href="article.php#page-top">Article</a></li>
                
                <li><a href="gallery.php#page-top" class="active">Gallery</a></li>
                
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
        <h1 class="page-title">Gallery</h1>
        
        <div class="main-gallery-grid">
            
            <?php foreach ($daftar_foto as $foto) : ?>
                <img src="<?= $foto; ?>" alt="Galeri Foto Abednego" loading="lazy">
            <?php endforeach; ?>

        </div>
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