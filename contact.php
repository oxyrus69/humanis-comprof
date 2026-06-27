<?php
$pageTitle = "Kontak - HUMANIS";
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
        <h1 class="fw-bold"><?= htmlspecialchars($data['kontak_hero_judul'] ?? 'Hubungi Kami') ?></h1>
        <p class="lead opacity-75"><?= htmlspecialchars($data['kontak_hero_desk'] ?? 'Kami siap menjawab pertanyaan dan menjalin kolaborasi dengan Anda.') ?></p>
    </div>
</div>

<div class="container my-5">
    <div class="row">

        <!-- Kolom Kiri: Form Kontak -->
        <div class="col-lg-6 mb-5 pe-lg-5">
            <h3 class="fw-bold text-humanis border-bottom pb-2 mb-4">Kirim Pesan</h3>

            <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
                <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i> <strong>Terima kasih!</strong> Pesan Anda telah berhasil dikirim.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['status']) && $_GET['status'] == 'gagal'): ?>
                <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i> <strong>Mohon maaf!</strong> Pesan gagal dikirim. Pastikan semua kolom terisi (atau fitur email peladen belum aktif).
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
                </div>
            <?php endif; ?>

            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body p-4">
                    <form action="proses-kontak.php" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="subjek" class="form-label fw-semibold">Subjek</label>
                            <select class="form-select" id="subjek" name="subjek" required>
                                <option value="" selected disabled>Pilih Subjek Pesan...</option>
                                <option value="Publikasi Ilmiah">Publikasi Ilmiah</option>
                                <option value="HUMANIS Press">HUMANIS Press</option>
                                <option value="Pelatihan">Pelatihan</option>
                                <option value="Learning Center">Learning Center</option>
                                <option value="Riset">Riset</option>
                                <option value="Kerja Sama">Kerja Sama</option>
                                <option value="Karir">Karir</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="pesan" class="form-label fw-semibold">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-humanis bg-humanis text-white w-100 fw-bold py-2 shadow-sm">Kirim Pesan <i class="bi bi-send ms-2"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Informasi Kontak Lengkap -->
        <div class="col-lg-6 mb-5">
            <h3 class="fw-bold text-humanis border-bottom pb-2 mb-4">Informasi Kontak</h3>

            <!-- Alamat Utama -->
            <div class="d-flex mb-4 align-items-start">
                <i class="bi bi-geo-alt-fill text-humanis fs-3 me-3 mt-1"></i>
                <div>
                    <h5 class="fw-bold mb-1">Alamat Kantor Pusat</h5>
                    <p class="text-muted mb-0" style="line-height: 1.8;">
                        <?= $data['kontak_alamat'] ?? 'Alamat Belum Diatur' ?>
                    </p>
                </div>
            </div>

            <!-- Kontak Umum -->
            <div class="d-flex mb-4 align-items-start">
                <i class="bi bi-headset text-humanis fs-3 me-3 mt-1"></i>
                <div>
                    <h5 class="fw-bold mb-1">Kontak Utama</h5>
                    <ul class="list-unstyled text-muted mb-0" style="line-height: 1.8;">
                        <li><strong>Email:</strong> <?= htmlspecialchars($data['kontak_email_utama'] ?? '') ?></li>
                        <li><strong>WA Official:</strong> <?= htmlspecialchars($data['kontak_wa_utama'] ?? '') ?></li>
                        <li><strong>Website:</strong> <?= htmlspecialchars($data['kontak_website'] ?? '') ?></li>
                    </ul>
                </div>
            </div>

            <!-- Email Divisi -->
            <h5 class="fw-bold text-dark mt-5 mb-3">Email Per Divisi</h5>
            <div class="table-responsive">
                <!-- Tampil dari Visual Editor Admin -->
                <?= $data['kontak_email_divisi'] ?? '' ?>
            </div>

            <!-- Media Sosial -->
            <h5 class="fw-bold text-dark mt-4 mb-3">Media Sosial</h5>
            <!-- Tampil dari Visual Editor Admin -->
            <?= $data['kontak_sosmed'] ?? '' ?>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>