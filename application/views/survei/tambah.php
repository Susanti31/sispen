<div>

    <h1>Input Data Kriteria</h1>
	<br>
	<?php echo form_open_multipart('kesra/tambah_data_kriteria') ?>

<!-- <form class="form-group" action="<?= form_open_multipart('parfum/tambah_parfum') ?>" method="post"> -->
<form style="color:blue" >
  <div class="form-group row">
    <label for="inputno_kk" class="col-sm-2 col-form-label">No Kartu Keluarga</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="no_kk" id="no_kk" placeholder="No Kartu Keluarga">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputNama" class="col-sm-2 col-form-label">Status Tempat Tinggal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="status_tempat_tinggal" name="status_tempat_tinggal" placeholder="Masukkan Status Tempat Tinggal Anda">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Status Lahan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="status_lahan" name="status_lahan" placeholder="Masukkan Status Lahan Anda">
    </div>
  </div>
	<div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Luas Lahan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="luas_lahan" name="luas_lahan" placeholder="Masukkan Luas Lahan Anda">
    </div>
  </div>
	<div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Luas Lantai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="luas_lantai" name="luas_lantai" placeholder="Masukkan Luas Lantai Anda">
    </div>
  </div>
	<div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Jenis Lantai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jenis_lantai" name="jenis_lantai" placeholder="Masukkan Jenis Lantai Anda">
    </div>
  </div>
	<div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Jenis Dinding</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jenis_dinding" name="jenis_dinding" placeholder="Masukkan Jenis Dinding Anda">
    </div>
  </div>
	<div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Atap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="atap" name="atap" placeholder="Masukkan Atap Anda">
    </div>
  </div>
	<div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Sumber Penerangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sumber_penerangan" name="sumber_penerangan" placeholder="Masukkan Sumber Penerangan Anda">
    </div>
  </div>
	<div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Sumber Air Minum</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sumber_air_minum" name="sumber_air_minum" placeholder="Masukkan Sumber Air Minum">
    </div>
  </div>
	<div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Energi Memasak</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="energi_memasak" name="energi_memasak" placeholder="Masukkan Energi Memasak">
    </div>
  </div>
	<div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Fasilitas MCK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fasilitas_mck" name="fasilitas_mck" placeholder="Masukkan Fasilitas MCK">
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-10">
	<a href="<?= site_url('Kesra/index')?>" class="btn btn-primary">kembali</a>
  
	<button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
  <!-- <td " align="center"><input type="submit" name="submit" value="TAMBAH"> </td> -->

<?php echo form_close(); ?>

</div>
