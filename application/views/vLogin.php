<!DOCTYPE html>
<html lang="en">

<head>

	<title>LOGIN USER</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->

	<!-- vendor css -->
	<link rel="stylesheet" href="<?= base_url('asset/flat-able-lite/dist/') ?>assets/css/style.css">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Sign in User</h4>
						<h4 class="mb-3 f-w-400">MAN 2 KUNINGAN</h4>
						<?php
						if ($this->session->userdata('error')) {
						?>
							<div class="alert alert-danger" role="alert">
								<?= $this->session->userdata('error') ?>
							</div>
						<?php
						}
						?>
						<?php
						if ($this->session->userdata('success')) {
						?>
							<div class="alert alert-success" role="alert">
								<?= $this->session->userdata('success') ?>
							</div>
						<?php
						}
						?>


						<img class="img-radius" src="<?= base_url('asset/img-sklh.png') ?>" alt="User-Profile-Image">
						<form action="<?= base_url('cLogin') ?>" method="POST">
							<hr>
							<div class="form-group mb-3">
								<input type="text" name="username" class="form-control" id="Email" placeholder="Username">
								<?= form_error('username', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-4">
								<input type="password" name="password" class="form-control" id="Password" placeholder="Password">
								<?= form_error('password', '<small class="text-danger">', '</small>') ?>
							</div>

							<button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?= base_url('asset/flat-able-lite/dist/') ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url('asset/flat-able-lite/dist/') ?>assets/js/pcoded.min.js"></script>



</body>

</html>