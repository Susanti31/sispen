<div>

    <h1>Input Data Masyarakat</h1>
	<br>
	<?php echo form_open_multipart('kesra/tambah_data') ?>

<!-- <form class="form-group" action="<?= form_open_multipart('parfum/tambah_parfum') ?>" method="post"> -->
<form style="color:blue" >
  <div class="form-group row">
    <label for="inputno_kk" class="col-sm-2 col-form-label">No Kartu Keluarga</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="no_kk" id="no_kk" placeholder="No Kartu Keluarga">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="alamat" placeholder="Masukkan Alamat Anda">
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-10">
	<a href="<?= site_url('Kesra/index')?>" class="btn btn-primary">kembali</a>
  
	<button type="submit" class="btn btn-primary">Tambah</button>
    </div>
  </div>
</form>
  <!-- <td " align="center"><input type="submit" name="submit" value="TAMBAH"> </td> -->

<?php echo form_close(); ?>

</div>
