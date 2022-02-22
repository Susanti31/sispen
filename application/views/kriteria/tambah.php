
<div class="container ">

    <h1><b>Input Data Kriteria</b></h1>
	<br>

<!-- <form  name="myForm" onsubmit="return validateForm()" method="post"> -->
<form  action="<?php echo site_url('psurvei/tambah_data_kriteria')?>"name="myForm" onsubmit="return validateForm()" method="post">
<!-- <div class="card"> -->
  <div class="form-group row">
    <label for="inputno_kk" class="col-sm-2 col-form-label">No Kartu Keluarga</label>
    <div class="col-sm-10">
		

	
      <input type="number" class="form-control" name="id_kriteria" value="<?= rand(100,99999) ?>" id="id_kriteria" hidden>
      <input type="text" class="form-control" name="no_kk" value="<?=$penduduk->no_kk?>" id="no_kk" placeholder="<?= $penduduk->no_kk ?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="status_tempat_tinggal" class="col-sm-2 col-form-label">Status Tempat Tinggal</label>

    <div class="col-sm-10">
		<select name="status_tempat_tinggal" class= "form-control">
      
			<option >Pilih Status Tempat Tinggal </option>
			<option value="Milik Sendiri">Milik Sendiri </option>
      <option value="Bukan Milik Sendiri"> Bukan Milik Sendiri </option>
    
		</select>


    </div>
  </div>
	

	<div id="main" data-loading="true">
  <div class="form-group row">
    <label for="status_lahan" class="col-sm-2 col-form-label">Status Lahan</label>
    <div class="col-sm-10">
    <select name="status_lahan" id="status_lahan" class= "form-control">
				<option >Pilih Status Lahan </option>
        <option value="Milik Sendiri">Milik Sendiri </option>
        <option value="Bukan Milik Sendiri">Bukan Milik Sendiri </option>
</select>
  </div>
  </div>

	<div class="form-group row">
    <label for="luas_lahan" class="col-sm-2 col-form-label">Luas Lahan</label>
    <div class="col-sm-10">
    <select name="luas_lahan" id="luas_lahan" class="form-control" onchange="luas">
        <option >Pilih Luas Lahan </option>
        <option  luas="4"  value="40 - 50m2">40 - 50m2 </option>
        <option  luas="3" value="50 - 60m2">50 - 60m2 </option>
        <option  luas="2" value="60 - 70m2">60 - 70m2 </option>
        <option  luas="1" value=">70m2">>70m2 </option>
</select>
    </div>
  </div>
	<input type="text" id="luas">
	<div class="form-group row">
    <label for="luas_lantai" class="col-sm-2 col-form-label">Luas Lantai</label>
    <div class="col-sm-10">
    <select name="luas_lantai" class= "form-control">
				<option >Pilih Luas Lantai </option>
        <option value="20 - 30m2">20 - 30m2</option>
        <option value="30- 40m2">30 - 40m2 </option>
        <option value="40 - 50m2">40 - 50m2 </option>
        <option value=">50m2">>50m2 </option>
</select>
    </div>
  </div>
	<div class="form-group row">
    <label for="jenis_lantai" class="col-sm-2 col-form-label">Jenis Lantai</label>
    <div class="col-sm-10">
    <select name="jenis_lantai" class= "form-control">
				<option >Pilih Jenis Lantai </option>
        <option value="Kayu/Papan Kualitas Rendah">Kayu/Papan Kualitas Rendah</option>
        <option value="semen/bata merah">Semen/Bata Merah </option>
        <option value="kayu/papan kualitas tinggi">kayu/papan kualitas tinggi</option>
        <option value="keramik">keramik</option>
 </select>
    </div>
  </div>
	<div class="form-group row">
    <label for="jenis_dinding" class="col-sm-2 col-form-label">Jenis Dinding</label>
    <div class="col-sm-10">
    <select name="jenis_dinding" class= "form-control">
				<option >Pilih Jenis Dinding </option>
        <option value="Kayu Kualitas Rendah/bambu">Kayu Kualitas Rendah/Bambu</option>
        <option value="kayu kualitas tinggi">kayu kualitas tinggi</option>
        <option value="semen/beton">Semen/Beton</option>
 </select>
    </div>
  </div>
	<div class="form-group row">
    <label for="atap" class="col-sm-2 col-form-label">Atap</label>
    <div class="col-sm-10">
    <select name="atap" class= "form-control">
		<option >Pilih Atap </option>
    <option value="kayu/jerami">Kayu/Jerami </option>
    <option value="seng">seng </option>
    <option value="genteng">Genteng </option>
</select>
    </div>
  </div>
	<div class="form-group row">
    <label for="sumber_penerangan" class="col-sm-2 col-form-label">Sumber Penerangan</label>
    <div class="col-sm-10">
    <select name="sumber_penerangan" class= "form-control">
		<option >Pilih Sumber Penerangan</option>
    <option value="Lampu Minyak/Lilin">Lampu Minyak/Lilin </option>
    <option value="Listrik PLN">Listrik PLN </option>
    <option value="Listrik Non PlN">Listrik Non PLN </option>
</select>
    </div>
  </div>
	<div class="form-group row">
    <label for="sumber_air_minum" class="col-sm-2 col-form-label">Sumber Air Minum</label>
    <div class="col-sm-10">
    <select name="sumber_air_minum" class= "form-control">
		<option >Pilih Sumber Air Minum </option>

    <option value="Sungai/Danau">Sungai/Danau </option>
    <option value="Mata Air/Perpipaan/Sumur">Mata Air/Perpipaan/Sumur </option>
    <option value="Perpipaan Berbayar">Perpipaan Berbayar </option>
    <option value="Air Isi Ulang/Kemasan">Air Isi Ulang/Kemasan </option>
</select>
    </div>
  </div>
	<div class="form-group row">
    <label for="energi_memasak" class="col-sm-2 col-form-label">Energi Memasak</label>
    <div class="col-sm-10">
    <select name="energi_memasak" class= "form-control">
<option > Pilih Energi Memasak</option>
<option value="Kayu Bakar">Kayu Bakar </option>
<option value="Minyak Tanah">Minyak Tanah </option>
<option value="LPG 3 Kg">LPG 3 Kg </option>
</select>
    </div>
  </div>
	<div class="form-group row">
    <label for="fasilitas_mck" class="col-sm-2 col-form-label">Fasilitas MCK</label>
    <div class="col-sm-10">
    <select name="fasilitas_mck" class= "form-control">
		<option > Pilih Fasilitas MCK</option>

<option value="Tidak Ada">Tidak Ada </option>
<option value="MCK Umum">MCK Umum </option>
<option value="Berkelompok/Bertetangga">Berkelompok/Bertetangga </option>
<option value="Milik Sendiri">Milik Sendiri </option>
</select>
    </div>
  </div>


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
<script>
function validateForm() {
  let x = document.forms["myForm"]["status_tempat_tinggal"].value;
  let y = document.forms["myForm"]["status_lahan"].value;
  if (x == "Bukan Milik Sendiri") {
    alert("Anda Tidak Bisa Mendaftar karena status tempat tinggal atau status lahan anda bukan milik sendiri");
    return false;
  } else if  (y == "Bukan Milik Sendiri"){
		alert("Anda Tidak Bisa Mendaftar karena status tempat tinggal atau status lahan anda bukan milik sendiri")
		return false;
	}
}
function jumlah(){
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
