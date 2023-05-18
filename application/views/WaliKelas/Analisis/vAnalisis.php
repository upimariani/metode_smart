<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10"> Informasi Analisis Metode SMART</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url('WaliKelas/cDasboardWaliKelas') ?>"><i class="feather icon-home"></i></a></li>

							<li class="breadcrumb-item"><a href="<?= base_url('WaliKelas/cAnalisis') ?>">Analisis</a></li>
						</ul>
						<button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="feather mr-2 icon-plus-circle"></i>Tambah Analisis Siswa Terbaik</button>

					</div>

				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">

			<!-- [ dark-table ] end -->
			<!-- [ stiped-table ] start -->
			<div class="col-xl-12">
				<div class="card">
					<div class="card-header">
					</div>
					<div class="card-body table-border-style">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Siswa</th>
										<th>Jenis Kelamin</th>
										<th>Kelas</th>
										<th>Angkatan</th>
										<th>Hasil</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($hasil_analisis as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->angkatan ?></td>
											<td><span class="badge badge-warning"><?= $value->hasil ?></span></td>
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
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLiveLabel">Masukkan Data Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('WaliKelas/cAnalisis/analisis') ?>" method="POST">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Siswa</label>
								<select name="siswa" class="form-control" id="data-siswa" required>
									<option value="">---Pilih Nama Siswa---</option>
									<?php
									foreach ($data_siswa as $key => $value) {
									?>
										<option data-raport="<?= $value->nilai ?>" data-nama="<?= $value->nama_siswa ?>" data-jk="<?= $value->jk ?>" value="<?= $value->id_siswa ?>" data-kelas="<?= $value->kelas ?>" data-angkatan="<?= $value->angkatan ?>"><?= $value->nama_siswa ?></option>
									<?php
									}
									?>

								</select><small id="emailHelp" class="form-text text-muted">Masukkan Nama User</small>
							</div>
						</div>
						<hr>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Siswa</label>
								<input type="text" class="nama form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>

							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Jenis Kelamin</label>
								<input type="text" class="jk form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Kelas</label>
								<input type="text" class="kelas form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>

							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Angkatan</label>
								<input type="text" class="angkatan form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>

							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Nilai Raport</label>
								<input type="text" name="raport" class="raport form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>

							</div>
						</div>
					</div>
					<hr>
					<h5 class="modal-title" id="exampleModalLiveLabel">Masukkan Penilaian Siswa</h5><br>
					<hr>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Nilai Keaktifan</label>
								<select name="keaktifan" class="form-control" id="data-keaktifan" required>
									<option value="">---Pilih Nilai Keaktifan---</option>
									<?php
									foreach ($kriteria['keaktifan'] as $key => $value) {
									?>
										<option data-keaktifan="<?= $value->nilai_keaktifan ?>" value="<?= $value->id_keaktifan ?>"><?= $value->range_keaktifan ?> jenis Ektrakulikuler</option>
									<?php
									}
									?>

								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Nilai Absensi</label>
								<select name="absensi" class="form-control" id="data-absensi" required>
									<option value="">---Pilih Nilai Absensi---</option>
									<?php
									foreach ($kriteria['absensi'] as $key => $value) {
									?>
										<option data-absensi="<?= $value->nilai_absensi ?>" value="<?= $value->id_absensi ?>">
											>= <?= $value->range_absensi ?> %</option>
									<?php
									}
									?>

								</select>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Nilai Sikap</label>
								<select name="kepribadian" class="form-control" id="data-sikap" required>
									<option value="">---Pilih Nilai Sikap---</option>
									<?php
									foreach ($kriteria['kepribadian'] as $key => $value) {
									?>
										<option data-sikap="<?= $value->nilai_kepribadian ?>" value="<?= $value->id_kepribadian ?>"><?= $value->range_kepribadian ?></option>
									<?php
									}
									?>

								</select>

							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Nilai Kejuaraan</label>
								<select name="kejuaraan" class="form-control" id="data-kejuaraan" required>
									<option value="">---Pilih Nilai Kejuaraan---</option>
									<?php
									foreach ($kriteria['kejuaraan'] as $key => $value) {
									?>
										<option data-kejuaraan="<?= $value->nilai_kejuaraan ?>" value="<?= $value->id_kejuaraan ?>"><?= $value->range_kejuaraan ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<input type="hidden" name="nilai_keaktifan" class="keaktifan">
					<input type="hidden" name="nilai_sikap" class="sikap">
					<input type="hidden" name="nilai_absensi" class="absensi">
					<input type="hidden" name="nilai_kejuaraan" class="kejuaraan">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn  btn-primary">Save changes</button>
			</div>
			</form>
		</div>
	</div>
</div>