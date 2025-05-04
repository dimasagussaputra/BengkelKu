<?php
include("sess_check.php");

$id = $sess_admid;
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];
$id = $sess_admin;

$sql = "INSERT INTO barang(nama,stok,harga,keterangan,id_admin)
    VALUES('$nama','$stok','$harga','$keterangan','$id')";
$ress = mysqli_query($conn, $sql);
	if($ress){
		echo "<script>alert('Tambah Barang Berhasil!');</script>";
		echo "<script type='text/javascript'> document.location = 'barang.php'; </script>";
	}else{
		echo("Error description: " . mysqli_error($conn));
		echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
		echo "<script type='text/javascript'> document.location = 'barang_tambah.php'; </script>";
	}
?>