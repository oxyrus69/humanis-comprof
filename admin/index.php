<?php
// admin/index.php
session_start();

// Proteksi Keamanan
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - HUMANIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya Khusus untuk Sidebar */
        .sidebar {
            min-height: calc(100vh - 56px);
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
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
        .sidebar-menu a:hover, 
        .sidebar-menu a.active {
            background-color: #00796b;
            color: #ffffff;
        }
        
        /* Gaya Khusus untuk Tombol Dashboard (Cards) */
        .menu-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border-radius: 15px;
            border: 2px solid transparent;
        }
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
            border-color: #00796b;
        }
        .icon-container {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
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
            
            <!-- SIDEBAR -->
            <div class="col-md-3 col-lg-2 sidebar p-3">
                <div class="sidebar-menu mt-2">
                    <h6 class="text-uppercase text-muted fw-bold mb-3 px-2" style="font-size: 0.85rem;">Menu Pengaturan</h6>
                    <a href="index.php" class="active">Dashboard</a>
                    <a href="tentang.php">Tentang Kami</a>
                    <a href="divisi.php">Divisi</a>
                    <a href="kerjasama.php">Kerja Sama</a>
                    <a href="karir.php">Karir</a>
                    <a href="kontak.php">Kontak</a>
                </div>
            </div>

            <!-- KONTEN UTAMA: GRID MENU BESAR -->
            <div class="col-md-9 col-lg-10 p-4">
                
                <div class="mb-4">
                    <h3 class="fw-bold text-dark">Selamat Datang di Panel Admin!</h3>
                    <p class="text-secondary fs-5">Pilih salah satu menu di bawah ini untuk mengelola informasi pada website.</p>
                </div>

                <div class="row g-4">
                    
                    <!-- Tombol 1: Tentang Kami -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card menu-card h-100 shadow-sm text-center p-4">
                            <div class="icon-container bg-primary bg-opacity-10 mb-3 text-primary">
                                <!-- SVG Icon: Info / About -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </div>
                            <h5 class="fw-bold">Tentang Kami</h5>
                            <p class="text-muted small mb-0">Ubah teks sejarah, visi misi, nilai utama, dan struktur organisasi.</p>
                            <a href="tentang.php" class="stretched-link"></a>
                        </div>
                    </div>

                    <!-- Tombol 2: Divisi -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card menu-card h-100 shadow-sm text-center p-4">
                            <div class="icon-container bg-success bg-opacity-10 mb-3 text-success">
                                <!-- SVG Icon: Grid / Diagram -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                </svg>
                            </div>
                            <h5 class="fw-bold">Divisi Kami</h5>
                            <p class="text-muted small mb-0">Kelola penjelasan jurnal, penerbitan, pelatihan, dan riset.</p>
                            <a href="divisi.php" class="stretched-link"></a>
                        </div>
                    </div>

                    <!-- Tombol 3: Kerja Sama -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card menu-card h-100 shadow-sm text-center p-4">
                            <div class="icon-container bg-warning bg-opacity-10 mb-3 text-warning">
                                <!-- SVG Icon: People -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                                </svg>
                            </div>
                            <h5 class="fw-bold">Kerja Sama</h5>
                            <p class="text-muted small mb-0">Atur daftar mitra, peluang kolaborasi, dan info sponsorship.</p>
                            <a href="kerjasama.php" class="stretched-link"></a>
                        </div>
                    </div>

                    <!-- Tombol 4: Karir -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card menu-card h-100 shadow-sm text-center p-4">
                            <div class="icon-container bg-info bg-opacity-10 mb-3 text-info">
                                <!-- SVG Icon: Briefcase -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 1.157 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </div>
                            <h5 class="fw-bold">Karir</h5>
                            <p class="text-muted small mb-0">Tambahkan informasi lowongan, program magang, dan relawan.</p>
                            <a href="karir.php" class="stretched-link"></a>
                        </div>
                    </div>

                    <!-- Tombol 5: Kontak -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card menu-card h-100 shadow-sm text-center p-4">
                            <div class="icon-container bg-danger bg-opacity-10 mb-3 text-danger">
                                <!-- SVG Icon: Telephone -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                </svg>
                            </div>
                            <h5 class="fw-bold">Kontak</h5>
                            <p class="text-muted small mb-0">Atur alamat kantor, nomor WhatsApp, email, dan link sosmed.</p>
                            <a href="kontak.php" class="stretched-link"></a>
                        </div>
                    </div>

                </div> <!-- Akhir row grid -->

            </div> <!-- Akhir KONTEN UTAMA -->

        </div>
    </div> 
</body>
</html>