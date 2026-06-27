<?php
// admin/logout.php
session_start();
session_destroy(); // Menghancurkan semua kartu tanda pengenal (session)
header("Location: login.php"); // Melemparkan kembali ke halaman login
exit();
