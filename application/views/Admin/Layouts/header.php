<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div ">
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="<?= base_url('asset/img-sklh.png') ?>" alt="User-Profile-Image">
						<div class="user-details">
							<span>John Doe</span>
							<div id="more-details">Admin<i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="<?= base_url('cLogin/logout') ?>"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('Admin/cDashboardAdmin') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Kelola Data</label>

					</li>
					<li class="nav-item">
						<a href="<?= base_url('Admin/cUser') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">User</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Kriteria Analisis</span></a>
						<ul class="pcoded-submenu">
							<li><a href="<?= base_url('Admin/cKriteria/absensi') ?>">Kriteria Absensi</a></li>
							<li><a href="<?= base_url('Admin/cKriteria/keaktifan') ?>">Kriteria Keaktifan</a></li>
							<li><a href="<?= base_url('Admin/cKriteria/kejuaraan') ?>">Kriteria Kejuaraan</a></li>
							<li><a href="<?= base_url('Admin/cKriteria/kepribadian') ?>">Kriteria Kepribadian</a></li>
							<li><a href="<?= base_url('Admin/cKriteria/raport') ?>">Kriteria Raport</a></li>
						</ul>
					</li>
				</ul>



			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">


		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			<a href="#!" class="b-brand">
				<!-- ========   change your logo hear   ============ -->
				<img src="assets/images/logo.png" alt="" class="logo">
				<img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
			</a>
			<a href="#!" class="mob-toggler">
				<i class="feather icon-more-vertical"></i>
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
					<div class="search-bar">
						<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
						<button type="button" class="close" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</li>

			</ul>

		</div>


	</header>
	<!-- [ Header ] end -->