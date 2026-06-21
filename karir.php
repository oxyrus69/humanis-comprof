<?php
$pageTitle = "Karir - HUMANIS";
include 'components/header.php';
?>

<div class="bg-humanis text-white py-5">
    <div class="container text-center mt-4">
        <h1 class="fw-bold">Karir & Kesempatan</h1>
        <p class="lead opacity-75">Mari bertumbuh bersama kami untuk mewujudkan pendidikan STEM yang memanusiakan manusia.</p>
    </div>
</div>

<div class="container my-5">

    <section id="lowongan" class="mb-5 pt-4">
        <h2 class="fw-bold text-humanis border-bottom pb-2 mb-4">Lowongan Kerja</h2>
        <p style="text-align: justify; line-height: 1.8;">Berikut adalah daftar lowongan pekerjaan yang saat ini tersedia di Yayasan HUMANIS:</p>

        <div class="table-responsive">
            <table class="table table-bordered table-hover mt-3">
                <thead class="table-light">
                    <tr>
                        <th scope="col" style="width: 10%; text-align: center;">No.</th>
                        <th scope="col" style="width: 40%;">Posisi</th>
                        <th scope="col" style="width: 25%;">Lokasi</th>
                        <th scope="col" style="width: 25%;">Batas Pendaftaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="fw-semibold">[Posisi 1]</td>
                        <td>[Lokasi]</td>
                        <td>[Tanggal]</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td class="fw-semibold">[Posisi 2]</td>
                        <td>[Lokasi]</td>
                        <td>[Tanggal]</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="alert alert-secondary mt-3 border-0">
            <small><i class="bi bi-info-circle me-2"></i>Jika belum ada lowongan yang sesuai, Anda tetap dapat mengirimkan CV ke <strong>karir@humanis.id</strong> untuk masuk ke dalam pangkalan data kami.</small>
        </div>
    </section>

    <section id="magang" class="mb-5 pt-4">
        <div class="row align-items-center bg-light rounded-4 shadow-sm p-4 border-0">
            <div class="col-md-7 mb-4 mb-md-0">
                <h2 class="fw-bold text-humanis mb-3">Program Magang (Internship)</h2>
                <p style="text-align: justify; line-height: 1.8;">
                    HUMANIS membuka program magang untuk mahasiswa guna memberikan pengalaman praktis dan profesional di berbagai bidang:
                </p>
                <ul class="mb-4" style="line-height: 1.8;">
                    <li>Administrasi dan kesekretariatan</li>
                    <li>Manajemen program</li>
                    <li>Media dan publikasi</li>
                    <li>Perjurnalan dan publikasi ilmiah</li>
                    <li>Riset dan pengabdian</li>
                    <li>Penerbitan buku</li>
                </ul>
                <a href="contact.php" class="btn btn-outline-humanis border-humanis text-humanis rounded-pill px-4 fw-semibold">Daftar Magang <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-md-5 text-center d-none d-md-block">
                <i class="bi bi-laptop text-secondary" style="font-size: 8rem; opacity: 0.2;"></i>
            </div>
        </div>
    </section>

    <section id="relawan" class="mb-5 pt-4 pb-4">
        <div class="card text-center border-0 shadow-sm text-white" style="background: linear-gradient(135deg, #00796b 0%, #004d40 100%);">
            <div class="card-body p-5">
                <i class="bi bi-heart-fill text-danger mb-3" style="font-size: 3rem;"></i>
                <h2 class="fw-bold mb-3">Panggilan Relawan</h2>
                <p class="lead mb-4 opacity-75 mx-auto" style="max-width: 600px;">
                    Bergabung menjadi relawan HUMANIS dan berkontribusi secara langsung untuk pendidikan STEM yang humanis di seluruh pelosok negeri.
                </p>
                <a href="contact.php" class="btn btn-light text-humanis btn-lg rounded-pill px-5 fw-bold shadow-sm">Daftar Relawan Sekarang</a>
            </div>
        </div>
    </section>

</div>

<?php include 'components/footer.php'; ?>