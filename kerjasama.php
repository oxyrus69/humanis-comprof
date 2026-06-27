<?php
$pageTitle = "Kerja Sama - HUMANIS";
include 'components/header.php';
include 'koneksi.php'; // Hubungkan ke database

// MENGAMBIL DATA DARI DATABASE
$query = "SELECT * FROM pengaturan_web";
$result = mysqli_query($conn, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[$row['kunci']] = $row['nilai'];
}
?>

<!-- Bagian Header Halaman -->
<div class="bg-humanis text-white py-5">
    <div class="container text-center mt-4">
        <h1 class="fw-bold"><?= htmlspecialchars($data['kerjasama_hero_judul'] ?? 'Kerja Sama') ?></h1>
        <p class="lead opacity-75"><?= htmlspecialchars($data['kerjasama_hero_desk'] ?? 'Sinergi dan kolaborasi.') ?></p>
    </div>
</div>

<div class="container my-5">

    <!-- 1. Bagian Mitra Kami -->
    <section id="mitra" class="mb-5 pt-4">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">Mitra Kami</h2>
        <p style="text-align: justify; line-height: 1.8;">
            <?= nl2br(htmlspecialchars($data['kerjasama_mitra_desk'] ?? '')) ?>
        </p>

        <!-- Tabel Data Mitra dari Visual Editor -->
        <div class="table-responsive">
            <?= $data['kerjasama_mitra_tabel'] ?? '' ?>
        </div>
    </section>

    <!-- 2. Bagian Peluang Kolaborasi -->
    <section id="peluang" class="mb-5 pt-4">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">Peluang Kolaborasi</h2>
        <p style="text-align: justify; line-height: 1.8;">
            <?= nl2br(htmlspecialchars($data['kerjasama_peluang_desk'] ?? '')) ?>
        </p>

        <div class="row mt-4">
            <!-- Kotak Kiri: Target Kolaborasi -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-building me-2 text-humanis"></i>Kami Terbuka Untuk:</h5>
                        <!-- Menampilkan daftar dari visual editor -->
                        <?= $data['kerjasama_peluang_list1'] ?? '' ?>
                    </div>
                </div>
            </div>

            <!-- Kotak Kanan: Bidang Kolaborasi -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-briefcase me-2 text-humanis"></i>Bidang Kolaborasi:</h5>
                        <!-- Menampilkan daftar dari visual editor -->
                        <?= $data['kerjasama_peluang_list2'] ?? '' ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="text-center mt-3">
            <a href="contact.php" class="btn btn-humanis bg-humanis text-white rounded-pill px-4 shadow-sm">Hubungi Kami untuk Kolaborasi <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>

    <!-- 3. Bagian Sponsorship & Hibah -->
    <section id="sponsorship" class="mb-5 pt-4 pb-4">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">Sponsorship / Hibah</h2>

        <!-- Kotak Hijau Muda -->
        <div class="card border-0 shadow-sm" style="background-color: #e0f2f1;">
            <div class="card-body p-4">
                <p style="text-align: justify; line-height: 1.8;" class="mb-4">
                    <?= nl2br(htmlspecialchars($data['kerjasama_sponsor_desk'] ?? '')) ?>
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <!-- Menampilkan daftar kolom kiri dari visual editor -->
                        <?= $data['kerjasama_sponsor_list1'] ?? '' ?>
                    </div>
                    <div class="col-md-6">
                        <!-- Menampilkan daftar kolom kanan dari visual editor -->
                        <?= $data['kerjasama_sponsor_list2'] ?? '' ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php include 'components/footer.php'; ?>