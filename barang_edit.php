<?php
	include("sess_check.php");
	
	if(isset($_GET['barang'])) {
		$sql = "SELECT * FROM barang WHERE id_barang='". $_GET['barang'] ."'";
		$ress = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($ress);
	}

	$pagedesc = "Data Barang";
	$menuparent = "barang";
	include("layout_top.php");
?>

<div id="page-wrapper">
    <div class="container-fluid">
		<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header text-light">Data Barang</h1>
		</div>
		</div>
		<div class="row">
			<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
		</div>
			<div class="row">
				<div class="col-lg-12">
					<form class="form-horizontal" action="barang_update.php" method="POST" enctype="multipart/form-data">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 style="font-weight: 600;">Edit Barang</h3></div>
							<div class="panel-body">
								<div class="form-group">
									<label class="control-label col-sm-3" style="font-weight: 600;">Nama Barang</label>
									<div class="col-sm-7">
										<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $data['nama'] ?>" required>
										<input type="hidden" name="id" class="form-control" placeholder="Nama" value="<?php echo $data['id_barang'] ?>" required>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" style="font-weight: 600;">Harga Barang</label>
									<div class="col-sm-7">
										<input type="number" name="harga" min="0" class="form-control" placeholder="Harga" value="<?php echo $data['harga'] ?>"required>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" style="font-weight: 600;">Stok Barang</label>
									<div class="col-sm-7">
										<input type="number" name="stok" min="0" class="form-control" placeholder="Stok" value="<?php echo $data['stok'] ?>"required">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" style="font-weight: 600;">Keterangan</label>
									<div class="col-sm-7">
										<textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="3" required><?php echo $data['keterangan'];?></textarea>
									</div>
								</div>
								<form class="form-horizontal" action="barang_update.php" method="POST">
								<button type="submit" name="perbarui" class="btn btn-primary" style="font-weight: 600;">Update</button>
								<a href="barang.php" class="btn btn-danger" style="font-weight: 600;">Batal</a>
							</div>
						</div>
					</form>
				</div>
			</div>
    </div>
</div>

<?php
	include("layout_bottom.php");
?>