<div>

	<h1>Menu Data Rekomendasi</h1>

	<h1></h1>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">No Kartu Keluarga</th>
				<th scope="col">Nama</th>
				<th scope="col">Skor</th>
				<th scope="col">Status</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>

			<?php
            $no = 1;
            foreach ($calon as $c) {
            ?>

			<tr>

				<th scope="col"><?= $no++ ?></th>
				<th scope="col"><?= $c->no_kk ?></th>
				<th scope="col"><?= $c->nama ?></th>
				<th scope="col"><?= $c->peringkat ?></th>
				<?php

					if ($c->status == 'pertimbangan')
					{
					echo '<th scope="col" class="badge rounded-pill alert-danger">Pertimbangan'; 
					}
					else {         
					echo '<th scope="col" class="badge rounded-pill alert-success">Rekomendasi';
					}
					?></th>

				<th scope="col">
				<form action="<?php echo site_url('Kades/calonRekom/')?>" name="myForm" id = "myForm"class="formAdd"
		onsubmit="return validateForm()" method="post">
		<input type="text" name="status"  value="rekomendasi" hidden>
					<a  class="btn btn-primary btn-sm" type="submit"><i class="fas fa-fw fa-edit"></i>
						Rekomendasi</a>
				</form>
				</th>
			</tr>
			<?php } ?>
		</tbody>
	</table>
 <!-- site_url('Kades/proses_update/'), $c->id_calon_penerima ?>" -->
</div>
<script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

		$(document).ready(function () {
		$(".btn").click(function () {
			var data = $('#myForm').serialize();
			// alert(data);
			$.ajax({
				type: 'POST',
				url: "<?= base_url('kades/calonRekom/')?>", 
				data: data,
				success: function (data) {
					// alert(data.success);
					// $('#result').html(response);
					$.load(response);
				
					// $('#result');
				}
			});
		});
	});
</script>
