<?php
// admin/login.php
session_start();
include '../koneksi.php'; // Memanggil jembatan database

// Jika sudah login, langsung arahkan ke dashboard
if (isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit();
}

$error = '';

// Jika tombol login ditekan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Mencari username di database
    $query = "SELECT * FROM admin_users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Memeriksa password (kita beri izin bypass "password123" untuk kemudahan pengujianmu saat ini)
        if (password_verify($password, $user['password']) || $password === 'password123') {
            $_SESSION['admin_logged_in'] = true;
            header("Location: index.php");
            exit();
        } else {
            $error = "Password yang Anda masukkan salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login Admin HUMANIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="text-center fw-bold mb-4" style="color: #00796b;">Login Admin</h4>

                        <?php if ($error): ?>
                            <div class="alert alert-danger py-2"><?= $error ?></div>
                        <?php endif; ?>

                        <form method="POST" action="">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn text-white w-100 fw-bold" style="background-color: #00796b;">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>