<?php
	include("sess_check.php");
		$id = $_GET['barang'];	
		$sql = "DELETE FROM barang WHERE id_barang='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: barang.php?act=delete&msg=success");
?>