<?php
$pageTitle = "Beranda - HUMANIS STEM Education";
// Memanggil jembatan koneksi ke database
include 'koneksi.php'; 
include 'components/header.php';
?>

<div class="hero-section text-center">
    <div class="container">
        <!-- Mengambil data judul hero dari database secara dinamis -->
        <h1 class="display-4 fw-bold mb-3"><?= get_pengaturan('hero_judul', $conn) ?></h1>
        
        <!-- Mengambil data deskripsi hero dari database -->
        <p class="lead mb-4 opacity-75"><?= get_pengaturan('hero_deskripsi', $conn) ?></p>

        <a href="divisi.php" class="btn btn-light btn-lg rounded-pill text-humanis fw-bold px-5 shadow-sm">Jelajahi Divisi Kami</a>
    </div>
</div>

<div class="container mt-5 pt-5 mb-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <h2 class="fw-bold text-humanis mb-3">Tentang HUMANIS</h2>
            <div class="mx-auto mb-4" style="width: 60px; height: 3px; background-color: #00796b;"></div>

            <!-- Mengambil teks tentang dari database dan menggunakan nl2br untuk merapikan paragraf -->
            <p class="text-muted" style="line-height: 1.8; text-align: justify;">
                <?= nl2br(get_pengaturan('home_about_teks', $conn)) ?>
            </p>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>