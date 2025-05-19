<?php
session_start();
session_unset();
session_destroy();

// Hapus semua cookie sesi jika ada
if (ini_get("session.use_cookies")) {
    setcookie(session_name(), '', time() - 42000, '/');
}

// Cegah caching halaman
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); // HTTP 1.1.
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT"); // Proxies.
header("Pragma: no-cache"); // HTTP 1.0.

header("Location: login.php");
exit();
?>
