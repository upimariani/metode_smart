<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h4 class="m-b-10"> Informasi Kriteria Absensi</h4>
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

							<li class="breadcrumb-item"><a href="#">Kriteria</a></li>
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
			<div class="col-xl-6">
				<div class="card">
					<div class="card-header">
						<h4>Informasi Kriteria Absensi</h4>
					</div>
					<div class="card-body table-border-style">

						<div class="table-responsive">

							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Range Absensi</th>
										<th>Nilai Absensi</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($absensi as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->range_absensi ?></td>
											<td><?= $value->nilai_absensi ?></td>
											<td><a href="<?= base_url('Admin/cKriteria/deleteAbsensi/' . $value->id_absensi) ?>" type="button" class="btn  btn-icon btn-danger"><i class="feather icon-trash"></i></a>
												<button type="button" class="btn  btn-icon btn-warning" data-toggle="modal" data-target="#edituser<?= $value->id_absensi ?>"><i class="feather icon-edit"></i></button>
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
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h5>Masukkan Data Kriteria Absensi</h5>
					</div>
					<div class="card-body">
						<form action="<?= base_url('Admin/cKriteria/absensi') ?>" method="POST">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="floating-label" for="Email">Range Awal</label>
										<input type="text" name="range" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Masukkan Range Awal Kriteria Raport">
										<?= form_error('range', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
								<div class=" col-sm-6">
									<div class="form-group">
										<label class="floating-label" for="Text">Nilai</label>
										<input type="text" name="nilai" class="form-control" id="Text" placeholder="Masukkan Nilai">
										<?= form_error('nilai', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-success"><i class="feather mr-2 icon-check-circle"></i>Simpan Data</button>
						</form>
					</div>
				</div>
			</div>
			<!-- [ Background-Utilities ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</section>

<?php
foreach ($absensi as $key => $value) {
?>
	<div id="edituser<?= $value->id_absensi ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLiveLabel">Perbaharui Data Kriteria <?= $value->range_absensi ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="card-body">
					<form action="<?= base_url('Admin/cKriteria/updateAbsensi/' . $value->id_absensi) ?>" method="POST">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="floating-label" for="Email">Range Awal</label>
									<input type="text" name="range" value="<?= $value->range_absensi ?>" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Masukkan Range Awal Kriteria Raport">
									<?= form_error('range', '<small class="text-danger">', '</small>') ?>
								</div>
							</div>
							<div class=" col-sm-6">
								<div class="form-group">
									<label class="floating-label" for="Text">Nilai</label>
									<input type="text" name="nilai" value="<?= $value->nilai_absensi ?>" class="form-control" id="Text" placeholder="Masukkan Nilai">
									<?= form_error('nilai', '<small class="text-danger">', '</small>') ?>
								</div>
							</div>
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