<div>

    <h1>Menu Data Masyarakat</h1>
	<br>
	<a href="<?= site_url('Kesra/tambah_kriteria')?>" class="btn btn-primary">Tambah</a>
<br>
<h1></h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
                <th scope="col">No Kartu Keluarga</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
				
				<th scope="col">Aksi</th>



            </tr>
        </thead>
        <tbody>

            <?php 
			$no =1;
			foreach ($kriteria as $k) {
			
			?>


            <tr>

                <th scope="col"><?= $no++?></th>
                <th scope="col"><?= $k->no_kk ?></th>
                <th scope="col"><?= $k->nama ?></th>
                <th scope="col"><?= $k->alamat ?></th>
				<th scope="col">
				<a href="<?=site_url('Kesra/update/'),$p->no_kk ?>" class="btn btn-success btn-sm"
                    type="submit"><i class="fas fa-fw fa-edit"></i> Edit</a>

				<a href="<?=site_url('Kesra/delete/'),$p->no_kk ?>" class="btn btn-sm btn-danger"
                type="submit"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                

				</th>
			</tr>
				<?php } ?>
        </tbody>
    </table>

    <!-- <table class="table">
        <thead class="thead-light">
            <tr>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody> -->
    </table>




</div>
