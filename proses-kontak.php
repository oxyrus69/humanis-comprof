<?php
// Panggil file PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Pastikan folder PHPMailer sudah ada di direktori project Humanis
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Menangkap dan membersihkan data
    $nama   = htmlspecialchars(strip_tags(trim($_POST["nama"])));
    $subjek = htmlspecialchars(strip_tags(trim($_POST["subjek"])));
    $pesan  = nl2br(htmlspecialchars(strip_tags(trim($_POST["pesan"]))));
    $email  = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    // Validasi dasar
    if (empty($nama) || empty($email) || empty($subjek) || empty($pesan)) {
        header("Location: contact.php?status=gagal");
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // ==========================================
        // KONFIGURASI SMTP CPANEL (WAJIB DIISI)
        // ==========================================
        $mail->isSMTP();
        $mail->Host       = 'mail.domainkamu.com'; // GANTI DENGAN HOST SMTP HUMANIS
        $mail->SMTPAuth   = true;
        $mail->Username   = 'admin@domainkamu.com'; // GANTI DENGAN EMAIL SMTP HUMANIS
        $mail->Password   = 'password_email_kamu'; // GANTI DENGAN PASSWORD EMAIL
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Gunakan ENCRYPTION_STARTTLS jika port 587
        $mail->Port       = 465;

        // ==========================================
        // PENGATURAN PENGIRIM & PENERIMA
        // ==========================================
        // PENTING: setFrom WAJIB sama dengan Username SMTP di atas
        $mail->setFrom('admin@domainkamu.com', 'Sistem Website HUMANIS');

        // Email tujuan (Email pengurus HUMANIS sesuai kodemu sebelumnya)
        $mail->addAddress('roomofstories@gmail.com', 'Tim HUMANIS');

        // Agar saat Tim Humanis klik 'Reply', balasan langsung mengarah ke email pengunjung
        $mail->addReplyTo($email, $nama);

        // ==========================================
        // KONTEN EMAIL (Berdesain HTML)
        // ==========================================
        $mail->isHTML(true);
        $mail->Subject = "[Website HUMANIS] Pesan Baru: " . $subjek;

        // Merakit isi pesan HTML dengan tema hijau Humanis
        $isi_email  = "<div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #eee; border-radius: 5px;'>";
        $isi_email .= "<h2 style='color: #00796b; border-bottom: 2px solid #00796b; padding-bottom: 10px;'>Pesan Baru (Form Website)</h2>";
        $isi_email .= "<p><strong>Dari:</strong> {$nama}</p>";
        $isi_email .= "<p><strong>Email Pengirim:</strong> {$email}</p>";
        $isi_email .= "<p><strong>Subjek / Divisi:</strong> {$subjek}</p>";
        $isi_email .= "<p><strong>Pesan:</strong></p>";
        $isi_email .= "<div style='background-color: #f8fcfb; padding: 15px; border-left: 4px solid #00796b;'>{$pesan}</div>";
        $isi_email .= "<br><p style='font-size: 12px; color: #888;'>Email ini dikirim secara otomatis melalui formulir kontak website HUMANIS.</p>";
        $isi_email .= "</div>";

        $mail->Body = $isi_email;

        // Eksekusi kirim
        $mail->send();

        // Redirect kembali ke form dengan notifikasi sukses
        header("Location: contact.php?status=sukses");
    } catch (Exception $e) {
        // Redirect kembali ke form dengan notifikasi gagal jika SMTP bermasalah
        header("Location: contact.php?status=gagal");
    }
    exit();
} else {
    // Jika ada yang mencoba mengakses file ini secara langsung tanpa mengisi form
    header("Location: index.php");
    exit();
}
