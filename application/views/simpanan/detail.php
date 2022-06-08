<div>
	<section class="content">
		<h4><strong>Detail Data Simpanan</strong></h4>
		<table class="table">
			<tr>
				<th>ID Simpanan</th>
				<td><?php echo $detail->id_simpanan ?></td>
			</tr>
			<tr>
				<th>ID Anggota</th>
				<td><?php echo $detail->id_anggota?></td>
			</tr>
			<tr>
				<th>Nama</th>
				<td><?php echo $detail->nama_anggota?></td>
			</tr>
			<tr>
				<th>Jenis Simpanan</th>
				<td><?php echo $detail->jenis_simpanan?></td>
			</tr>
			<tr>
				<th>Jumlah Simpanan</th>
				<td><?php echo $detail->jumlah_simpanan?></td>
			</tr>
			<tr>
				<th>Tanggal Simpanan</th>
				<td><?php echo $detail->tanggal_simpanan?></td>
			</tr>
									
		</table>

		<a href="<?php echo base_url('simpanan/index');?>"class="btn btn-primary">Kembali</a>
	</section>
</div>