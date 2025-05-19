<?php
include("sess_check.php");

$id = $sess_admid;
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];

$sql = "INSERT INTO barang(nama,stok,harga,keterangan,id_admin)
        VALUES('$nama','$stok','$harga','$keterangan','$id')";
$ress = mysqli_query($conn, $sql);

if ($ress) {
    header("Location: barang.php?act=add&msg=success");
} else {
    header("Location: tambah_barang.php?act=add&msg=fail");
}
?>
