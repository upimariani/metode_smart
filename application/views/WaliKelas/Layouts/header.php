<body class="">
	<!-- [ Pre-loader ] start -->

	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div ">
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="<?= base_url('asset/img-sklh.png') ?>" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">Wali Kelas</div>
						</div>
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('WaliKelas/cDasboardWaliKelas') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Analisis Metode SMART</label>

					</li>
					<li class="nav-item">
						<a href="<?= base_url('WaliKelas/cSiswa') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sun"></i></span><span class="pcoded-mtext">Data Siswa</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('WaliKelas/cNilaiSiswa') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-list"></i></span><span class="pcoded-mtext">Nilai Siswa</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('WaliKelas/cAnalisis') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Analisis Metode SMART</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('cLogin/logout') ?>" class="nav-link"><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Logout</span></a>
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