<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10"> Informasi Nilai Raport</h5>
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

							<li class="breadcrumb-item"><a href="<?= base_url('WaliKelas/cAnalisis') ?>">Nilai Raport</a></li>
						</ul>
						<button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#exampleModalLive"><i class="feather mr-2 icon-plus-circle"></i>Tambah Nilai Raport Siswa</button>

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
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($nilai_siswa as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->angkatan ?></td>
											<td><a href="<?= base_url('WaliKelas/cNilaiSiswa/detailNilai/' . $value->id_siswa) ?>" type="button" class="btn  btn-icon btn-info"><i class="feather icon-info"></i></a>
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
<div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLiveLabel">Masukkan Data Nilai Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('WaliKelas/cNilaiSiswa/create') ?>" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama Siswa</label>
						<select name="siswa" class="form-control" id="exampleFormControlSelect1" required>
							<option value="">---Pilih Nama Siswa---</option>
							<?php
							foreach ($siswa as $key => $value) {
							?>
								<option value="<?= $value->id_siswa ?>"><?= $value->nama_siswa ?></option>
							<?php
							}
							?>

						</select>
						<small id="emailHelp" class="form-text text-muted">Masukkan Nama Siswa</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Mata Pelajaran</label>
						<select name="mapel" class="form-control" id="exampleFormControlSelect1" required>
							<option value="">---Pilih Mata Pelajaran---</option>
							<option value="Matematika">Matematika</option>
							<option value="Bahasa Indonesia">Bahasa Indonesia</option>
							<option value="Agama">Agama</option>
							<option value="Bahasa Inggris">Bahasa Inggris</option>
						</select>
						<small id="emailHelp" class="form-text text-muted">Masukkan Mata Pelajaran</small>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Nilai</label>
						<input type="text" name="nilai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<small id="emailHelp" class="form-text text-muted">Masukkan Nilai</small>
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn  btn-primary">Save changes</button>
			</div>
			</form>
		</div>
	</div>
</div>