<?php
//BAGIAN DATA
// disini bisa untuk menambah, menghapus, atau mengedit artikel
$data_artikel = [
    [
        "gambar" => "assets/setup.jpg",
        "alt"    => "Perpustakaan Kampus",
        "judul"  => "My Set Up Dekstop",
        "isi"    => "Menciptakan ruang kerja yang nyaman dan minimalis adalah kunci produktivitas.",
        "waktu"  => "Last updated 3 mins ago"
    ],
    [
        "gambar" => "assets/ruang kelas udinus.jpg",
        "alt"    => "Ruang Kelas",
        "judul"  => "Ruang Kelas",
        "isi"    => "Bukan hanya tempat belajar, tapi saksi bisu dari ribuan cerita, tawa, dan persahabatan yang terjalin",
        "waktu"  => "Last updated 3 mins ago"
    ],
    [
        "gambar" => "assets/kelompok.jpg",
        "alt"    => "Kelompok Belajar",
        "judul"  => "Kelompok Belajar",
        "isi"    => "Belajar bersama tidak hanya membuat materi sulit jadi lebih mudah, tapi juga tentang berbagi tawa dan candaan.",
        "waktu"  => "Last updated 3 mins ago"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Perspective - Article</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body id="page-top">

    <nav>
        <div class="nav-container">
            <a href="index.php#page-top" class="brand">My Perspective</a>
            <ul class="nav-links">
                <li><a href="index.php#page-top">Home</a></li>
                <li><a href="article.php#page-top" class="active">Article</a></li>
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
        <h1 class="page-title">Article</h1>

        <div class="card-grid">
            
            <?php foreach ($data_artikel as $item) : ?>
                <div class="card">
                    <img src="<?= $item['gambar']; ?>" alt="<?= $item['alt']; ?>">
                    <div class="card-content">
                        <h3><?= $item['judul']; ?></h3>
                        <p><?= $item['isi']; ?></p>
                        <p class="meta"><?= $item['waktu']; ?></p>
                    </div>
                </div>
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