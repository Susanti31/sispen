<div>

    <h1>Menu Data Kriteria Calon</h1>

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
            foreach ($kriteria as $k) {

            ?>


                <tr>

                    <th scope="col"><?= $no++ ?></th>
                    <th scope="col"><?= $k->no_kk ?></th>
                    <th scope="col"><?= $k->nama ?></th>
                    <th scope="col" ><?= $k->alamat ?></th>
                    <th scope="col">
                        <a href="<?= site_url('Kesra/update/'), $k->no_kk ?>" class="btn btn-primary btn-sm" type="submit"><i class="fas fa-fw fa-edit"></i> Detail</a>



                    </th>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>
<script>
</script>
