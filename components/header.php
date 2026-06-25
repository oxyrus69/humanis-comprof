<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'HUMANIS - Center for Human Centered STEM Education' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fcfb;
        }

        .bg-humanis {
            background-color: #00796b !important;
        }

        /* Warna Hijau Kebiruan (Teal) */
        .text-humanis {
            color: #00796b !important;
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .hero-section {
            background: linear-gradient(135deg, #00796b 0%, #004d40 100%);
            color: white;
            padding: 120px 0;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            background-color: #00796b;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-humanis sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold tracking-wide d-flex align-items-center" href="index.php">
                <img src="public/logo1.png" alt="Logo HUMANIS" height="40" class="me-2">
                HUMANIS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>

                    <!-- Menu Tentang Kami -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="tentangDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm mt-2" aria-labelledby="tentangDropdown">
                            <li><a class="dropdown-item" href="tentang.php#sejarah">Sejarah HUMANIS</a></li>
                            <li><a class="dropdown-item" href="tentang.php#visi-misi">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="tentang.php#struktur">Struktur Organisasi</a></li>
                        </ul>
                    </li>

                    <!-- Menu Divisi (Pengganti Unit Usaha) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="divisiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Divisi
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm mt-2" aria-labelledby="divisiDropdown">
                            <li><a class="dropdown-item fw-semibold text-humanis" href="divisi.php#publikasi">Divisi Publikasi Ilmiah</a></li>
                            <li><a class="dropdown-item" href="divisi.php#penerbitan">Divisi Penerbitan (HUMANIS Press)</a></li>
                            <li><a class="dropdown-item" href="divisi.php#pelatihan">Divisi Pengembangan Profesi</a></li>
                            <li><a class="dropdown-item" href="divisi.php#learning">Divisi Pusat Pembelajaran</a></li>
                            <li><a class="dropdown-item" href="divisi.php#riset">Divisi Riset</a></li>
                        </ul>
                    </li>

                    <!-- Menu Kerja Sama -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="kerjasamaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kerja Sama
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm mt-2" aria-labelledby="kerjasamaDropdown">
                            <li><a class="dropdown-item" href="kerjasama.php#mitra">Mitra Kami</a></li>
                            <li><a class="dropdown-item" href="kerjasama.php#peluang">Peluang Kolaborasi</a></li>
                            <li><a class="dropdown-item" href="kerjasama.php#sponsorship">Sponsorship / Hibah</a></li>
                        </ul>
                    </li>

                    <!-- Menu Karir -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="karirDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Karir
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm mt-2" aria-labelledby="karirDropdown">
                            <li><a class="dropdown-item" href="karir.php#lowongan">Lowongan Kerja</a></li>
                            <li><a class="dropdown-item" href="karir.php#magang">Magang (Internship)</a></li>
                            <li><a class="dropdown-item" href="karir.php#relawan">Relawan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="contact.php">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>