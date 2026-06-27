<?php
// admin/kerjasama.php
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
        $kunci_bersih = mysqli_real_escape_string($conn, $kunci);
        $nilai_bersih = mysqli_real_escape_string($conn, $nilai);
        
        $cek = mysqli_query($conn, "SELECT * FROM pengaturan_web WHERE kunci = '$kunci_bersih'");
        if(mysqli_num_rows($cek) > 0) {
            mysqli_query($conn, "UPDATE pengaturan_web SET nilai = '$nilai_bersih' WHERE kunci = '$kunci_bersih'");
        } else {
            mysqli_query($conn, "INSERT INTO pengaturan_web (kunci, nilai) VALUES ('$kunci_bersih', '$nilai_bersih')");
        }
    }
    $pesan = "Sempurna! Perubahan halaman Kerja Sama berhasil disimpan.";
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
    <title>Pengaturan Kerja Sama - Admin</title>
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
            <!-- SIDEBAR -->
            <div class="col-md-3 col-lg-2 sidebar p-3">
                <div class="sidebar-menu mt-2">
                    <h6 class="text-uppercase text-muted fw-bold mb-3 px-2" style="font-size: 0.85rem;">Menu Pengaturan</h6>
                    <a href="index.php">Tentang Kami</a>
                    <a href="divisi.php">Divisi</a>
                    <a href="kerjasama.php" class="active">Kerja Sama</a>
                    <a href="karir.php">Karir</a>
                    <a href="kontak.php">Kontak</a>
                </div>
            </div>

            <!-- KONTEN UTAMA -->
            <div class="col-md-9 col-lg-10 p-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4">Pengaturan Konten: Kerja Sama</h4>

                        <?php if ($pesan): ?>
                            <div class="alert alert-success fw-semibold"><?= $pesan ?></div>
                        <?php endif; ?>

                        <form method="POST" action="">
                            <!-- Hero Section -->
                            <h5 class="border-bottom pb-2 mb-3 text-secondary">Bagian Judul Halaman (Hero)</h5>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Judul Utama</label>
                                <input type="text" name="kerjasama_hero_judul" class="form-control" value="<?= htmlspecialchars($data['kerjasama_hero_judul'] ?? '') ?>">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Deskripsi Singkat</label>
                                <textarea name="kerjasama_hero_desk" class="form-control" rows="2"><?= htmlspecialchars($data['kerjasama_hero_desk'] ?? '') ?></textarea>
                            </div>

                            <!-- Mitra Kami -->
                            <h5 class="border-bottom pb-2 mb-3 mt-5 text-secondary">1. Mitra Kami</h5>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Teks Pengantar</label>
                                <textarea name="kerjasama_mitra_desk" class="form-control" rows="2"><?= htmlspecialchars($data['kerjasama_mitra_desk'] ?? '') ?></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Tabel Daftar Mitra</label>
                                <textarea name="kerjasama_mitra_tabel" class="form-control editor-visual" rows="6"><?= htmlspecialchars($data['kerjasama_mitra_tabel'] ?? '') ?></textarea>
                            </div>

                            <!-- Peluang Kolaborasi -->
                            <h5 class="border-bottom pb-2 mb-3 mt-5 text-secondary">2. Peluang Kolaborasi</h5>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Teks Pengantar</label>
                                <textarea name="kerjasama_peluang_desk" class="form-control" rows="2"><?= htmlspecialchars($data['kerjasama_peluang_desk'] ?? '') ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-semibold">Daftar Target Kolaborasi (Kiri)</label>
                                    <textarea name="kerjasama_peluang_list1" class="form-control editor-visual" rows="6"><?= htmlspecialchars($data['kerjasama_peluang_list1'] ?? '') ?></textarea>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-semibold">Daftar Bidang Kolaborasi (Kanan)</label>
                                    <textarea name="kerjasama_peluang_list2" class="form-control editor-visual" rows="6"><?= htmlspecialchars($data['kerjasama_peluang_list2'] ?? '') ?></textarea>
                                </div>
                            </div>

                            <!-- Sponsorship -->
                            <h5 class="border-bottom pb-2 mb-3 mt-5 text-secondary">3. Sponsorship / Hibah</h5>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Teks Pengantar</label>
                                <textarea name="kerjasama_sponsor_desk" class="form-control" rows="2"><?= htmlspecialchars($data['kerjasama_sponsor_desk'] ?? '') ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-semibold">Daftar Kebutuhan (Kolom Kiri)</label>
                                    <textarea name="kerjasama_sponsor_list1" class="form-control editor-visual" rows="5"><?= htmlspecialchars($data['kerjasama_sponsor_list1'] ?? '') ?></textarea>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-semibold">Daftar Kebutuhan (Kolom Kanan)</label>
                                    <textarea name="kerjasama_sponsor_list2" class="form-control editor-visual" rows="5"><?= htmlspecialchars($data['kerjasama_sponsor_list2'] ?? '') ?></textarea>
                                </div>
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
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 15px; } table { width: 100%; border-collapse: collapse; } table, td, th { border: 1px dashed #ccc; padding: 8px; } ul { padding-left: 20px; }'
        });
    </script>
</body>
</html>