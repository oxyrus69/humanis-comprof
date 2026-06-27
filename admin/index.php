<?php
// admin/index.php
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
        
        $query = "UPDATE pengaturan_web SET nilai = '$nilai_bersih' WHERE kunci = '$kunci_bersih'";
        mysqli_query($conn, $query);
    }
    $pesan = "Hore! Perubahan berhasil disimpan.";
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
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya Khusus untuk Sidebar */
        .sidebar {
            min-height: calc(100vh - 56px); /* Mengisi tinggi layar dikurangi tinggi navbar */
            background-color: #f8f9fa; /* Warna latar terang, senada dengan bg-light */
            border-right: 1px solid #dee2e6; /* Garis batas pemisah di kanan sidebar */
        }
        .sidebar-menu a {
            color: #495057;
            text-decoration: none;
            padding: 12px 15px;
            display: block;
            border-radius: 6px;
            margin-bottom: 5px;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
        }
        /* Gaya saat menu disorot atau sedang aktif */
        .sidebar-menu a:hover, 
        .sidebar-menu a.active {
            background-color: #00796b;
            color: #ffffff;
        }
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
                    <a href="index.php" class="active">Tentang Kami</a>
                    <a href="divisi.php">Divisi</a>
                    <a href="kerjasama.php">Kerja Sama</a>
                    <a href="karir.php">Karir</a>
                    <a href="kontak.php">Kontak</a>
                </div>
            </div>

            <div class="col-md-9 col-lg-10 p-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4">Pengaturan Konten: Tentang Kami & Beranda</h4>

                        <?php if ($pesan): ?>
                            <div class="alert alert-success fw-semibold"><?= $pesan ?></div>
                        <?php endif; ?>

                        <form method="POST" action="">
                            <h5 class="border-bottom pb-2 mb-3 text-secondary">Bagian Beranda (Hero)</h5>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Judul Utama</label>
                                <input type="text" name="hero_judul" class="form-control" value="<?= htmlspecialchars($data['hero_judul'] ?? '') ?>">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Deskripsi Singkat</label>
                                <textarea name="hero_deskripsi" class="form-control" rows="3"><?= htmlspecialchars($data['hero_deskripsi'] ?? '') ?></textarea>
                            </div>

                            <h5 class="border-bottom pb-2 mb-3 mt-5 text-secondary">Bagian Tentang Kami</h5>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Teks Sejarah Singkat</label>
                                <textarea name="tentang_sejarah" class="form-control" rows="5"><?= htmlspecialchars($data['tentang_sejarah'] ?? '') ?></textarea>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Visi</label>
                                <textarea name="tentang_visi" class="form-control" rows="3"><?= htmlspecialchars($data['tentang_visi'] ?? '') ?></textarea>
                            </div>

                            <h5 class="border-bottom pb-2 mb-3 mt-5 text-primary">Pengaturan Lanjutan (Visual Editor)</h5>
                            
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Misi</label>
                                <textarea name="tentang_misi" class="form-control editor-visual" rows="5"><?= htmlspecialchars($data['tentang_misi'] ?? '') ?></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Tabel Nilai-Nilai Utama</label>
                                <textarea name="tentang_nilai" class="form-control editor-visual" rows="6"><?= htmlspecialchars($data['tentang_nilai'] ?? '') ?></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Tabel Struktur Organisasi</label>
                                <textarea name="tentang_struktur" class="form-control editor-visual" rows="6"><?= htmlspecialchars($data['tentang_struktur'] ?? '') ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-success fw-bold px-4 py-3 mt-3 w-100 fs-5">Simpan Semua Perubahan</button>
                        </form>
                    </div>
                </div>
            </div> </div>
    </div> <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"></script>
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