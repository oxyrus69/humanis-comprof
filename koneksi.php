<?php
// koneksi.php
$host = "localhost"; 
$user = "humn7283_comprof"; // Ganti jika menggunakan cPanel (misal: u12345_admin)
$pass = "p=[0Xk-A_WwoQhzs"; // Ganti dengan password database cPanel jika sudah online
$db   = "humn7283_comprof"; // Sesuaikan dengan nama database yang kamu buat

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Mengecek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

/**
 * Fungsi pembantu (Helper) untuk mengambil nilai dari tabel pengaturan_web dengan mudah.
 * Contoh pemakaian: get_pengaturan('hero_judul', $conn);
 */
function get_pengaturan($kunci, $conn) {
    // Membersihkan input untuk mencegah SQL Injection
    $kunci_bersih = mysqli_real_escape_string($conn, $kunci);
    
    // Melakukan pencarian data berdasarkan kunci
    $query = "SELECT nilai FROM pengaturan_web WHERE kunci = '$kunci_bersih'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['nilai'];
    }
    
    // Jika data tidak ditemukan, kembalikan string kosong
    return ""; 
}
?>