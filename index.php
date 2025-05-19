<?php
    include("sess_check.php");
    include("format_rupiah.php");

    $tgl = date('Y-m-d');
    $ttl=0;
    $ress = mysqli_query($conn, $sql);
    $jmltrx = mysqli_num_rows($ress);

    while($data=mysqli_fetch_array($ress)){
        $tot=$data['total'];
        $ttl+=$tot;
    }

    $pagedesc = "Beranda";
    include("layout_top.php");
?>
>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length">
                                    <label>
                                        Show 
                                        <select name="table_length" class="form-control input-sm">
                                            <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                        </select> entries
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="dataTables_filter pull-right">
                                    <label>Search:
                                        <input type="search" class="form-control input-sm" placeholder="">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#">Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include("layout_bottom.php");
?>