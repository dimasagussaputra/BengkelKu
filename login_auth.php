<?php
session_start();
include("koneksi.php");

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa apakah username dan password cocok
$sql = "SELECT * FROM admin WHERE user_admin = ? AND password_admin = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Jika username dan password cocok, simpan sesi
if (empty($username) || empty($password)) {
    header("Location: login.php?err=empty");
    exit();
} else {
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['admin'] = $row['id_admin'];
        header("Location: barang.php");
        exit();
    } else {
        header("Location: login.php?err=not_found");
        exit();
    }
}

?>
