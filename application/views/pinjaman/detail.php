<div>
	<section class="content">
		<h4><strong>Detail Data Pinjaman</strong></h4>
		<table class="table">
			<tr>
				<th>ID Pinjaman</th>
				<td><?php echo $detail->id_pinjaman ?></td>
			</tr>
			<tr>
				<th>ID Anggota</th>
				<td><?php echo $detail->anggota_id?></td>
			</tr>
			<tr>
				<th>Jumlah Pinjaman</th>
				<td><?php echo $detail->jumlah_pinjaman?></td>
			</tr>
			<tr>
				<th>Jenis Pinjaman</th>
				<td><?php echo $detail->jenis_pinjaman?></td>
			</tr>
			<tr>
				<th>Asal Angsuran</th>
				<td><?php echo $detail->angsuran_dari?></td>
			</tr>
			<tr>
				<th>Lama Angsuran</th>
				<td><?php echo $detail->lama_angsuran?></td>
			</tr>
									
		</table>

		<a href="<?php echo base_url('pinjaman/index');?>"class="btn btn-primary">Kembali</a>
	</section>
</div>