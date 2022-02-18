<div>

    <h1>Input Data Kriteria</h1>
	<br>
	<?php echo form_open_multipart('psurvei/tambah_data_kriteria')  ?>

<!-- <form class="form-group" action="<?= form_open_multipart('parfum/tambah_parfum') ?>" method="post"> -->
<form style="color:blue" >
<div class="container">
  <div class="form-group row">
    <label for="inputno_kk" class="col-sm-2 col-form-label">No Kartu Keluarga</label>
    <div class="col-sm-10">
      <?php $i = "SELECT id_kriteria+1 FROM `kriteria` ORDER BY id_kriteria DESC LIMIT 1";
			// $x = $i+1;
      // var_dump($i+1);

{
	
?>
      <input type="number" class="form-control" name="id_kriteria" value="<?= rand(100,99999) ?>" id="id_kriteria" hidden>
      <input type="text" class="form-control" name="no_kk" value="<?=$penduduk->no_kk?>" id="no_kk" placeholder="<?= $penduduk->no_kk ?>" readonly>
    </div>
  </div>
  <?php } ?>
  <div class="form-group row">
    <label for="status_tempat_tinggal" class="col-sm-2 col-form-label">Status Tempat Tinggal</label>
<?php echo validation_errors(); ?>

    <div class="col-sm-10">
      <select name="status_tempat_tinggal" class= "form-control">
        <option value="Milik Sendiri">Milik Sendiri </option>
        <option value="Bukan Milik Sendiri"> Bukan Milik Sendiri </option>
      <!-- <input type="text" class="form-control" id="status_tempat_tinggal" name="status_tempat_tinggal" placeholder="Masukkan Status Tempat Tinggal Anda"> -->
</select>

    </div>
  </div>


  <div class="form-group row">
    <label for="status_lahan" class="col-sm-2 col-form-label">Status Lahan</label>
    <div class="col-sm-10">
    <select name="status_lahan" class= "form-control">
        <option value="Milik Sendiri">Milik Sendiri </option>
        <option value="Bukan Milik Sendiri">Bukan Milik Sendiri </option>
</select>
  </div>
  </div>
	<div class="form-group row">
    <label for="luas_lahan" class="col-sm-2 col-form-label">Luas Lahan</label>
    <div class="col-sm-10">
    <select name="luas_lahan" class= "form-control">
        <option value="45M - 55M">45M - 55M </option>
        <option value="55M - 65M">55M - 65M </option>
        <option value="65M - 75M">65M - 75M </option>
        <option value="75M - 80M">75M - 80M </option>
</select>
      <!-- <input type="text" class="form-control" id="luas_lahan" name="luas_lahan" placeholder="Masukkan Luas Lahan Anda"> -->
    </div>
  </div>
	<div class="form-group row">
    <label for="luas_lantai" class="col-sm-2 col-form-label">Luas Lantai</label>
    <div class="col-sm-10">
    <select name="luas_lantai" class= "form-control">
        <option value="20M - 25M">20M - 25M </option>
        <option value="25M - 30M">25M - 30M </option>
        <option value="30M - 35M">30M - 35M </option>
</select>
      <!-- <input type="text" class="form-control" id="luas_lantai" name="luas_lantai" placeholder="Masukkan Luas Lantai Anda"> -->
    </div>
  </div>
	<div class="form-group row">
    <label for="jenis_lantai" class="col-sm-2 col-form-label">Jenis Lantai</label>
    <div class="col-sm-10">
    <select name="jenis_lantai" class= "form-control">
        <option value="Kayu/Papan Kualitas Rendah">Kayu/Papan Kualitas Rendah</option>
        <option value="semen/bata merah">Semen/Bata Merah </option>
        <option value="kayu/papan kualitas tinggi">kayu/papan kualitas tinggi</option>
        <option value="keramik">keramik</option>
 </select>
      <!-- <input type="text" class="form-control" id="jenis_lantai" name="jenis_lantai" placeholder="Masukkan Jenis Lantai Anda"> -->
    </div>
  </div>
	<div class="form-group row">
    <label for="jenis_dinding" class="col-sm-2 col-form-label">Jenis Dinding</label>
    <div class="col-sm-10">
    <select name="jenis_dinding" class= "form-control">
        <option value="Kayu Kualitas Rendah/bambu">Kayu Kualitas Rendah/Bambu</option>
        <option value="kayu kualitas tinggi">kayu kualitas tinggi</option>
        <option value="semen/beton">Semen/Beton</option>
 </select>
      <!-- <input type="text" class="form-control" id="jenis_dinding" name="jenis_dinding" placeholder="Masukkan Jenis Dinding Anda"> -->
    </div>
  </div>
	<div class="form-group row">
    <label for="atap" class="col-sm-2 col-form-label">Atap</label>
    <div class="col-sm-10">
    <select name="atap" class= "form-control">

    <option value="kayu/jerami">Kayu/Jerami </option>
    <option value="seng">seng </option>
    <option value="genteng">Genteng </option>
</select>
      <!-- <input type="text" class="form-control" id="atap" name="atap" placeholder="Masukkan Atap Anda"> -->
    </div>
  </div>
	<div class="form-group row">
    <label for="sumber_penerangan" class="col-sm-2 col-form-label">Sumber Penerangan</label>
    <div class="col-sm-10">
    <select name="sumber_penerangan" class= "form-control">
    <option value="Lampu Minyak/Lilin">Lampu Minyak/Lilin </option>
    <option value="Listrik PLN">Listrik PLN </option>
    <option value="Listrik Non PlN">Listrik Non PLN </option>
</select>
      <!-- <input type="text" class="form-control" id="sumber_penerangan" name="sumber_penerangan" placeholder="Masukkan Sumber Penerangan Anda"> -->
    </div>
  </div>
	<div class="form-group row">
    <label for="sumber_air_minum" class="col-sm-2 col-form-label">Sumber Air Minum</label>
    <div class="col-sm-10">
    <select name="sumber_air_minum" class= "form-control">

    <option value="Sungai/Danau">Sungai/Danau </option>
    <option value="Sungai/Danau">Sungai/Danau </option>
</select>
      <!-- <input type="text" class="form-control" id="sumber_air_minum" name="sumber_air_minum" placeholder="Masukkan Sumber Air Minum"> -->
    </div>
  </div>
	<div class="form-group row">
    <label for="energi_memasak" class="col-sm-2 col-form-label">Energi Memasak</label>
    <div class="col-sm-10">
    <select name="energi_memasak" class= "form-control">

<option value="Kayu Bakar">Kayu Bakar </option>
<option value="Minyak Tanah">Minyak Tanah </option>
<option value="LPG 3 Kg">LPG 3 Kg </option>
</select>
      <!-- <input type="text" class="form-control" id="energi_memasak" name="energi_memasak" placeholder="Masukkan Energi Memasak"> -->
    </div>
  </div>
	<div class="form-group row">
    <label for="fasilitas_mck" class="col-sm-2 col-form-label">Fasilitas MCK</label>
    <div class="col-sm-10">
    <select name="fasilitas_mck" class= "form-control">

<option value="Tidak Ada">Tidak Ada </option>
<option value="MCK Umum">MCK Umum </option>
<option value="Berkelompok/Bertetangga">Berkelompok/Bertetangga </option>
<option value="Milik Sendiri">Milik Sendiri </option>
</select>
<!-- <input type="text" class="form-control" id="fasilitas_mck" name="fasilitas_mck" placeholder="Masukkan Fasilitas MCK"> -->
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-10">
	<a href="<?= site_url('psurvei/index')?>" class="btn btn-primary">kembali</a>
  
	<button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
  </div>
</form>
  <!-- <td " align="center"><input type="submit" name="submit" value="TAMBAH"> </td> -->

<?php echo form_close(); ?>

</div>
