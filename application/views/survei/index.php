<div>

    <h1>Menu Data Calon Penerima</h1>

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
            $no = 1;
            foreach ($penduduk as $item) {

            ?>


                <tr>

                    <th scope="col"><?= $no++ ?></th>
                    <th scope="col"><?= $item->no_kk ?></th>
                    <th scope="col"><?= $item->nama ?></th>
                    <th scope="col"><?= $item->alamat ?></th>
                    <th scope="col">
                        <a href="<?= site_url('Psurvei/tambah_kriteria/'), $item->no_kk ?>" class="btn btn-success btn-sm" type="submit"><i class="fas fa-fw fa-edit"></i> Tambah Kriteria</a>


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