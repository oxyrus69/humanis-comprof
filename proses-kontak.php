<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Menangkap dan membersihkan data
    $nama   = htmlspecialchars(strip_tags(trim($_POST["nama"])));
    $subjek = htmlspecialchars(strip_tags(trim($_POST["subjek"])));
    $pesan  = htmlspecialchars(strip_tags(trim($_POST["pesan"])));
    $email  = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    // Validasi dasar
    if (empty($nama) || empty($email) || empty($subjek) || empty($pesan)) {
        header("Location: contact.php?status=gagal");
        exit();
    }

    // =====================================================================
    // ZONA PROSES DATA: KIRIM LANGSUNG KE EMAIL KLIEN
    // =====================================================================

    // 1. Tentukan alamat email tujuan (Email pengurus HUMANIS)
    $email_tujuan = "roomofstories@gmail.com";

    // 2. Format judul email yang akan masuk ke inbox
    $judul_email = "[Website HUMANIS] Pesan Baru: " . $subjek;

    // 3. Merakit isi pesan (Body Email)
    $isi_email  = "Halo Tim HUMANIS,\n\n";
    $isi_email .= "Anda menerima pesan baru dari formulir kontak website.\n\n";
    $isi_email .= "------------------------------------------------------\n";
    $isi_email .= "Nama Pengirim : " . $nama . "\n";
    $isi_email .= "Email Pengirim: " . $email . "\n";
    $isi_email .= "Subjek / Divisi: " . $subjek . "\n";
    $isi_email .= "------------------------------------------------------\n\n";
    $isi_email .= "Isi Pesan:\n";
    $isi_email .= $pesan . "\n\n";
    $isi_email .= "------------------------------------------------------\n";
    $isi_email .= "Sistem Website HUMANIS Center";

    // 4. Mengatur Header Email (Agar saat klien klik 'Reply', langsung membalas ke pengirim)
    // Catatan: Ganti noreply@humaniscenter.id dengan domain aslinya jika sudah live
    $headers  = "From: noreply@humaniscenter.id\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // 5. Eksekusi pengiriman email
    $kirim = mail($email_tujuan, $judul_email, $isi_email, $headers);

    // 6. Cek status keberhasilan pengiriman
    if ($kirim) {
        // Jika fungsi mail() berhasil mengirim ke server
        header("Location: contact.php?status=sukses");
    } else {
        // Jika server gagal memproses email
        header("Location: contact.php?status=gagal");
    }
    exit();
} else {
    header("Location: index.php");
    exit();
}
