<?php
$pageTitle = "Kerja Sama - HUMANIS";
include 'components/header.php';
?>

<!-- Bagian Header Halaman -->
<div class="bg-humanis text-white py-5">
    <div class="container text-center mt-4">
        <h1 class="fw-bold">Kerja Sama</h1>
        <p class="lead opacity-75">Sinergi dan kolaborasi untuk mewujudkan pendidikan STEM yang berpusat pada manusia.</p>
    </div>
</div>

<div class="container my-5">

    <!-- 1. Bagian Mitra Kami -->
    <section id="mitra" class="mb-5 pt-4">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">Mitra Kami</h2>
        <p style="text-align: justify; line-height: 1.8;">Berikut adalah berbagai instansi yang telah menjalin kerja sama strategis dengan Yayasan HUMANIS:</p>

        <!-- Tabel Data Mitra -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover mt-3">
                <thead class="table-light">
                    <tr>
                        <th scope="col" style="width: 10%; text-align: center;">No.</th>
                        <th scope="col" style="width: 45%;">Nama Mitra</th>
                        <th scope="col">Jenis Kerja Sama</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>[Nama Mitra 1]</td>
                        <td>[Jenis Kerja Sama]</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>[Nama Mitra 2]</td>
                        <td>[Jenis Kerja Sama]</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>[Nama Mitra 3]</td>
                        <td>[Jenis Kerja Sama]</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- 2. Bagian Peluang Kolaborasi -->
    <section id="peluang" class="mb-5 pt-4">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">Peluang Kolaborasi</h2>
        <p style="text-align: justify; line-height: 1.8;">Kami senantiasa terbuka untuk menjalin kerja sama dengan berbagai pihak untuk mengembangkan pendidikan.</p>

        <div class="row mt-4">
            <!-- Kotak Kiri: Target Kolaborasi -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-building me-2 text-humanis"></i>Kami Terbuka Untuk:</h5>
                        <ul style="line-height: 1.8;">
                            <li>Perguruan Tinggi</li>
                            <li>Sekolah</li>
                            <li>Pemerintah</li>
                            <li>Dunia Usaha/Industri</li>
                            <li>Lembaga Non-Profit</li>
                            <li>Organisasi Masyarakat</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Kotak Kanan: Bidang Kolaborasi -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-briefcase me-2 text-humanis"></i>Bidang Kolaborasi:</h5>
                        <ul style="line-height: 1.8;">
                            <li>Riset dan publikasi</li>
                            <li>Pelatihan dan pengabdian</li>
                            <li>Penerbitan buku</li>
                            <li>Program pembelajaran</li>
                            <li>Pengembangan kurikulum</li>
                            <li>Beasiswa dan pendampingan</li>
                        </ul>
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
                    HUMANIS membuka peluang sponsorship dan hibah untuk mendukung keberlangsungan program-program berdampak positif:
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="mb-0" style="line-height: 1.8;">
                            <li><strong>Penelitian:</strong> Dukungan dana untuk riset pendidikan STEM.</li>
                            <li><strong>Pelatihan:</strong> Pembiayaan program peningkatan kompetensi pendidik.</li>
                            <li><strong>Pengabdian Masyarakat:</strong> Bantuan untuk pelaksanaan program relawan.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="mb-0" style="line-height: 1.8;">
                            <li><strong>Penerbitan Buku:</strong> Subsidi pencetakan dan distribusi buku.</li>
                            <li><strong>Program Beasiswa:</strong> Bantuan untuk siswa dan mahasiswa berprestasi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php include 'components/footer.php'; ?>