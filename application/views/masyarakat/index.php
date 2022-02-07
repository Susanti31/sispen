<div>
    <h1>Menu Data Masyarakat</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NO KK</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($penduduk->result() as $p) ?>
            <tr>

                <th scope="col"><?php echo $p->nama ?></th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </tbody>
    </table>





</div>