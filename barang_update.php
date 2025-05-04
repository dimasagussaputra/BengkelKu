<?php
include("sess_check.php");

if(isset($_POST['perbarui'])) {
    $nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$keterangan = $_POST['keterangan'];
	$barang = $_POST['id'];

	$sql = "UPDATE barang SET
        nama='". $nama ."',
        harga='". $harga ."',
        stok='". $stok ."',  -- update stok juga
        keterangan='". $keterangan ."'
        WHERE id_barang='". $barang ."'";
    
    $ress = mysqli_query($conn, $sql);
    
    if($ress) {
        $_SESSION['sukses'] = "Data barang berhasil diperbarui!";
        header("location: barang.php?act=update&msg=success");
        exit();
    } else {
        $_SESSION['error'] = "Gagal memperbarui data: " . mysqli_error($conn);
        header("location: barang_edit.php?barang=".$barang."&act=update&msg=fail");
        exit();
    }
} else {
    header("location: barang.php");
    exit();
}
?>