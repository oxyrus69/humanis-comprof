<?php
// admin/divisi.php
session_start();
include '../koneksi.php';

// Proteksi Keamanan
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$pesan = '';

// PROSES SIMPAN DATA
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $kunci => $nilai) {
        // Cek apakah kunci ada di database, jika belum ada, buat baru (INSERT)
        $kunci_bersih = mysqli_real_escape_string($conn, $kunci);
        $nilai_bersih = mysqli_real_escape_string($conn, $nilai);
        
        $cek = mysqli_query($conn, "SELECT * FROM pengaturan_web WHERE kunci = '$kunci_bersih'");
        if(mysqli_num_rows($cek) > 0) {
            mysqli_query($conn, "UPDATE pengaturan_web SET nilai = '$nilai_bersih' WHERE kunci = '$kunci_bersih'");
        } else {
            mysqli_query($conn, "INSERT INTO pengaturan_web (kunci, nilai) VALUES ('$kunci_bersih', '$nilai_bersih')");
        }
    }
    $pesan = "Mantap! Perubahan konten Divisi berhasil disimpan.";
}

// MENGAMBIL DATA
$query = "SELECT * FROM pengaturan_web";
$result = mysqli_query($conn, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[$row['kunci']] = $row['nilai'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengaturan Divisi - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: calc(100vh - 56px); background-color: #f8f9fa; border-right: 1px solid #dee2e6; }
        .sidebar-menu a { color: #495057; text-decoration: none; padding: 12px 15px; display: block; border-radius: 6px; margin-bottom: 5px; font-weight: 500; transition: all 0.2s ease-in-out; }
        .sidebar-menu a:hover, .sidebar-menu a.active { background-color: #00796b; color: #ffffff; }
    </style>
</head>
<body class="bg-light">
    
    <nav class="navbar navbar-dark shadow-sm" style="background-color: #00796b;">
        <div class="container-fluid px-4">
            <span class="navbar-brand mb-0 h1 fw-bold">Dashboard Panel HUMANIS</span>
            <a href="logout.php" class="btn btn-danger btn-sm fw-bold">Keluar (Logout)</a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 sidebar p-3">
                <div class="sidebar-menu mt-2">
                    <h6 class="text-uppercase text-muted fw-bold mb-3 px-2" style="font-size: 0.85rem;">Menu Pengaturan</h6>
                    <a href="index.php">Tentang Kami</a>
                    <a href="divisi.php" class="active">Divisi</a>
                    <a href="kerjasama.php">Kerja Sama</a>
                    <a href="karir.php">Karir</a>
                    <a href="kontak.php">Kontak</a>
                </div>
            </div>

            <div class="col-md-9 col-lg-10 p-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4">Pengaturan Konten: Divisi Kami</h4>

                        <?php if ($pesan): ?>
                            <div class="alert alert-success fw-semibold"><?= $pesan ?></div>
                        <?php endif; ?>

                        <form method="POST" action="">
                            <h5 class="border-bottom pb-2 mb-3 text-secondary">Bagian Judul Halaman (Hero)</h5>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Judul Utama</label>
                                <input type="text" name="divisi_hero_judul" class="form-control" value="<?= htmlspecialchars($data['divisi_hero_judul'] ?? '') ?>">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Deskripsi Singkat</label>
                                <textarea name="divisi_hero_desk" class="form-control" rows="2"><?= htmlspecialchars($data['divisi_hero_desk'] ?? '') ?></textarea>
                            </div>

                            <h5 class="border-bottom pb-2 mb-3 mt-5 text-secondary">1. Publikasi Ilmiah</h5>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Deskripsi Publikasi Ilmiah</label>
                                <textarea name="divisi_1_desk" class="form-control" rows="3"><?= htmlspecialchars($data['divisi_1_desk'] ?? '') ?></textarea>
                            </div>

                            <h5 class="border-bottom pb-2 mb-3 mt-5 text-secondary">2. Penerbitan (HUMANIS Press)</h5>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Deskripsi Penerbitan</label>
                                <textarea name="divisi_2_desk" class="form-control" rows="3"><?= htmlspecialchars($data['divisi_2_desk'] ?? '') ?></textarea>
                            </div>

                            <h5 class="border-bottom pb-2 mb-3 mt-5 text-secondary">3. Pengembangan Profesi & Pelatihan</h5>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Deskripsi Pelatihan</label>
                                <textarea name="divisi_3_desk" class="form-control" rows="3"><?= htmlspecialchars($data['divisi_3_desk'] ?? '') ?></textarea>
                            </div>

                            <h5 class="border-bottom pb-2 mb-3 mt-5 text-secondary">4. Pusat Pembelajaran (Learning Center)</h5>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Deskripsi Learning Center</label>
                                <textarea name="divisi_4_desk" class="form-control" rows="3"><?= htmlspecialchars($data['divisi_4_desk'] ?? '') ?></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Tabel Program Pembelajaran</label>
                                <textarea name="divisi_4_tabel" class="form-control editor-visual" rows="6"><?= htmlspecialchars($data['divisi_4_tabel'] ?? '') ?></textarea>
                            </div>

                            <h5 class="border-bottom pb-2 mb-3 mt-5 text-secondary">5. Riset</h5>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Deskripsi Riset</label>
                                <textarea name="divisi_5_desk" class="form-control" rows="3"><?= htmlspecialchars($data['divisi_5_desk'] ?? '') ?></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Tabel Roadmap Riset</label>
                                <textarea name="divisi_5_tabel" class="form-control editor-visual" rows="6"><?= htmlspecialchars($data['divisi_5_tabel'] ?? '') ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-success fw-bold px-4 py-3 mt-4 w-100 fs-5">Simpan Semua Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '.editor-visual',
            plugins: 'table lists',
            toolbar: 'undo redo | bold italic | bullist numlist | table | alignleft aligncenter alignright',
            menubar: false,
            branding: false,
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 15px; } table { width: 100%; border-collapse: collapse; } table, td, th { border: 1px dashed #ccc; padding: 8px; }'
        });
    </script>
</body>
</html>