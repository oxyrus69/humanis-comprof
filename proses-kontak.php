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

    // ==========================================
    // LOGIKA PENENTUAN EMAIL TUJUAN (ROUTING)
    // ==========================================
    // Kita menyiapkan variabel kosong untuk diisi oleh logika Switch di bawah
    $email_tujuan = '';
    $nama_tujuan = '';

    // Logika Switch: Membaca pilihan "subjek" dari form, lalu menentukan email tujuan
    switch ($subjek) {
        case 'Publikasi Ilmiah':
            $email_tujuan = 'jurnal@humaniscenter.id';
            $nama_tujuan = 'Tim Publikasi Ilmiah';
            break;
        case 'HUMANIS Press':
            $email_tujuan = 'press@humaniscenter.id';
            $nama_tujuan = 'Tim HUMANIS Press';
            break;
        case 'Pelatihan':
            $email_tujuan = 'pelatihan@humaniscenter.id';
            $nama_tujuan = 'Tim Pelatihan';
            break;
        case 'Learning Center':
            $email_tujuan = 'learning@humaniscenter.id';
            $nama_tujuan = 'Tim Learning Center';
            break;
        case 'Riset':
            $email_tujuan = 'riset@humaniscenter.id';
            $nama_tujuan = 'Tim Riset';
            break;
        case 'Kerja Sama':
            $email_tujuan = 'kerjasama@humaniscenter.id';
            $nama_tujuan = 'Tim Kerja Sama';
            break;
        case 'Karir':
            $email_tujuan = 'karir@humaniscenter.id';
            $nama_tujuan = 'Tim Karir';
            break;
        default: 
            // Jika memilih 'Lainnya' atau subjek tidak terdaftar, masuk ke Admin utama
            $email_tujuan = 'admin@humaniscenter.id';
            $nama_tujuan = 'Admin HUMANIS';
            break;
    }

    $mail = new PHPMailer(true);

    try {
        // ==========================================
        // KONFIGURASI SMTP CPANEL
        // ==========================================
        $mail->isSMTP();
        $mail->Host       = 'mail.humaniscenter.id'; 
        $mail->SMTPAuth   = true;
        // Akun pengirim tetap 1 kurir (admin)
        $mail->Username   = 'admin@humaniscenter.id'; 
        $mail->Password   = 'rW+wFn7Z$4@nk-i['; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
        $mail->Port       = 465;

        // ==========================================
        // PENGATURAN PENGIRIM & PENERIMA
        // ==========================================
        $mail->setFrom('admin@humaniscenter.id', 'Sistem Website HUMANIS'); 
        
        // Menerapkan hasil logika Switch ke alamat penerima
        $mail->addAddress($email_tujuan, $nama_tujuan); 
        
        $mail->addReplyTo($email, $nama);

        // ==========================================
        // KONTEN EMAIL 
        // ==========================================
        $mail->isHTML(true);
        $mail->Subject = "[Website HUMANIS] Pesan Baru: " . $subjek;
        
        $isi_email  = "<div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #eee; border-radius: 5px;'>";
        $isi_email .= "<h2 style='color: #00796b; border-bottom: 2px solid #00796b; padding-bottom: 10px;'>Pesan Baru (Form Website)</h2>";
        $isi_email .= "<p><strong>Dari:</strong> {$nama}</p>";
        $isi_email .= "<p><strong>Email Pengirim:</strong> {$email}</p>";
        $isi_email .= "<p><strong>Subjek / Divisi:</strong> {$subjek}</p>";
        $isi_email .= "<p><strong>Pesan:</strong></p>";
        $isi_email .= "<div style='background-color: #f8fcfb; padding: 15px; border-left: 4px solid #00796b;'>{$pesan}</div>";
        $isi_email .= "<br><p style='font-size: 12px; color: #888;'>Email ini dikirim secara otomatis melalui formulir kontak website HUMANIS kepada <strong>{$nama_tujuan}</strong>.</p>";
        $isi_email .= "</div>";

        $mail->Body = $isi_email;

        // Eksekusi kirim
        $mail->send();
        
        header("Location: contact.php?status=sukses");
        
    } catch (Exception $e) {
        header("Location: contact.php?status=gagal");
    }
    exit();
} else {
    header("Location: index.php");
    exit();
}