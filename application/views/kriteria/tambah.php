<div class="container ">

	<h1><b>Input Data Kriteria</b></h1>
	<br>

	<!-- <form  name="myForm" onsubmit="return validateForm()" method="post"> -->
	<form action="<?php echo site_url('psurvei/tambah_data_kriteria')?>" name="myForm" class="formAdd"
		onsubmit="return validateForm()" method="post">
		<!-- <div class="card"> -->
		<div class="form-group row">
			<label for="inputno_kk" class="col-sm-2 col-form-label">No Kartu Keluarga</label>
			<div class="col-sm-10">



				<input type="number" class="form-control" name="id_kriteria" value="<?= rand(100,99999) ?>"
					id="id_kriteria" hidden>
					<input type="text" name="id_calon_penerima"  hidden>
				<input type="text" class="form-control" name="no_kk" value="<?=$penduduk->no_kk?>" id="no_kk"
					placeholder="<?= $penduduk->no_kk ?>" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label for="status_tempat_tinggal" class="col-sm-2 col-form-label">Status Tempat Tinggal</label>

			<div class="col-sm-10">
				<select name="status_tempat_tinggal" class="form-control">

					<option>Pilih Status Tempat Tinggal </option>
					<option value="Milik Sendiri">Milik Sendiri </option>
					<option value="Bukan Milik Sendiri"> Bukan Milik Sendiri </option>

				</select>


			</div>
		</div>


		<div id="main" data-loading="true">
			<div class="form-group row">
				<label for="status_lahan" class="col-sm-2 col-form-label">Status Lahan</label>
				<div class="col-sm-10">
					<select name="status_lahan" id="status_lahan" class="form-control">
						<option>Pilih Status Lahan </option>
						<option value="Milik Sendiri">Milik Sendiri </option>
						<option value="Bukan Milik Sendiri">Bukan Milik Sendiri </option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="luas_lahan" class="col-sm-2 col-form-label">Luas Lahan</label>
				<div class="col-sm-10">
					<select name="luas_lahan" id="luas_lahan" class="form-control" onchange="luass()">
						<option>Pilih Luas Lahan </option>
						<option luas="4" value="40 - 50m2">40 - 50m2 </option>
						<option luas="3" value="50 - 60m2">50 - 60m2 </option>
						<option luas="2" value="60 - 70m2">60 - 70m2 </option>
						<option luas="1" value=">70m2">>70m2 </option>
					</select>
				</div>
			</div>
			<input type="text" id="input_luas" name="" value="" hidden>

			<div class="form-group row">
				<label for="luas_lantai" class="col-sm-2 col-form-label">Luas Lantai</label>
				<div class="col-sm-10">
					<select name="luas_lantai" id="luas_lantai" class="form-control" onchange="lantaii()">
						<option>Pilih Luas Lantai </option>
						<option lantai="4" value="20 - 30m2">20 - 30m2</option>
						<option lantai="3" value="30- 40m2">30 - 40m2 </option>
						<option lantai="2" value="40 - 50m2">40 - 50m2 </option>
						<option lantai="1" value=">50m2">>50m2 </option>
					</select>
				</div>
			</div>
			<input type="text" id="input_lantai" name="" hidden value="">
			<div class="form-group row">
				<label for="jenis_lantai" class="col-sm-2 col-form-label">Jenis Lantai</label>
				<div class="col-sm-10">
					<select name="jenis_lantai" id="jenis_lantai" class="form-control" onchange="jeniss()">
						<option>Pilih Jenis Lantai </option>
						<option jenis="4" value="Kayu/Papan Kualitas Rendah">Kayu/Papan Kualitas Rendah</option>
						<option jenis="3" value="semen/bata merah">Semen/Bata Merah </option>
						<option jenis="2" value="kayu/papan kualitas tinggi">kayu/papan kualitas tinggi</option>
						<option jenis="1" value="keramik">keramik</option>
					</select>
				</div>
			</div>
			<input type="text" id="input_jlantai" hidden>
			<div class="form-group row">
				<label for="jenis_dinding" class="col-sm-2 col-form-label">Jenis Dinding</label>
				<div class="col-sm-10">
					<select name="jenis_dinding" id="jenis_dinding" class="form-control" onchange="dindingg()">
						<option>Pilih Jenis Dinding </option>
						<option dinding="3" value="Kayu Kualitas Rendah/bambu">Kayu Kualitas Rendah/Bambu</option>
						<option dinding="2" value="kayu kualitas tinggi">kayu kualitas tinggi</option>
						<option dinding="1" value="semen/beton">Semen/Beton</option>
					</select>
				</div>
			</div>
			<input type="text" id="input_dinding" hidden>

			<div class="form-group row">
				<label for="atap" class="col-sm-2 col-form-label">Atap</label>
				<div class="col-sm-10">
					<select name="atap" id="atap" class="form-control" onchange="atapp()">
						<option>Pilih Atap </option>
						<option atap="3" value="kayu/jerami">Kayu/Jerami </option>
						<option atap="2" value="seng">seng </option>
						<option atap="1" value="genteng">Genteng </option>
					</select>
				</div>
			</div>
			<input type="text" id="input_atap" hidden>

			<div class="form-group row">
				<label for="sumber_penerangan" class="col-sm-2 col-form-label">Sumber Penerangan</label>
				<div class="col-sm-10">
					<select name="sumber_penerangan" id="sumber_penerangan" class="form-control"
						onchange="sumberPenerangan()">
						<option>Pilih Sumber Penerangan</option>
						<option sumber="3" value="Lampu Minyak/Lilin">Lampu Minyak/Lilin </option>
						<option sumber="2" value="Listrik PLN">Listrik PLN </option>
						<option sumber="1" value="Listrik Non PlN">Listrik Non PLN </option>
					</select>
				</div>
			</div>
			<input type="text" id="input_penerangan" hidden>

			<div class="form-group row">
				<label for="sumber_air_minum" class="col-sm-2 col-form-label">Sumber Air Minum</label>
				<div class="col-sm-10">
					<select name="sumber_air_minum" id="sumber_air_minum" class="form-control" onchange="airMinum()">
						<option>Pilih Sumber Air Minum </option>

						<option air="4" value="Sungai/Danau">Sungai/Danau </option>
						<option air="3" value="Mata Air/Perpipaan/Sumur">Mata Air/Perpipaan/Sumur </option>
						<option air="2" value="Perpipaan Berbayar">Perpipaan Berbayar </option>
						<option air="1" value="Air Isi Ulang/Kemasan">Air Isi Ulang/Kemasan </option>
					</select>
				</div>
			</div>
			<input type="text" id="input_air_minum" hidden>
			<div class="form-group row">
				<label for="energi_memasak" class="col-sm-2 col-form-label">Energi Memasak</label>
				<div class="col-sm-10">
					<select name="energi_memasak" id="energi_memasak" class="form-control" onchange="energiMemasak()">
						<option> Pilih Energi Memasak</option>
						<option energi="3" value="Kayu Bakar">Kayu Bakar </option>
						<option energi="2" value="Minyak Tanah">Minyak Tanah </option>
						<option energi="1" value="LPG 3 Kg">LPG 3 Kg </option>
					</select>
				</div>
			</div>
			<input type="text" id="input_memasak" hidden>

			<div class="form-group row">
				<label for="fasilitas_mck" class="col-sm-2 col-form-label">Fasilitas MCK</label>
				<div class="col-sm-10">
					<select name="fasilitas_mck" id="fasilitas_mck" class="form-control" onchange="fasilitasMCK()">
						<option> Pilih Fasilitas MCK</option>

						<option mck="4" value="Tidak Ada">Tidak Ada </option>
						<option mck="3" value="MCK Umum">MCK Umum </option>
						<option mck="2" value="Berkelompok/Bertetangga">Berkelompok/Bertetangga </option>
						<option mck="1" value="Milik Sendiri">Milik Sendiri </option>
					</select>
				</div>
			</div>
			<input type="text" id="input_fasilitas_mck" hidden>
			<input type="text" id="total" name="peringkat" hidden>


			<div class="form-group row">
				<div class="col-sm-10">
					<a href="<?= site_url('psurvei/index')?>" class="btn btn-primary">kembali</a>
					<input type="submit" name="submit" value="submit" class="btn btn-primary">

				</div>
			</div>
		</div>
</div>
</div>
</form>

<?php echo form_close(); ?>

</div>

<script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	function luass() {
		// var luas = $('#luas_lahan').val();
		var luas = $("#luas_lahan").find(':selected').attr('luas');
		$('#input_luas').val(luas);
		var lantai = $("#luas_lantai").find(':selected').attr('lantai');
		var jenis = $("#jenis_lantai").find(':selected').attr('jenis');
		var dinding = $("#jenis_dinding").find(':selected').attr('dinding');
		var atap = $("#atap").find(':selected').attr('atap');
		var sumber = $("#sumber_penerangan").find(':selected').attr('sumber');
		var air = $("#sumber_air_minum").find(':selected').attr('air');
		var energi = $("#energi_memasak").find(':selected').attr('energi');
		var mckk = $("#fasilitas_mck").find(':selected').attr('mck');
		hasil = parseInt(energi) + parseInt(mckk) + parseInt(luas) + parseInt(lantai) + parseInt(jenis) + parseInt(
			dinding) + parseInt(atap) + parseInt(sumber) + parseInt(air);
		$("#total").val(hasil);
	}

	function lantaii() {
		// var luas = $('#luas_lahan').val();
		var luas = $("#luas_lahan").find(':selected').attr('luas');
		var lantai = $("#luas_lantai").find(':selected').attr('lantai');
		$('#input_lantai').val(lantai);
		var jenis = $("#jenis_lantai").find(':selected').attr('jenis');
		var dinding = $("#jenis_dinding").find(':selected').attr('dinding');
		var atap = $("#atap").find(':selected').attr('atap');
		var sumber = $("#sumber_penerangan").find(':selected').attr('sumber');
		var air = $("#sumber_air_minum").find(':selected').attr('air');
		var energi = $("#energi_memasak").find(':selected').attr('energi');
		var mckk = $("#fasilitas_mck").find(':selected').attr('mck');
		hasil = parseInt(energi) + parseInt(mckk) + parseInt(luas) + parseInt(lantai) + parseInt(jenis) + parseInt(
			dinding) + parseInt(atap) + parseInt(sumber) + parseInt(air);
		$("#total").val(hasil);
	}

	function jeniss() {
		// var luas = $('#luas_lahan').val();
		var luas = $("#luas_lahan").find(':selected').attr('luas');
		var lantai = $("#luas_lantai").find(':selected').attr('lantai');
		var jenis = $("#jenis_lantai").find(':selected').attr('jenis');
		$('#input_jlantai').val(jenis);
		var dinding = $("#jenis_dinding").find(':selected').attr('dinding');
		var atap = $("#atap").find(':selected').attr('atap');
		var sumber = $("#sumber_penerangan").find(':selected').attr('sumber');
		var air = $("#sumber_air_minum").find(':selected').attr('air');
		var energi = $("#energi_memasak").find(':selected').attr('energi');
		var mckk = $("#fasilitas_mck").find(':selected').attr('mck');
		hasil = parseInt(energi) + parseInt(mckk) + parseInt(luas) + parseInt(lantai) + parseInt(jenis) + parseInt(
			dinding) + parseInt(atap) + parseInt(sumber) + parseInt(air);
		$("#total").val(hasil);
	}

	function dindingg() {
		// var luas = $('#luas_lahan').val();
		var luas = $("#luas_lahan").find(':selected').attr('luas');
		var lantai = $("#luas_lantai").find(':selected').attr('lantai');
		var jenis = $("#jenis_lantai").find(':selected').attr('jenis');
		var dinding = $("#jenis_dinding").find(':selected').attr('dinding');
		$('#input_dinding').val(dinding);
		var atap = $("#atap").find(':selected').attr('atap');
		var sumber = $("#sumber_penerangan").find(':selected').attr('sumber');
		var air = $("#sumber_air_minum").find(':selected').attr('air');
		var energi = $("#energi_memasak").find(':selected').attr('energi');
		var mckk = $("#fasilitas_mck").find(':selected').attr('mck');
		hasil = parseInt(energi) + parseInt(mckk) + parseInt(luas) + parseInt(lantai) + parseInt(jenis) + parseInt(
			dinding) + parseInt(atap) + parseInt(sumber) + parseInt(air);
		$("#total").val(hasil);
	}

	function atapp() {
		// var luas = $('#luas_lahan').val();
		var atap = $("#atap").find(':selected').attr('atap');
		var luas = $("#luas_lahan").find(':selected').attr('luas');
		var lantai = $("#luas_lantai").find(':selected').attr('lantai');
		var jenis = $("#jenis_lantai").find(':selected').attr('jenis');
		var dinding = $("#jenis_dinding").find(':selected').attr('dinding');
		$('#input_atap').val(atap);
		var sumber = $("#sumber_penerangan").find(':selected').attr('sumber');
		var air = $("#sumber_air_minum").find(':selected').attr('air');
		var energi = $("#energi_memasak").find(':selected').attr('energi');
		var mckk = $("#fasilitas_mck").find(':selected').attr('mck');
		hasil = parseInt(energi) + parseInt(mckk) + parseInt(luas) + parseInt(lantai) + parseInt(jenis) + parseInt(
			dinding) + parseInt(atap) + parseInt(sumber) + parseInt(air);
		$("#total").val(hasil);
	}

	function sumberPenerangan() {
		// var luas = $('#luas_lahan').val();
		var atap = $("#atap").find(':selected').attr('atap');
		var luas = $("#luas_lahan").find(':selected').attr('luas');
		var lantai = $("#luas_lantai").find(':selected').attr('lantai');
		var jenis = $("#jenis_lantai").find(':selected').attr('jenis');
		var dinding = $("#jenis_dinding").find(':selected').attr('dinding');
		var sumber = $("#sumber_penerangan").find(':selected').attr('sumber');
		$('#input_penerangan').val(sumber);
		var air = $("#sumber_air_minum").find(':selected').attr('air');
		var energi = $("#energi_memasak").find(':selected').attr('energi');
		var mckk = $("#fasilitas_mck").find(':selected').attr('mck');
		hasil = parseInt(energi) + parseInt(mckk) + parseInt(luas) + parseInt(lantai) + parseInt(jenis) + parseInt(
			dinding) + parseInt(atap) + parseInt(sumber) + parseInt(air);
		$("#total").val(hasil);
	}

	function airMinum() {
		// var luas = $('#luas_lahan').val();
		var atap = $("#atap").find(':selected').attr('atap');
		var luas = $("#luas_lahan").find(':selected').attr('luas');
		var lantai = $("#luas_lantai").find(':selected').attr('lantai');
		var jenis = $("#jenis_lantai").find(':selected').attr('jenis');
		var dinding = $("#jenis_dinding").find(':selected').attr('dinding');
		var sumber = $("#sumber_penerangan").find(':selected').attr('sumber');
		var air = $("#sumber_air_minum").find(':selected').attr('air');
		$('#input_air_minum').val(air);

		var energi = $("#energi_memasak").find(':selected').attr('energi');
		var mckk = $("#fasilitas_mck").find(':selected').attr('mck');
		hasil = parseInt(energi) + parseInt(mckk) + parseInt(luas) + parseInt(lantai) + parseInt(jenis) + parseInt(
			dinding) + parseInt(atap) + parseInt(sumber) + parseInt(air);
		$("#total").val(hasil);
	}

	function energiMemasak() {
		// var luas = $('#luas_lahan').val();
		var atap = $("#atap").find(':selected').attr('atap');
		var luas = $("#luas_lahan").find(':selected').attr('luas');
		var lantai = $("#luas_lantai").find(':selected').attr('lantai');
		var jenis = $("#jenis_lantai").find(':selected').attr('jenis');
		var dinding = $("#jenis_dinding").find(':selected').attr('dinding');
		var sumber = $("#sumber_penerangan").find(':selected').attr('sumber');
		var air = $("#sumber_air_minum").find(':selected').attr('air');
		var energi = $("#energi_memasak").find(':selected').attr('energi');
		$('#input_memasak').val(energi);
		var mckk = $("#fasilitas_mck").find(':selected').attr('mck');
		hasil = parseInt(energi) + parseInt(mckk) + parseInt(luas) + parseInt(lantai) + parseInt(jenis) + parseInt(
			dinding) + parseInt(atap) + parseInt(sumber) + parseInt(air);
		$("#total").val(hasil);
		// alert(lantai);
	}

	function fasilitasMCK() {
		// var luas = $('#luas_lahan').val();

		var atap = $("#atap").find(':selected').attr('atap');
		var luas = $("#luas_lahan").find(':selected').attr('luas');
		var lantai = $("#luas_lantai").find(':selected').attr('lantai');
		var jenis = $("#jenis_lantai").find(':selected').attr('jenis');
		var dinding = $("#jenis_dinding").find(':selected').attr('dinding');
		var sumber = $("#sumber_penerangan").find(':selected').attr('sumber');
		var air = $("#sumber_air_minum").find(':selected').attr('air');
		var energi = $("#energi_memasak").find(':selected').attr('energi');
		var mckk = $("#fasilitas_mck").find(':selected').attr('mck');
		$('#input_fasilitas_mck').val(mckk);

		hasil = parseInt(energi) + parseInt(mckk) + parseInt(luas) + parseInt(lantai) + parseInt(jenis) + parseInt(
			dinding) + parseInt(atap) + parseInt(sumber) + parseInt(air);
		$("#total").val(hasil);
	}
	$(document).ready(function () {
		$(".btn").click(function () {
			var data = $('.formAdd').serialize();
			console.log(data);
			$.ajax({
				type: 'POST',
				url: "<?= base_url('psurvei/calonKriteria')?>", 
				data: data,
				success: function () {
					$('#result').html(response);
				}
			});
		});
	});

</script>
<script>
	function validateForm() {
		let x = document.forms["myForm"]["status_tempat_tinggal"].value;
		let y = document.forms["myForm"]["status_lahan"].value;
		if (x == "Bukan Milik Sendiri") {
			alert("Anda Tidak Bisa Mendaftar karena status tempat tinggal atau status lahan anda bukan milik sendiri");
			return false;
		} else if (y == "Bukan Milik Sendiri") {
			alert("Anda Tidak Bisa Mendaftar karena status tempat tinggal atau status lahan anda bukan milik sendiri")
			return false;
		}
	}

	function jumlah() {
		var me = $(this),
			luas = me.attr('luas');
		// console.log(luas);
		$('#luas').text(luas);
	}

	//   function price() {
	// 	var tes = document.getElementById("luas_lahan").value;
	//         document.getElementById("harga").value=tes;
	// 				console.log("luas_lahan");
	// }

</script>
