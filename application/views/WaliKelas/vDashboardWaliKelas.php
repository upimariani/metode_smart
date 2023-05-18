<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Dashboard</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<?php
			$siswa = $this->db->query("SELECT COUNT(id_siswa) as jml FROM `analisis_siswa`")->row();
			$analisis = $this->db->query("SELECT COUNT(id_siswa) as jml FROM `analisis_siswa` WHERE hasil != 'NULL'")->row();
			$user = $this->db->query("SELECT COUNT(id_user) as jml FROM `user`")->row();
			?>
			<!-- table card-1 start -->
			<div class="col-md-12 col-xl-4">
				<div class="card flat-card">
					<div class="row-table">
						<div class="col-sm-6 card-body br">
							<div class="row">
								<div class="col-sm-4">
									<i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
								</div>
								<div class="col-sm-8 text-md-center">
									<h5><?= $siswa->jml ?></h5>
									<span>Siswa</span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 card-body">
							<div class="row">
								<div class="col-sm-4">
									<i class="icon feather icon-music text-c-red mb-1 d-block"></i>
								</div>
								<div class="col-sm-8 text-md-center">
									<h5><?= $user->jml ?></h5>
									<span>User</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row-table">
						<div class="col-sm-6 card-body br">
							<div class="row">
								<div class="col-sm-4">
									<i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
								</div>
								<div class="col-sm-8 text-md-center">
									<h5><?= $analisis->jml ?></h5>
									<span>Analisis</span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 card-body">
							<div class="row">
								<div class="col-sm-4">
									<i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i>
								</div>
								<div class="col-sm-8 text-md-center">
									<h5>5</h5>
									<span>Kriteria</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- widget primary card start -->
				<div class="card flat-card widget-primary-card">
					<div class="row-table">
						<div class="col-sm-3 card-body">
							<i class="feather icon-star-on"></i>
						</div>
						<div class="col-sm-9">
							<h4>Hallo!</h4>
							<h6>Selamat Datang Wali Kelas</h6>
						</div>
					</div>
				</div>
				<!-- widget primary card end -->
			</div>
			<!-- table card-1 end -->
			<!-- table card-2 start -->

			<!-- Latest Customers end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>