<?php
include("sess_check.php");
include("format_tanggal.php");
include("format_rupiah.php");

$pagedesc = "Data Barang";
include("layout_top.php");

$haries = array("Sunday" => "Minggu", "Monday" => "Senin", "Tuesday" => "Selasa", "Wednesday" => "Rabu", "Thursday" => "Kamis", "Friday" => "Jum'at", "Saturday" => "Sabtu");
$bulans = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
$hari_ini = $haries[date("l")];
$tanggal = date("d");
$bulan_ini = $bulans[date("n")];
$tahun = date("Y");
?>

<div id="page-wrapper" style="font-family: Roboto;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-light" style="font-weight: 600;">Mengelola Data Barang</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12"><?php include("layout_alert.php");?></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-center">
                    <div class="panel-heading">
                        <div class="form-horizontal btn-xs" style="margin-top: 13px;">
                            <a href="barang_tambah.php" class="btn btn-primary" style="font-weight: 400;">Tambah</a>
                        </div>
                    </div>
                    <div class="panel-body" style="font-weight: 400;">
                        <table id="tabel-data" class="table table-striped table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $sql = "SELECT * FROM barang ORDER BY nama ASC";
                                $ress = mysqli_query($conn, $sql);
                                while($data = mysqli_fetch_array($ress)) {
                                    echo '<tr>';
                                    echo '<td>'. $i .'</td>';
                                    echo '<td>'. $data['nama'] .'</td>';
                                    echo '<td class="text-center">'. $data['stok'] .'</td>';
                                    echo '<td>'. format_rupiah($data['harga']) .'</td>';
                                    echo '<td>'. $data['keterangan'] .'</td>';
                                    echo '<td class="text-center">
                                        <a href="barang_edit.php?barang='. $data['id_barang'] .'" class="btn btn-warning btn-xs">Edit</a>
                                        <a href="barang_hapus.php?barang='. $data['id_barang'] .'" onclick="return confirm(\'Apakah kamu yakin ingin menghapus '. $data['nama'] .'?\');" class="btn btn-danger btn-xs">Delete</a>
                                    </td>';
                                    echo '</tr>';
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#tabel-data').DataTable({
        "responsive": true,
        "processing": true,
        "autoWidth": false,
        "info": false,
        "language": {
            "search": "Search:",
            "lengthMenu": "Show _MENU_ entries",
            "zeroRecords": "No data found",
            "infoEmpty": "",
            "infoFiltered": ""
        },
        "columnDefs": [
            { "orderable": false, "targets": [5] }
        ]
    });
});
</script>

<?php
    include("layout_bottom.php");
?>
