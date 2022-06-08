<div>
	<section class="content">
		<h4><strong>Detail Data Anggota</strong></h4>
		<table class="table">
			<tr>
				<th>ID Anggota</th>
				<td><?php echo $detail->id_anggota ?></td>
			</tr>
			<tr>
				<th>Nama Anggota</th>
				<td><?php echo $detail->nama_anggota?></td>
			</tr>
			<tr>
				<th>Alamat Lengkap</th>
				<td><?php echo $detail->alamat_lengkap?></td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<td><?php echo $detail->tanggal_lahir?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><?php echo $detail->email?></td>
			</tr>
			<tr>
				<th>No Telepon</th>
				<td><?php echo $detail->no_telepon?></td>
			</tr>
									
		</table>

		<a href="<?php echo base_url('anggota/index');?>"class="btn btn-primary">Kembali</a>
	</section>
</div>