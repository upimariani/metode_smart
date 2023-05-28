<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10"> Informasi Hasil Analisis Siswa Terbaik</h5>
							<?php
							if ($this->session->userdata('success')) {
							?>
								<div class="alert alert-success" role="alert">
									<?= $this->session->userdata('success') ?>
								</div>
							<?php
							}
							?>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url('WaliKelas/cDasboardWaliKelas') ?>"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="<?= base_url('WaliKelas/cAnalisis') ?>">Metode SMART</a></li>
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
			<div class="col-xl-8">
				<div class="card">
					<div class="card-header">
						<button onclick="window.print()" class="btn btn-success"><i class="feather icon-file"></i> Print</button>
						<a href="<?= base_url('KepalaSekolah/cHasilAnalisis/download/' . $kelas . '/' . $angkatan) ?>" class="btn btn-warning"><i class="feather icon-save"></i> Save</a>
					</div>
					<div class="card-body table-border-style">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Siswa</th>
										<th>Kelas</th>
										<th>Angkatan</th>
										<th>Jenis Kelamin</th>
										<th>Kriteria</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($view as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->angkatan ?></td>
											<td><?= $value->jk ?></td>
											<td>Nilai Raport : <?= $value->range_raport ?><br>
												Nilai Keaktifan : <?= $value->range_keaktifan ?> Ekstrakulikuler<br>
												Nilai Absensi : <?= $value->range_absensi ?> %<br>
												Nilai Kepribadian : <?= $value->range_kepribadian ?><br>
												Nilai Kejuaraan : <?= $value->range_kejuaraan ?>
												<h5>Hasil : <?= $value->hasil ?></h5>
											</td>

										</tr>
									<?php
									}
									?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<!-- [ Background-Utilities ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</section>