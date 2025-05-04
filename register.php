<?php $pagedesc = "Register"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BengkelKu - <?php echo $pagedesc ?></title>

    <link href="foto/logo_hitam.jpg" rel="icon" type="images/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">

	<style>
		body {
			background-color: #ffffff;
			font-family: 'Roboto';
			font-size: 1.4em;
		}

		.btn-warning {
			background-color: #FF9D00 !important;
			border-color: #FF9D00 !important;
			color: #ffffff !important;
		}

		.btn-warning:hover, 
		.btn-warning:focus, 
		.btn-warning:active, 
		.btn-warning.active {
			background-color: #FF9D00 !important;
			border-color: #FF9D00 !important;
			color: #ffffff !important;
			box-shadow: none !important;
			outline: none !important;
		}

		.btn-warning:hover {
			filter: none !important;
			-webkit-filter: none !important;
			transform: none !important;
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
			margin-top: -6px;
			margin-right: 6px;
		}

		.huge {
			font-size: 1.8em;
		}

		.navbar {
			min-height: 20px;
		}
		.panel-default {
			border: none;
			border-radius: 3px;
		}
		.panel-default .panel-heading {
			background-color: #ffffff;
			border-color: #337ab7;
			border-radius: 3px 3px 0 0;
		}
		.panel-default .panel-footer {
			background-color: #ffffff;
			border-color: #337ab7;
			border-radius: 0 0 3px 3px;
		}

		.sidebar ul li a.active {
			color: #ffffff;
			background-color: #337ab7;
			border-color: #4cae4c;
		}

		.table thead tr th {
			text-align: center;
			vertical-align: middle;
		}

		#page-wrapper {
			background-color:#ffffff;
			background-position: center;
			background-size: cover;
		}
		#side-menu {
			margin-bottom: 40px;
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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body style="background: url('foto/background.jpg') no-repeat center center fixed; background-size: cover;">

    <section id="main-wrapper" style="margin-top: 200px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4"><?php include("layout_alert.php"); ?></div>
            </div>
            <div class="row">
                <div id="page-wrapper" class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4" style="background-color: #ffffff; border-radius: 15px; webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05); box-shadow: 0 1px 1px rgba(0,0,0,.05)">
                    <div class="row">
                        <div class="col-lg-12">
                            <br/>
                            <div class="card-body text-center">
                                <div style="display: flex; align-items: center; justify-content: center;">
                                    <img src="foto/logo_hitam.jpg" width="70" height="80" alt="Logo" style="margin-right: 10px;">
                                    <div style="text-align: left;">
                                        <h2 style="margin: 0; text-align: justify; font-weight: regular; font-family: Squada One; font-size: 45px;">BengkelKu</h2>
                                        <p style="margin: 0; text-align: justify; font-size: 14px; font-family: Roboto;">Solusi Manajemen Bengkel Anda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form action="register_auth.php" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" style="font-weight: 600;" class="btn btn-warning btn-block" name="register" value="Daftar">
                                        </div>
                                        <h2 class="text-center" style="font-size:12px; font-family: Roboto; font-weight: 400;">Sudah punya akun? <a href="login.php" style="color:blue;">Masuk</a></h2>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>