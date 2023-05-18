<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10"> Informasi User</h5>
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
							<li class="breadcrumb-item"><a href="<?= base_url('Admin/cDashboardAdmin') ?>"><i class="feather icon-home"></i></a></li>

							<li class="breadcrumb-item"><a href="<?= base_url('Admin/cUser') ?>">User</a></li>
						</ul>
						<button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#exampleModalLive"><i class="feather mr-2 icon-plus-circle"></i>Tambah Data User</button>

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
										<th>Nama User</th>
										<th>No Telepon</th>
										<th>Alamat</th>
										<th>Username</th>
										<th>Password</th>
										<th>Level User</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($user as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_user ?></td>
											<td><?= $value->alamat ?></td>
											<td><?= $value->no_hp ?></td>
											<td><?= $value->username ?></td>
											<td><?= $value->password ?></td>
											<td><?php if ($value->level_user == '1') {
													echo '<span class="badge badge-success">Admin</span>';
												} else if ($value->level_user == '2') {
													echo '<span class="badge badge-warning">Wali Kelas</span>';
												} else if ($value->level_user == '3') {
													echo '<span class="badge badge-info">Kepala Sekolah</span>';
												} ?></td>
											<td><a href="<?= base_url('Admin/cUser/delete/' . $value->id_user) ?>" type="button" class="btn  btn-icon btn-danger"><i class="feather icon-trash"></i></a>
												<button type="button" class="btn  btn-icon btn-warning" data-toggle="modal" data-target="#edituser<?= $value->id_user ?>"><i class="feather icon-edit"></i></button>
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
				<h5 class="modal-title" id="exampleModalLiveLabel">Masukkan Data User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('Admin/cUser/create') ?>" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama User</label>
						<input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<small id="emailHelp" class="form-text text-muted">Masukkan Nama User</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Alamat</label>
						<input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<small id="emailHelp" class="form-text text-muted">Masukkan Alamat User</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">No Telepon</label>
						<input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<small id="emailHelp" class="form-text text-muted">Masukkan No Telepon</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<small id="emailHelp" class="form-text text-muted">Masukkan Username User</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Password</label>
						<input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<small id="emailHelp" class="form-text text-muted">Masukkan Password User</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Level User</label>
						<select name="level_user" class="form-control" id="exampleFormControlSelect1" required>
							<option value="">---Pilih Level User---</option>
							<option value="1">Admin</option>
							<option value="2">Wali Kelas</option>
							<option value="3">Kepala Sekolah</option>
						</select>
						<small id="emailHelp" class="form-text text-muted">Masukkan Level User</small>
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
foreach ($user as $key => $value) {
?>
	<div id="edituser<?= $value->id_user ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLiveLabel">Perbaharui Data User <?= $value->nama_user ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('Admin/cUser/update/' . $value->id_user) ?>" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1">Nama User</label>
							<input type="text" name="nama" value="<?= $value->nama_user ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							<small id="emailHelp" class="form-text text-muted">Masukkan Nama User</small>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Alamat</label>
							<input type="text" name="alamat" value="<?= $value->alamat ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							<small id="emailHelp" class="form-text text-muted">Masukkan Alamat User</small>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">No Telepon</label>
							<input type="text" name="no_hp" value="<?= $value->no_hp ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							<small id="emailHelp" class="form-text text-muted">Masukkan No Telepon</small>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input type="text" name="username" value="<?= $value->username ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							<small id="emailHelp" class="form-text text-muted">Masukkan Username User</small>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Password</label>
							<input type="text" name="password" value="<?= $value->password ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							<small id="emailHelp" class="form-text text-muted">Masukkan Password User</small>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Level User</label>
							<select name="level_user" class="form-control" id="exampleFormControlSelect1" required>
								<option value="">---Pilih Level User---</option>
								<option value="1" <?php if ($value->level_user == '1') {
														echo 'selected';
													} ?>>Admin</option>
								<option value="2" <?php if ($value->level_user == '2') {
														echo 'selected';
													} ?>>Wali Kelas</option>
								<option value="3" <?php if ($value->level_user == '3') {
														echo 'selected';
													} ?>>Kepala Sekolah</option>
							</select>
							<small id="emailHelp" class="form-text text-muted">Masukkan Level User</small>
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