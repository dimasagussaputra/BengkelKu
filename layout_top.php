<?php
    $haries = array("Sunday" => "Minggu", "Monday" => "Senin", "Tuesday" => "Selasa", "Wednesday" => "Rabu", "Thursday" => "Kamis", "Friday" => "Jum'at", "Saturday" => "Sabtu");
    $bulans = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $bulans_count = count($bulans);
    $hari_ini = $haries[date("l")];
    $bulan_ini = $bulans[date("n")];
    $tanggal = date("d");
    $bulan = date("m");
    $tahun = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BengkelKu</title>

    <link href="foto/logo_putih.jpg" rel="icon" type="images/x-icon">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.css">

    <style>
        div.dataTables_length label {
            font-weight: normal;
            text-align: left;
            white-space: nowrap;
        }

        div.dataTables_length select {
            width: 75px;
            display: inline-block;
        }

        div.dataTables_filter {
            text-align: right;
        }

        div.dataTables_filter label {
            font-weight: normal;
            white-space: nowrap;
            text-align: left;
        }

        div.dataTables_filter input {
            margin-left: 0.5em;
            display: inline-block;
        }

        div.dataTables_info {
            padding-top: 8px;
            white-space: nowrap;
        }

        div.dataTables_paginate {
            margin: 0;
            white-space: nowrap;
            text-align: right;
        }

        div.dataTables_paginate ul.pagination {
            margin: 2px 0;
            white-space: nowrap;
        }

        @media screen and (max-width: 767px) {
            div.dataTables_length,
            div.dataTables_filter,
            div.dataTables_info,
            div.dataTables_paginate {
                text-align: center;
            }
        }

        table.dataTable td,
        table.dataTable th {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }

        table.dataTable {
            clear: both;
            margin-top: 6px !important;
            margin-bottom: 6px !important;
            max-width: none !important;
        }

        table.dataTable thead .sorting,
        table.dataTable thead .sorting_asc,
        table.dataTable thead .sorting_desc,
        table.dataTable thead .sorting_asc_disabled,
        table.dataTable thead .sorting_desc_disabled {
            cursor: pointer;
        }

        table.dataTable thead .sorting { background: url('../images/sort_both.png') no-repeat center right; }
        table.dataTable thead .sorting_asc { background: url('../images/sort_asc.png') no-repeat center right; }
        table.dataTable thead .sorting_desc { background: url('../images/sort_desc.png') no-repeat center right; }
        table.dataTable thead .sorting_asc_disabled { background: url('../images/sort_asc_disabled.png') no-repeat center right; }
        table.dataTable thead .sorting_desc_disabled { background: url('../images/sort_desc_disabled.png') no-repeat center right; }

        table.dataTable thead > tr > th {
            padding-left: 18px;
            padding-right: 18px;
        }

        table.dataTable th:active {
            outline: none;
        }

        div.dataTables_scrollHead table {
            margin-bottom: 0 !important;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        div.dataTables_scrollHead table thead tr:last-child th:first-child,
        div.dataTables_scrollHead table thead tr:last-child td:first-child {
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
        }

        div.dataTables_scrollBody table {
            border-top: none;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        div.dataTables_scrollBody tbody tr:first-child th,
        div.dataTables_scrollBody tbody tr:first-child td {
            border-top: none;
        }

        div.dataTables_scrollFoot table {
            margin-top: 0 !important;
            border-top: none;
        }

        table.table-bordered.dataTable {
            border-collapse: separate !important;
        }
        table.table-bordered thead th,
        table.table-bordered thead td {
            border-left-width: 0;
            border-top-width: 0;
        }
        table.table-bordered tbody th,
        table.table-bordered tbody td {
            border-left-width: 0;
            border-bottom-width: 0;
        }
        table.table-bordered th:last-child,
        table.table-bordered td:last-child {
            border-right-width: 0;
        }
        div.dataTables_scrollHead table.table-bordered {
            border-bottom-width: 0;
        }

        e.dataTable tbody tr.active td,
        .table.dataTable tbody tr.active th {
            background-color: #08C;
            color: white;
        }

        .table.dataTable tbody tr.active:hover td,
        .table.dataTable tbody tr.active:hover th {
            background-color: #0075b0 !important;
        }

        .table.dataTable tbody tr.active th > a,
        .table.dataTable tbody tr.active td > a {
            color: white;
        }

        .table-striped.dataTable tbody tr.active:nth-child(odd) td,
        .table-striped.dataTable tbody tr.active:nth-child(odd) th {
            background-color: #017ebc;
        }

        table.DTTT_selectable tbody tr {
            cursor: pointer;
        }

        div.DTTT .btn:hover {
            text-decoration: none !important;
        }

        ul.DTTT_dropdown.dropdown-menu {
        z-index: 2003;
        }

        ul.DTTT_dropdown.dropdown-menu a {
            color: #333 !important;
        }

        ul.DTTT_dropdown.dropdown-menu li {
            position: relative;
        }

        ul.DTTT_dropdown.dropdown-menu li:hover a {
            background-color: #0088cc;
            color: white !important;
        }

        div.DTTT_collection_background {
            z-index: 2002;	
        }

        div.DTTT_print_info {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 400px;
            height: 150px;
            margin-left: -200px;
            margin-top: -75px;
            text-align: center;
            color: #333;
            padding: 10px 30px;
            opacity: 0.95;

            background-color: white;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 6px;
            
            -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.5);
                    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.5);
        }

        div.DTTT_print_info h6 {
            font-weight: normal;
            font-size: 28px;
            line-height: 28px;
            margin: 1em;
        }

        div.DTTT_print_info p {
            font-size: 14px;
            line-height: 20px;
        }

        div.dataTables_processing {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 60px;
            margin-left: -50%;
            margin-top: -25px;
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center;
            font-size: 1.2em;
            background-color: white;
            background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255,255,255,0)), color-stop(25%, rgba(255,255,255,0.9)), color-stop(75%, rgba(255,255,255,0.9)), color-stop(100%, rgba(255,255,255,0)));
            background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 25%, rgba(255,255,255,0.9) 75%, rgba(255,255,255,0) 100%);
            background: -moz-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 25%, rgba(255,255,255,0.9) 75%, rgba(255,255,255,0) 100%);
            background: -ms-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 25%, rgba(255,255,255,0.9) 75%, rgba(255,255,255,0) 100%);
            background: -o-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 25%, rgba(255,255,255,0.9) 75%, rgba(255,255,255,0) 100%);
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 25%, rgba(255,255,255,0.9) 75%, rgba(255,255,255,0) 100%);
        }

        div.DTFC_LeftHeadWrapper table,
        div.DTFC_LeftFootWrapper table,
        div.DTFC_RightHeadWrapper table,
        div.DTFC_RightFootWrapper table,
        table.DTFC_Cloned tr.even {
            background-color: white;
            margin-bottom: 0;
        }
        
        div.DTFC_RightHeadWrapper table ,
        div.DTFC_LeftHeadWrapper table {
            border-bottom: none !important;
            margin-bottom: 0 !important;
            border-top-right-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
        }
        
        div.DTFC_RightHeadWrapper table thead tr:last-child th:first-child,
        div.DTFC_RightHeadWrapper table thead tr:last-child td:first-child,
        div.DTFC_LeftHeadWrapper table thead tr:last-child th:first-child,
        div.DTFC_LeftHeadWrapper table thead tr:last-child td:first-child {
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
        }
        
        div.DTFC_RightBodyWrapper table,
        div.DTFC_LeftBodyWrapper table {
            border-top: none;
            margin: 0 !important;
        }
        
        div.DTFC_RightBodyWrapper tbody tr:first-child th,
        div.DTFC_RightBodyWrapper tbody tr:first-child td,
        div.DTFC_LeftBodyWrapper tbody tr:first-child th,
        div.DTFC_LeftBodyWrapper tbody tr:first-child td {
            border-top: none;
        }
        
        div.DTFC_RightFootWrapper table,
        div.DTFC_LeftFootWrapper table {
            border-top: none;
            margin-top: 0 !important;
        }

        div.FixedHeader_Cloned table {
            margin: 0 !important
        }
    </style>

    <style>
        table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child,
        table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child {
        position: relative;
        padding-left: 30px;
        cursor: pointer;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before,
        table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child:before {
        top: 8px;
        left: 4px;
        height: 16px;
        width: 16px;
        display: block;
        position: absolute;
        color: white;
        border: 2px solid white;
        border-radius: 16px;
        text-align: center;
        line-height: 14px;
        box-shadow: 0 0 3px #444;
        box-sizing: content-box;
        content: '+';
        background-color: #31b131;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child.dataTables_empty:before,
        table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child.dataTables_empty:before {
        display: none;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr.parent > td:first-child:before,
        table.dataTable.dtr-inline.collapsed > tbody > tr.parent > th:first-child:before {
        content: '-';
        background-color: #d33333;
        }
        table.dataTable.dtr-inline.collapsed > tbody > tr.child td:before {
        display: none;
        }
        table.dataTable.dtr-inline.collapsed.compact > tbody > tr > td:first-child,
        table.dataTable.dtr-inline.collapsed.compact > tbody > tr > th:first-child {
        padding-left: 27px;
        }
        table.dataTable.dtr-inline.collapsed.compact > tbody > tr > td:first-child:before,
        table.dataTable.dtr-inline.collapsed.compact > tbody > tr > th:first-child:before {
        top: 5px;
        left: 4px;
        height: 14px;
        width: 14px;
        border-radius: 14px;
        line-height: 12px;
        }
        table.dataTable.dtr-column > tbody > tr > td.control,
        table.dataTable.dtr-column > tbody > tr > th.control {
        position: relative;
        cursor: pointer;
        }
        table.dataTable.dtr-column > tbody > tr > td.control:before,
        table.dataTable.dtr-column > tbody > tr > th.control:before {
        top: 50%;
        left: 50%;
        height: 16px;
        width: 16px;
        margin-top: -10px;
        margin-left: -10px;
        display: block;
        position: absolute;
        color: white;
        border: 2px solid white;
        border-radius: 16px;
        text-align: center;
        line-height: 14px;
        box-shadow: 0 0 3px #444;
        box-sizing: content-box;
        content: '+';
        background-color: #31b131;
        }
        table.dataTable.dtr-column > tbody > tr.parent td.control:before,
        table.dataTable.dtr-column > tbody > tr.parent th.control:before {
        content: '-';
        background-color: #d33333;
        }
        table.dataTable > tbody > tr.child {
        padding: 0.5em 1em;
        }
        table.dataTable > tbody > tr.child:hover {
        background: transparent !important;
        }
        table.dataTable > tbody > tr.child ul {
        display: inline-block;
        list-style-type: none;
        margin: 0;
        padding: 0;
        }
        table.dataTable > tbody > tr.child ul li {
        border-bottom: 1px solid #efefef;
        padding: 0.5em 0;
        }
        table.dataTable > tbody > tr.child ul li:first-child {
        padding-top: 0;
        }
        table.dataTable > tbody > tr.child ul li:last-child {
        border-bottom: none;
        }
        table.dataTable > tbody > tr.child span.dtr-title {
        display: inline-block;
        min-width: 75px;
        font-weight: bold;
        }
    </style>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/css/sb-admin-2.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<style> 
		body {
			background-color:rgb(255, 255, 255);
            background-position: center;
            background-size: cover;
		}

		a {
			color:rgb(0, 0, 0);
		}
		a:hover,
		a:focus,
		a.active {
			color:rgb(0, 0, 0);
		}

		h1 { font-size: 30px }
		h2 { font-size: 24px }
		h3 { font-size: 18px }
		h4 { font-size: 16px }
		h5 { font-size: 14px }
		h6 { font-size: 12px }

		h1.page-header {
			border-color: #000000;
		}

		.clear-both {
			clear: both;
		}
		.float-left {
			float: left !important;
		}
		.float-right {
			float: right !important;
		}

		.image-brand {
			position: relative;
			margin-top: -2px;
			margin-right: 6px;
		}

		.huge {
			font-size: 1.8rem;
		}

        .nav-white a, .nav-white a i {
            color: white;
        }

		.navbar {
			min-height: 20px;
		}

        .navbar-top-links .dropdown > a {
        background-color: #FF9D00;
        padding: 10px 15px;
        color: #fff;
        display: block;
        }

        .navbar-top-links .dropdown > a,
        .navbar-top-links .dropdown.open > a {
            background-color: #FF9D00 !important;
            padding: 15px;
            color: #ffffff !important;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .navbar-top-links .dropdown > a:hover,
        .navbar-top-links .dropdown.open > a:hover {
            background-color: #FF9D00 !important;
            color: #ffffff !important;
        }

        .navbar-top-links .dropdown-menu {
            min-width: 100%;
            padding: 0;
            border: none;
            border-radius: 0;
            margin-top: 0;
        }

        .navbar-top-links .dropdown-menu li a {
            padding: 15px;
            background-color: #ffffff !important;
            color: #000000 !important;
            font-weight: 400;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .navbar-top-links .dropdown-menu li a:hover {
            background-color: #ffffff !important;
            color: #000000 !important;
        }

        .navbar-top-links .dropdown > a .fa-caret-down {
            display: none;
        }

        .navbar-default.sidebar {
            background-color: #565656;
            min-height: 93vh;
        }

        #side-menu > li > a[href="barang.php"] {
            background-color: #FF9D00;
        }

		.panel-default {
			border: none;
			border-radius: 3px;
		}
        
		.panel-default .panel-heading {
			background-color: #ffffff;
			border-color:rgb(196, 195, 195);
			border-radius: 3px 3px 0 0;
		}

		.sidebar ul li a.active {
			color: #ffffff;
			background-color:rgb(0, 0, 0);
		}

		.table thead tr th {
			text-align: center;
			vertical-align: middle;
		}

        #page-wrapper {
            position: relative;
            background-image: url('foto/background.jpg');
            background-position: center;
            background-size: cover;
            overflow: hidden;
            min-height: 100vh;
        }

        #page-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: 1;
        }

        #page-wrapper > * {
            position: relative;
            z-index: 2;
        }

		#side-menu {
			margin-bottom: 40px;
		}

        .dropdown-menu,
        .dropdown:focus-within .dropdown-menu {
        display: block;
        }

        .dropdown-menu {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        z-index: 1000;
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .dropdown-toggle:focus {
        outline: none;
        }

		@media(max-width: 767px) {
			#page-wrapper {
				margin-bottom: 60px;
			}
			.huge {
				font-size: 1.5em;
			}
		}
	</style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:rgba(0, 0, 0, 0.86); font-family: Roboto;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-xs" href="index.php" style="display: flex; align-items: center;">
                    <img src="foto/logo_putih.jpg" alt="brand" width="32" style="margin-right: 10px;" class="float-left image-brand">
                    <div class="float-right" style="color: white;">&nbsp;<strong>BengkelKu</strong></div>
                    <div class="clear-both"></div>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-right" style="font-weight: 400;">
                <li class="dropdown dropdown-right btn-warning" style="width: 100%;">
                    <a class="dropdown-toggle btn-warning" data-toggle="dropdown" href="#">
                        <img src="foto/<?php echo $sess_admfoto;?>" width="20px" height="20px" padding="0px">&nbsp;&nbsp;<?php echo ucfirst($sess_admname); ?>&nbsp;<i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php" style="padding: 15px;"><i class="fa fa-sign-out fa-fw"></i> Keluar</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation" style="font-weight: 700;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search" style="color: white;">
                            <h4 style="font-weight: 700">Data Barang BengkelKu</h4>
                            <h5 class="text-muted" style="color: white; font-weight: 400;"><i class="fa fa-calendar fa-fw"></i>&nbsp;<?php echo $hari_ini.", ".$tanggal." ".$bulan_ini." ".$tahun ?></h5>
                        </li>
                        <li>
                            <a href="barang.php" style="color: white;">
                                <i class="fa fa-th-large fa-fw" style="color: white;"></i>&nbsp;Mengelola Data Barang
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>