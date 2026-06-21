<?php
$pageTitle = "Kontak - HUMANIS";
include 'components/header.php';
?>

<!-- Bagian Header Halaman -->
<div class="bg-humanis text-white py-5">
    <div class="container text-center mt-4">
        <h1 class="fw-bold">Hubungi Kami</h1>
        <p class="lead opacity-75">Kami siap menjawab pertanyaan dan menjalin kolaborasi dengan Anda.</p>
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
                    <!-- Perhatikan action formulirnya sekarang mengarah ke proses-kontak.php -->
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
                        Yayasan Center for Human Centered STEM Education Indonesia (HUMANIS)<br>
                        Jl. Ngumbul Raya, Ngumbul, Tamanan, Banguntapan, Bantul, DI Yogyakarta
                    </p>
                </div>
            </div>

            <!-- Kontak Umum -->
            <div class="d-flex mb-4 align-items-start">
                <i class="bi bi-headset text-humanis fs-3 me-3 mt-1"></i>
                <div>
                    <h5 class="fw-bold mb-1">Kontak Utama</h5>
                    <ul class="list-unstyled text-muted mb-0" style="line-height: 1.8;">
                        <li><strong>Email:</strong> humanisedu@gmail.com</li>
                        <li><strong>WA Official:</strong> 087767801947</li>
                        <li><strong>Website:</strong> www.humaniscenter.id</li>
                    </ul>
                </div>
            </div>

            <!-- Email Divisi -->
            <h5 class="fw-bold text-dark mt-5 mb-3">Email Per Divisi</h5>
            <div class="table-responsive">
                <table class="table table-sm table-borderless table-hover text-muted">
                    <tbody>
                        <tr>
                            <td style="width: 40%;"><i class="bi bi-envelope me-2"></i> Umum</td>
                            <td><a href="mailto:info@humanis.id" class="text-decoration-none text-muted">info@humanis.id</a></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope me-2"></i> Publikasi Ilmiah</td>
                            <td><a href="mailto:jurnal@humanis.id" class="text-decoration-none text-muted">jurnal@humanis.id</a></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope me-2"></i> HUMANIS Press</td>
                            <td><a href="mailto:press@humanis.id" class="text-decoration-none text-muted">press@humanis.id</a></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope me-2"></i> Pelatihan & Pengabdian</td>
                            <td><a href="mailto:pelatihan@humanis.id" class="text-decoration-none text-muted">pelatihan@humanis.id</a></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope me-2"></i> Learning Center</td>
                            <td><a href="mailto:learning@humanis.id" class="text-decoration-none text-muted">learning@humanis.id</a></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope me-2"></i> Riset</td>
                            <td><a href="mailto:riset@humanis.id" class="text-decoration-none text-muted">riset@humanis.id</a></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope me-2"></i> Kerja Sama</td>
                            <td><a href="mailto:kerjasama@humanis.id" class="text-decoration-none text-muted">kerjasama@humanis.id</a></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope me-2"></i> Karir</td>
                            <td><a href="mailto:karir@humanis.id" class="text-decoration-none text-muted">karir@humanis.id</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Media Sosial -->
            <h5 class="fw-bold text-dark mt-4 mb-3">Media Sosial</h5>
            <div class="d-flex flex-wrap gap-2">
                <a href="#" class="btn btn-outline-secondary border-secondary rounded-pill"><i class="bi bi-instagram me-1"></i> @humanis.id</a>
                <a href="#" class="btn btn-outline-secondary border-secondary rounded-pill"><i class="bi bi-youtube me-1"></i> HUMANIS Official</a>
                <a href="#" class="btn btn-outline-secondary border-secondary rounded-pill"><i class="bi bi-linkedin me-1"></i> HUMANIS Indonesia</a>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>