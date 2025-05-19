<?php
// Mulai sesi
session_start();

// Cek apakah sesi admin ada
if (!isset($_SESSION['admin'])) {
    header("Location: login.php?login=false");
    exit();
}

// Mencegah cache pada halaman setelah logout
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");
header("Pragma: no-cache");

include("koneksi.php");
include("library.php");

// Ambil data admin dari sesi
$chk_sess = $_SESSION['admin'];
$sql_sess = "SELECT * FROM admin WHERE id_admin='". $chk_sess ."'";
$ress_sess = mysqli_query($conn, $sql_sess);

// Cek apakah data admin valid
if (mysqli_num_rows($ress_sess) == 1) {
    $row_sess = mysqli_fetch_array($ress_sess);
    $sess_admid = $row_sess['id_admin'];
    $sess_admuser = $row_sess['user_admin'];
    $sess_admname = $row_sess['nama_admin'];
    $sess_admfoto = $row_sess['foto_admin'];
} else {
    // Jika tidak valid, arahkan ke halaman login
    header("Location: login.php?login=false");
    exit();
}
?>