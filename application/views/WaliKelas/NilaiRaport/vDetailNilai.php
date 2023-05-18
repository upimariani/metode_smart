<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10"> Informasi Detail Nilai Raport</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url('WaliKelas/cDasboardWaliKelas') ?>"><i class="feather icon-home"></i></a></li>

							<li class="breadcrumb-item"><a href="<?= base_url('WaliKelas/cAnalisis') ?>">Nilai Raport</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">

			<!-- [ dark-table ] end -->
			<!-- [ stiped-table ] start -->
			<div class="col-md-6 col-xl-4">

				<hr>
				<div class="card">
					<h5 class="card-header">Nilai Raport</h5>
					<div class="card-body">
						<?php
						foreach ($detailNilai as $key => $value) {
						?>
							<h5 class="card-title">Mata Pelajaran : <?= $value->mata_pelajaran ?></h5>
							<p class="card-text">Nilai : <?= $value->nilai ?></p>
							<hr>

						<?php
						}
						?>
						<a href="<?= base_url('WaliKelas/cNilaiSiswa') ?>" class="btn  btn-primary">Kembali</a>
					</div>
				</div>
			</div>

			<!-- [ Background-Utilities ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</section>