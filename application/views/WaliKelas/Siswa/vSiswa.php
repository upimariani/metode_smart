<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10"> Informasi Siswa</h5>
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

							<li class="breadcrumb-item"><a href="<?= base_url('WaliKelas/cAnalisis') ?>">Siswa</a></li>
						</ul>
						<button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#exampleModalLive"><i class="feather mr-2 icon-plus-circle"></i>Tambah Data Siswa</button>

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
									foreach ($siswa as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->angkatan ?></td>
											<td><a href="<?= base_url('WaliKelas/cSiswa/delete/' . $value->id_siswa) ?>" type="button" class="btn  btn-icon btn-danger"><i class="feather icon-trash"></i></a>
												<button type="button" class="btn  btn-icon btn-warning" data-toggle="modal" data-target="#editSiswa<?= $value->id_siswa ?>"><i class="feather icon-edit"></i></button>
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
				<h5 class="modal-title" id="exampleModalLiveLabel">Masukkan Data Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('WaliKelas/cSiswa/create') ?>" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama Siswa</label>
						<input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<small id="emailHelp" class="form-text text-muted">Masukkan Nama Siswa</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Jenis Kelamin</label>
						<select name="jk" class="form-control" id="exampleFormControlSelect1" required>
							<option value="">---Pilih Jenis Kelamin---</option>
							<option value="Perempuan">Perempuan</option>
							<option value="Laki - Laki">Laki - Laki</option>
						</select>
						<small id="emailHelp" class="form-text text-muted">Masukkan Jenis Kelamin</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Kelas</label>
						<select name="kelas" class="form-control" id="exampleFormControlSelect1" required>
							<option value="">---Pilih Kelas---</option>
							<option value="X">X</option>
							<option value="XI">XI</option>
							<option value="XII">XII</option>
						</select>
						<small id="emailHelp" class="form-text text-muted">Masukkan Kelas</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Angkatan</label>
						<input type="text" name="angkatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<small id="emailHelp" class="form-text text-muted">Masukkan Angkatan</small>
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

<?php
foreach ($siswa as $key => $value) {
?>
	<div id="editSiswa<?= $value->id_siswa ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLiveLabel">Masukkan Data Siswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('WaliKelas/cSiswa/updateSiswa/' . $value->id_siswa) ?>" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1">Nama Siswa</label>
							<input type="text" name="nama" value="<?= $value->nama_siswa ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							<small id="emailHelp" class="form-text text-muted">Masukkan Nama Siswa</small>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Jenis Kelamin</label>
							<select name="jk" class="form-control" id="exampleFormControlSelect1" required>
								<option value="">---Pilih Jenis Kelamin---</option>
								<option value="Perempuan" <?php if ($value->jk == 'Perempuan') {
																echo 'selected';
															} ?>>Perempuan</option>
								<option value="Laki - Laki" <?php if ($value->jk == 'Laki - Laki') {
																echo 'selected';
															} ?>>Laki - Laki</option>
							</select>
							<small id="emailHelp" class="form-text text-muted">Masukkan Jenis Kelamin</small>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Kelas</label>
							<select name="kelas" class="form-control" id="exampleFormControlSelect1" required>
								<option value="">---Pilih Kelas---</option>
								<option value="X" <?php if ($value->kelas == 'X') {
														echo 'selected';
													} ?>>X</option>
								<option value="XI" <?php if ($value->kelas == 'XI') {
														echo 'selected';
													} ?>>XI</option>
								<option value="XII" <?php if ($value->kelas == 'XII') {
														echo 'selected';
													} ?>>XII</option>
							</select>
							<small id="emailHelp" class="form-text text-muted">Masukkan Kelas</small>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Angkatan</label>
							<input type="text" value="<?= $value->angkatan ?>" name="angkatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							<small id="emailHelp" class="form-text text-muted">Masukkan Angkatan</small>
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
<?php
}
?>