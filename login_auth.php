<?php
session_start();
include("koneksi.php");

if(isset($_POST['login'])) {
    if(empty($_POST['username']) || empty($_POST['password'])) {
        header("location: login.php?err=empty");
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = htmlentities(trim(strip_tags($username)));
        $password = htmlentities(trim(strip_tags($password)));

        $sql = "SELECT * FROM admin WHERE user_admin='". $username ."' AND password_admin='". $password ."'";
        $ress = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($ress);
        $dataku = mysqli_fetch_array($ress);

        if($rows == 1) {
            $_SESSION['admin'] = strtolower($dataku['id_admin']);
            header("location: barang.php?login=success");
        } else {
            header("location: login.php?err=not_found");
        }
    }
}
?>
