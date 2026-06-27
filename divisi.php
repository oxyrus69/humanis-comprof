<?php
$pageTitle = "Divisi Kami - HUMANIS";
include 'components/header.php';
include 'koneksi.php'; // Pastikan koneksi database dipanggil

// MENGAMBIL DATA DARI DATABASE
$query = "SELECT * FROM pengaturan_web";
$result = mysqli_query($conn, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[$row['kunci']] = $row['nilai'];
}
?>

<div class="bg-humanis text-white py-5">
    <div class="container text-center mt-4">
        <h1 class="fw-bold"><?= $data['divisi_hero_judul'] ?? 'Divisi Kami' ?></h1>
        <p class="lead opacity-75"><?= $data['divisi_hero_desk'] ?? 'Pilar layanan utama Yayasan HUMANIS dalam mewujudkan pendidikan STEM yang humanis.' ?></p>
    </div>
</div>

<div class="container my-5">

    <section id="publikasi" class="mb-5 pt-5">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">1. Divisi Publikasi Ilmiah</h2>
        <p class="mb-4" style="text-align: justify; line-height: 1.8;">
            <?= nl2br(htmlspecialchars($data['divisi_1_desk'] ?? '')) ?>
        </p>
        <div class="card border-0 shadow-sm bg-light">
            <div class="card-body p-4">
                <h5 class="fw-bold text-dark mb-3">Jurnal yang Dikelola:</h5>
                <ul class="mb-0" style="line-height: 1.8;">
                    <li>Journal of Islamic STEM Education</li>
                    <li>Madrasah Ibtidaiyah</li>
                    <li>Journal of Computational Thinking in Education</li>
                    <li>Journal of AI, Law, and Islamic Ethics</li>
                    <li>Journal of Elementary Mathematics Education</li>
                </ul>
                <a href="#" class="btn btn-outline-success mt-3 rounded-pill btn-sm px-4">Lihat Daftar Jurnal <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <section id="penerbitan" class="mb-5 pt-5">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">2. Divisi Penerbitan dan Percetakan (HUMANIS Press)</h2>
        <p style="text-align: justify; line-height: 1.8;">
            <?= nl2br(htmlspecialchars($data['divisi_2_desk'] ?? '')) ?>
        </p>
        
        <h4 class="fw-bold text-secondary mt-4 mb-3">Layanan Penerbitan</h4>
        <p>Silakan unduh atau lihat penawaran lengkap kami (Konten dinamis dapat ditambahkan dari panel admin jika dibutuhkan nantinya).</p>
    </section>

    <section id="pelatihan" class="mb-5 pt-5">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">3. Divisi Pengembangan Profesi, Pelatihan & Pengabdian</h2>
        <p style="text-align: justify; line-height: 1.8;">
            <?= nl2br(htmlspecialchars($data['divisi_3_desk'] ?? '')) ?>
        </p>
        <div class="row mt-4">
            <div class="col-md-6 mb-3">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-laptop me-2 text-humanis"></i>Program Pelatihan</h5>
                        <p>Konten dapat dilihat melalui proposal kegiatan atau brosur terbaru.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card h-100 border-0 shadow-sm bg-light">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-people me-2 text-humanis"></i>Pengabdian Masyarakat</h5>
                        <p>Konten dapat dilihat melalui proposal kegiatan atau brosur terbaru.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="learning" class="mb-5 pt-5">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">4. Divisi Pusat Pembelajaran (Learning Center)</h2>
        <p style="text-align: justify; line-height: 1.8;">
            <?= nl2br(htmlspecialchars($data['divisi_4_desk'] ?? '')) ?>
        </p>
        <div class="table-responsive mt-3">
            <?= $data['divisi_4_tabel'] ?? '' ?>
        </div>
        <a href="contact.php" class="btn btn-humanis bg-humanis text-white rounded-pill px-4 mt-2">Daftar Sekarang <i class="bi bi-arrow-right"></i></a>
    </section>

    <section id="riset" class="mb-5 pt-5 pb-5">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">5. Divisi Riset</h2>
        <p style="text-align: justify; line-height: 1.8;">
            <?= nl2br(htmlspecialchars($data['divisi_5_desk'] ?? '')) ?>
        </p>

        <h5 class="fw-bold mt-4 text-dark">Roadmap Riset</h5>
        <div class="table-responsive mt-3 mb-4">
            <?= $data['divisi_5_tabel'] ?? '' ?>
        </div>

        <div class="alert alert-success border-0 shadow-sm mt-4">
            <h6 class="fw-bold mb-2">Program Fellowship</h6>
            <p class="mb-0 small">HUMANIS membuka program <strong>Research Fellowship</strong> (dosen/peneliti), <strong>Research Assistant</strong> (mahasiswa), dan <strong>Internship</strong> berbasis riset. Hubungi riset@humanis.id untuk informasi lebih lanjut.</p>
        </div>
    </section>

</div>

<?php include 'components/footer.php'; ?>