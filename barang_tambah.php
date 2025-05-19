<?php
    include("sess_check.php");

    $pagedesc = "Data Barang";
    $menuparent = "barang";
    include("layout_top.php");
?>

<div id="page-wrapper" style="font-family: Roboto;">
    <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-light" style="font-weight: 600;">Data Barang</h1>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
            </div>
                
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 style="font-weight: 600;">Tambah Barang</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="barang_insert.php" method="POST">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" style="font-weight: 600;">Nama Barang</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama Barang" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" style="font-weight: 600;">Harga Barang</label>
                                    <div class="col-sm-7">
                                        <input type="number" name="harga" min="0" class="form-control" placeholder="0" value="#" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" style="font-weight: 600;">Stok Barang</label>
                                    <div class="col-sm-7">
                                        <input type="number" name="stok" min="0" class="form-control" placeholder="0" value="#" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" style="font-weight: 600;">Keterangan</label>
                                    <div class="col-sm-7">
                                        <textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-horizontal" style="margin-top: 20px;">
                                    <button type="submit" name="simpan" class="btn btn-primary" style="font-weight: 600;">Simpan</button>
                                    <a href="barang.php" class="btn btn-danger" style="font-weight: 600;">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php
    include("layout_bottom.php");
?>