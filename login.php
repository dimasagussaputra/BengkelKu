<?php
$pagedesc = "Login"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BengkelKu - <?php echo $pagedesc ?></title>

	<link href="foto/logo_putih.jpg" rel="icon" type="images/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

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
		.btn-warning:hover {
			filter: none !important;
			transform: none !important;
		}
		.form-container {
			background-color: #ffffff;
			border-radius: 15px;
			box-shadow: 0 5px 15px rgba(0,0,0,0.1);
			padding: 30px;
		}
	</style>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body style="background: url('foto/background.jpg') no-repeat center center fixed; background-size: cover;">
	<section id="main-wrapper" style="margin-top: 200px">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1"><?php include("layout_alert.php"); ?></div>
			</div>
			<div class="row">
				<div class="form-container col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
					<div class="row">
						<div class="col-lg-12">
							<div class="text-center">
								<div style="display: flex; align-items: center; justify-content: center;">
									<img src="foto/logo_hitam.jpg" width="70" height="80" alt="Logo" style="margin-right: 10px;">
									<div style="text-align: left;">
										<h2 style="margin: 0; font-family: 'Squada One'; font-size: 45px;">BengkelKu</h2>
										<p style="margin: 0; font-size: 14px;">Solusi Manajemen Bengkel Anda</p>
									</div>
								</div>
							</div>
							<br/>
							<form action="login_auth.php" method="post">
								<div class="form-group">
									<input type="text" class="form-control" name="username" placeholder="Username" required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-warning btn-block" name="login" value="Masuk">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove();
			});
		}, 3000);
	});
	</script>

</body>
</html>
