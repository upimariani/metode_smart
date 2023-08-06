<!-- Required Js -->
<script src="<?= base_url('asset/flat-able-lite/dist/') ?>assets/js/vendor-all.min.js"></script>
<script src="<?= base_url('asset/flat-able-lite/dist/') ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url('asset/flat-able-lite/dist/') ?>assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="<?= base_url('asset/flat-able-lite/dist/') ?>assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="<?= base_url('asset/flat-able-lite/dist/') ?>assets/js/pages/dashboard-main.js"></script>
<script>
	console.log = function() {}
	$("#data-siswa").on('change', function() {

		$(".nama").html($(this).find(':selected').attr('data-nama'));
		$(".nama").val($(this).find(':selected').attr('data-nama'));


		$(".raport").html($(this).find(':selected').attr('data-raport'));
		$(".raport").val($(this).find(':selected').attr('data-raport'));

		$(".jk").html($(this).find(':selected').attr('data-jk'));
		$(".jk").val($(this).find(':selected').attr('data-jk'));

		$(".kelas").html($(this).find(':selected').attr('data-kelas'));
		$(".kelas").val($(this).find(':selected').attr('data-kelas'));

		$(".angkatan").html($(this).find(':selected').attr('data-angkatan'));
		$(".angkatan").val($(this).find(':selected').attr('data-angkatan'));
	});
</script>

<script>
	console.log = function() {}
	$("#data-absensi").on('change', function() {

		$(".absensi").html($(this).find(':selected').attr('data-absensi'));
		$(".absensi").val($(this).find(':selected').attr('data-absensi'));

	});
</script>

<script>
	console.log = function() {}
	$("#data-sikap").on('change', function() {

		$(".sikap").html($(this).find(':selected').attr('data-sikap'));
		$(".sikap").val($(this).find(':selected').attr('data-sikap'));

	});
</script>

<script>
	console.log = function() {}
	$("#data-kejuaraan").on('change', function() {

		$(".kejuaraan").html($(this).find(':selected').attr('data-kejuaraan'));
		$(".kejuaraan").val($(this).find(':selected').attr('data-kejuaraan'));

	});
</script>

<script>
	console.log = function() {}
	$("#data-keaktifan").on('change', function() {

		$(".keaktifan").html($(this).find(':selected').attr('data-keaktifan'));
		$(".keaktifan").val($(this).find(':selected').attr('data-keaktifan'));

	});
</script>
</body>

</html>