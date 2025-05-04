<?php
	session_start();
	$chk_sess = $_SESSION['admin'];
	include("koneksi.php");
	include("library.php");

	$sql_sess = "SELECT * FROM admin WHERE id_admin='". $chk_sess ."'";
	$ress_sess = mysqli_query($conn, $sql_sess);
	$row_sess = mysqli_fetch_array($ress_sess);
	$sess_admid = $row_sess['id_admin'];
	$sess_admuser = $row_sess['user_admin'];
	$sess_admname = $row_sess['nama_admin'];
	$sess_admfoto = $row_sess['foto_admin'];

	if(! isset($chk_sess)) {
		header("location: login.php?login=false");
	}
?>