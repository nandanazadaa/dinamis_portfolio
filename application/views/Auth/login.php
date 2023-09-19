<!doctype html>
<html lang="en">

<head>
	<title><?= $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>images/title.png" title="Favicon" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/stylee.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?= base_url('assets/') ?>images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Dulu NGAB!</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
					<?= $this->session->flashdata('message'); ?>
						<form action="<?= base_url('Auth')?>" class="signin-form" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="username">
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="Password" name="password">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
							</div>
							<style>
								a:hover{
									color: white ;
								}
							</style>
							<div class="small text-center"><a href="<?= base_url('Auth/register') ?>">Belum memiliki akun? Silahkan registrasi !</a></div>

						</form>
					
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/popper.js"></script>
	<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/main.js"></script>

</body>

</html>