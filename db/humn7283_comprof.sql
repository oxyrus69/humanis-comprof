-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Jun 2026 pada 10.56
-- Versi server: 10.11.17-MariaDB-cll-lve
-- Versi PHP: 8.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humn7283_comprof`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$6H/oI9pT2o1Y8qQ.2o1Y8.qQ2o1Y8qQ2o1Y8qQ2o1Y8qQ2o1Y8qQ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan_web`
--

CREATE TABLE `pengaturan_web` (
  `id` int(11) NOT NULL,
  `kunci` varchar(100) NOT NULL,
  `nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengaturan_web`
--

INSERT INTO `pengaturan_web` (`id`, `kunci`, `nilai`) VALUES
(1, 'hero_judul', 'Center for Human Centered STEM Education'),
(2, 'hero_deskripsi', 'Mengintegrasikan sains, teknologi, teknik, dan matematika dengan pendekatan yang memanusiakan manusia.'),
(3, 'home_about_teks', 'Center for Human Centered STEM Education Indonesia (HUMANIS) hadir sebagai pusat inovasi dan pengembangan pendidikan. Kami percaya bahwa pendidikan STEM tidak hanya sebatas pada penguasaan kecanggihan teknologi atau rumus matematis, melainkan bagaimana disiplin ilmu tersebut dapat dikelola dan diterapkan untuk kesejahteraan masyarakat dan kemajuan peradaban manusia secara berkelanjutan.'),
(4, 'tentang_sejarah', 'Yayasan Center for Human Centered STEM Education Indonesia (HUMANIS) resmi didirikan pada 23 Mei 2026 melalui Akta Notaris di Yogyakarta. Pendirian HUMANIS berawal dari kegelisahan akademik para pendiri terhadap paradigma pendidikan STEM dan seterusnya...'),
(5, 'tentang_visi', 'Menjadi pusat unggulan (center of excellence) dalam pengembangan Human Centered STEM Education yang berlandaskan nilai-nilai keislaman, untuk mewujudkan pendidikan yang berkeadilan dan berkontribusi bagi kemaslahatan umat.'),
(6, 'kontak_email', 'humanisedu@gmail.com'),
(7, 'kontak_wa', '087767801947'),
(8, 'tentang_misi', '<ul style=\"line-height: 1.8; padding-left: 1.2rem;\">\r\n    <li>Mengembangkan <em>learning sciences</em> dan pendidikan STEM yang berlandaskan nilai-nilai keislaman;</li>\r\n    <li>Mengembangkan kemampuan numerasi dan <em>computational thinking</em> di kalangan pendidik dan peserta didik;</li>\r\n    <li>Menghasilkan inovasi pembelajaran berbasis <em>didactical engineering</em> dan desain riset pendidikan;</li>\r\n    <li>Menjadi pusat unggulan (<em>center of excellence</em>) dalam bidang pendidikan STEM yang berpusat pada kemanusiaan.</li>\r\n</ul>'),
(9, 'tentang_nilai', '<table class=\"table table-bordered table-hover mt-3\">\r\n    <thead class=\"table-light\">\r\n        <tr>\r\n            <th scope=\"col\" style=\"width: 25%;\">Nilai</th>\r\n            <th scope=\"col\">Makna</th>\r\n        </tr>\r\n    </thead>\r\n    <tbody>\r\n        <tr>\r\n            <td class=\"fw-bold text-humanis\">Human Centered</td>\r\n            <td>Berpihak pada manusia dan mengutamakan kemaslahatan bersama.</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"fw-bold text-humanis\">Integritas</td>\r\n            <td>Jujur, amanah, transparan, dan bertanggung jawab.</td>\r\n        </tr>\r\n    </tbody>\r\n</table>'),
(10, 'tentang_struktur', '<table class=\"table table-striped mt-3\">\r\n    <thead class=\"table-dark\">\r\n        <tr>\r\n            <th scope=\"col\" style=\"width: 40%;\">Jabatan</th>\r\n            <th scope=\"col\">Nama</th>\r\n        </tr>\r\n    </thead>\r\n    <tbody>\r\n        <tr>\r\n            <td class=\"fw-bold\">Ketua Yayasan</td>\r\n            <td>Dr. Rina Dyah Rahmawati, S.Si., M.Pd.</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"fw-bold\">Sekretaris</td>\r\n            <td>Dr. Mohammad Archi Maulyda, S.Pd., M.Pd.</td>\r\n        </tr>\r\n    </tbody>\r\n</table>'),
(11, 'divisi_hero_judul', 'Divisi Kami'),
(12, 'divisi_hero_desk', 'Pilar layanan utama Yayasan HUMANIS dalam mewujudkan pendidikan STEM yang humanis.'),
(13, 'divisi_1_desk', 'Rumah jurnal yang menaungi berbagai terbitan berkala ilmiah. Kami memfasilitasi para akademisi dan praktisi untuk mendiseminasikan hasil riset di bidang pendidikan dan STEM.'),
(14, 'divisi_2_desk', 'HUMANIS Press adalah unit penerbitan di bawah Yayasan Center for Human Centered STEM Education Indonesia yang mengelola penerbitan buku dan produk akademik.'),
(15, 'divisi_3_desk', 'Divisi ini bertugas merancang, merumuskan, dan melaksanakan program peningkatan kompetensi profesional bagi guru, dosen, mahasiswa, tenaga kependidikan, serta masyarakat luas.'),
(16, 'divisi_4_desk', 'Mengembangkan dan mengelola program pembelajaran formal maupun nonformal yang menguatkan peran HUMANIS sebagai episentrum pengembangan Human Centered STEM Education.'),
(17, 'divisi_5_desk', 'Divisi Riset mengembangkan, mengelola, dan memayungi kegiatan penelitian ilmiah serta inovasi yang berfokus pada Human Centered STEM Education demi mewujudkan Yayasan sebagai lembaga riset unggul yang berbasis bukti (evidence-based).'),
(18, 'kerjasama_hero_judul', 'Kerja Sama'),
(19, 'kerjasama_hero_desk', 'Sinergi dan kolaborasi untuk mewujudkan pendidikan STEM yang berpusat pada manusia.'),
(20, 'kerjasama_mitra_desk', 'Berikut adalah berbagai instansi yang telah menjalin kerja sama strategis dengan Yayasan HUMANIS:'),
(21, 'kerjasama_mitra_tabel', '<table class=\"table table-bordered table-hover mt-3\">\r\n<thead class=\"table-light\">\r\n<tr>\r\n<th style=\"width: 10%; text-align: center;\" scope=\"col\">No.</th>\r\n<th style=\"width: 45%;\" scope=\"col\">Nama Mitra</th>\r\n<th scope=\"col\">Jenis Kerja Sama</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class=\"text-center\">1</td>\r\n<td>STEM</td>\r\n<td>Publikasi</td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(22, 'kerjasama_peluang_desk', 'Kami senantiasa terbuka untuk menjalin kerja sama dengan berbagai pihak untuk mengembangkan pendidikan.'),
(23, 'kerjasama_peluang_list1', '<ul style=\"line-height: 1.8;\">\r\n<li>Perguruan Tinggi</li>\r\n<li>Sekolah</li>\r\n<li>Pemerintah</li>\r\n<li>Dunia Usaha/Industri</li>\r\n<li>Lembaga Non-Profit</li>\r\n<li>Organisasi Masyarakat</li>\r\n</ul>'),
(24, 'kerjasama_peluang_list2', '<ul style=\"line-height: 1.8;\">\r\n<li>Riset dan publikasi</li>\r\n<li>Pelatihan dan pengabdian</li>\r\n<li>Penerbitan buku</li>\r\n<li>Program pembelajaran</li>\r\n<li>Pengembangan kurikulum</li>\r\n<li>Beasiswa dan pendampingan</li>\r\n</ul>'),
(25, 'kerjasama_sponsor_desk', 'HUMANIS membuka peluang sponsorship dan hibah untuk mendukung keberlangsungan program-program berdampak positif:'),
(26, 'kerjasama_sponsor_list1', '<ul class=\"mb-0\" style=\"line-height: 1.8;\">\r\n<li><strong>Penelitian:</strong> Dukungan dana untuk riset pendidikan STEM.</li>\r\n<li><strong>Pelatihan:</strong> Pembiayaan program peningkatan kompetensi pendidik.</li>\r\n<li><strong>Pengabdian Masyarakat:</strong> Bantuan untuk pelaksanaan program relawan.</li>\r\n</ul>'),
(27, 'kerjasama_sponsor_list2', '<ul class=\"mb-0\" style=\"line-height: 1.8;\">\r\n<li><strong>Penerbitan Buku:</strong> Subsidi pencetakan dan distribusi buku.</li>\r\n<li><strong>Program Beasiswa:</strong> Bantuan untuk siswa dan mahasiswa berprestasi.</li>\r\n</ul>'),
(38, 'karir_hero_judul', 'Karir & Kesempatan'),
(39, 'karir_hero_desk', 'Mari bertumbuh bersama kami untuk mewujudkan pendidikan STEM yang memanusiakan manusia.'),
(40, 'karir_lowongan_desk', 'Berikut adalah daftar lowongan pekerjaan yang saat ini tersedia di Yayasan HUMANIS:'),
(41, 'karir_lowongan_tabel', '<table class=\"table table-bordered table-hover mt-3\"><thead class=\"table-light\"><tr><th scope=\"col\" style=\"width: 10%; text-align: center;\">No.</th><th scope=\"col\" style=\"width: 40%;\">Posisi</th><th scope=\"col\" style=\"width: 25%;\">Lokasi</th><th scope=\"col\" style=\"width: 25%;\">Batas Pendaftaran</th></tr></thead><tbody><tr><td class=\"text-center\">1</td><td class=\"fw-semibold\">[Posisi 1]</td><td>[Lokasi]</td><td>[Tanggal]</td></tr><tr><td class=\"text-center\">2</td><td class=\"fw-semibold\">[Posisi 2]</td><td>[Lokasi]</td><td>[Tanggal]</td></tr></tbody></table>'),
(42, 'karir_lowongan_info', 'Jika belum ada lowongan yang sesuai, Anda tetap dapat mengirimkan CV ke <strong>karir@humanis.id</strong> untuk masuk ke dalam pangkalan data kami.'),
(43, 'karir_magang_desk', 'HUMANIS membuka program magang untuk mahasiswa guna memberikan pengalaman praktis dan profesional di berbagai bidang:'),
(44, 'karir_magang_list', '<ul class=\"mb-4\" style=\"line-height: 1.8;\"><li>Administrasi dan kesekretariatan</li><li>Manajemen program</li><li>Media dan publikasi</li><li>Perjurnalan dan publikasi ilmiah</li><li>Riset dan pengabdian</li><li>Penerbitan buku</li></ul>'),
(45, 'karir_relawan_desk', 'Bergabung menjadi relawan HUMANIS dan berkontribusi secara langsung untuk pendidikan STEM yang humanis di seluruh pelosok negeri.'),
(46, 'kontak_hero_judul', 'Hubungi Kami'),
(47, 'kontak_hero_desk', 'Kami siap menjawab pertanyaan dan menjalin kolaborasi dengan Anda.'),
(48, 'kontak_alamat', 'Yayasan Center for Human Centered STEM Education Indonesia (HUMANIS)<br>Jl. Ngumbul Raya, Ngumbul, Tamanan, Banguntapan, Bantul, DI Yogyakarta'),
(49, 'kontak_email_utama', 'admin@humaniscenter.id'),
(50, 'kontak_wa_utama', '087767801947'),
(51, 'kontak_website', 'www.humaniscenter.id'),
(52, 'kontak_email_divisi', '<table class=\"table table-sm table-borderless table-hover text-muted\"><tbody><tr><td style=\"width: 40%;\"><i class=\"bi bi-envelope me-2\"></i> Umum</td><td><a href=\"mailto:info@humaniscenter.id\" class=\"text-decoration-none text-muted\">info@humaniscenter.id</a></td></tr><tr><td><i class=\"bi bi-envelope me-2\"></i> Publikasi Ilmiah</td><td><a href=\"mailto:jurnal@humaniscenter.id\" class=\"text-decoration-none text-muted\">jurnal@humaniscenter.id</a></td></tr><tr><td><i class=\"bi bi-envelope me-2\"></i> HUMANIS Press</td><td><a href=\"mailto:press@humaniscenter.id\" class=\"text-decoration-none text-muted\">press@humaniscenter.id</a></td></tr><tr><td><i class=\"bi bi-envelope me-2\"></i> Pelatihan & Pengabdian</td><td><a href=\"mailto:pelatihan@humaniscenter.id\" class=\"text-decoration-none text-muted\">pelatihan@humaniscenter.id</a></td></tr><tr><td><i class=\"bi bi-envelope me-2\"></i> Learning Center</td><td><a href=\"mailto:learning@humaniscenter.id\" class=\"text-decoration-none text-muted\">learning@humaniscenter.id</a></td></tr><tr><td><i class=\"bi bi-envelope me-2\"></i> Riset</td><td><a href=\"mailto:riset@humaniscenter.id\" class=\"text-decoration-none text-muted\">riset@humaniscenter.id</a></td></tr><tr><td><i class=\"bi bi-envelope me-2\"></i> Kerja Sama</td><td><a href=\"mailto:kerjasama@humaniscenter.id\" class=\"text-decoration-none text-muted\">kerjasama@humaniscenter.id</a></td></tr><tr><td><i class=\"bi bi-envelope me-2\"></i> Karir</td><td><a href=\"mailto:karir@humaniscenter.id\" class=\"text-decoration-none text-muted\">karir@humaniscenter.id</a></td></tr></tbody></table>'),
(53, 'kontak_sosmed', '<div class=\"d-flex flex-wrap gap-2\"><a href=\"#\" class=\"btn btn-outline-secondary border-secondary rounded-pill\"><i class=\"bi bi-instagram me-1\"></i> @humanis.id</a><a href=\"#\" class=\"btn btn-outline-secondary border-secondary rounded-pill\"><i class=\"bi bi-youtube me-1\"></i> HUMANIS Official</a><a href=\"#\" class=\"btn btn-outline-secondary border-secondary rounded-pill\"><i class=\"bi bi-linkedin me-1\"></i> HUMANIS Indonesia</a></div>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan_web`
--
ALTER TABLE `pengaturan_web`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kunci` (`kunci`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengaturan_web`
--
ALTER TABLE `pengaturan_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
