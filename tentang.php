<?php
$pageTitle = "Tentang Kami - HUMANIS";
// Memanggil jembatan koneksi ke database agar fungsi get_pengaturan() bisa digunakan
include 'koneksi.php'; 
include 'components/header.php';
?>

<!-- Header Halaman -->
<div class="bg-humanis text-white py-5">
    <div class="container text-center mt-4">
        <h1 class="fw-bold">Tentang HUMANIS</h1>
        <p class="lead opacity-75">Mengenal lebih dekat pusat unggulan pendidikan STEM yang memanusiakan manusia.</p>
    </div>
</div>

<div class="container my-5">

    <!-- Bagian Sejarah (Data Dinamis dari Database) -->
    <section id="sejarah" class="mb-5 pt-4">
        <h2 class="fw-bold text-humanis mb-3 border-bottom pb-2">Sejarah HUMANIS</h2>
        <div style="text-align: justify; line-height: 1.8;">
            <!-- Menggunakan nl2br agar paragraf dari text-area admin terbaca rapi -->
            <?= nl2br(get_pengaturan('tentang_sejarah', $conn)) ?>
        </div>
    </section>

    <!-- Bagian Visi & Misi -->
    <section id="visi-misi" class="mb-5 pt-4">
        <div class="row">
            <!-- Visi (Dinamis dengan nl2br) -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="fw-bold text-humanis mb-3">Visi</h3>
                        <p style="text-align: justify; line-height: 1.8;">
                            <?= nl2br(get_pengaturan('tentang_visi', $conn)) ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Misi (Dinamis, TANPA nl2br karena berisi tag HTML) -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="fw-bold text-humanis mb-3">Misi</h3>
                        <?= get_pengaturan('tentang_misi', $conn) ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nilai-Nilai Utama (Dinamis, TANPA nl2br) -->
        <div class="mt-4">
            <h4 class="fw-bold text-secondary mb-3">Nilai-Nilai Utama HUMANIS</h4>
            <p>Seluruh personalia Yayasan HUMANIS wajib mempedomani nilai-nilai utama berikut:</p>
            <div class="table-responsive">
                <?= get_pengaturan('tentang_nilai', $conn) ?>
            </div>
        </div>
    </section>

    <!-- Bagian Struktur Organisasi (Dinamis, TANPA nl2br) -->
    <section id="struktur" class="mb-5 pt-4">
        <h2 class="fw-bold text-humanis mb-4 border-bottom pb-2">Struktur Organisasi (2026-2030)</h2>

        <!-- Gambar Bagan Organisasi -->
        <div class="text-center mb-5">
            <img src="public/struktur.jpeg" alt="Bagan Struktur Organisasi Yayasan HUMANIS" class="img-fluid rounded shadow-sm border" style="max-width: 100%; height: auto;">
        </div>

        <div class="table-responsive">
            <?= get_pengaturan('tentang_struktur', $conn) ?>
        </div>
    </section>

</div>

<?php include 'components/footer.php'; ?>