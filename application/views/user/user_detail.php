<div class="content-wrapper">
	<section class="content">
		<h4><strong>Detail Data User</strong></h4>
		<table class="table">
			<tr>
				<th>ID User</th>
				<td><?php echo $detail->id_akun ?></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><?php echo $detail->username?></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><?php echo $detail->password?></td>
			</tr>
			<tr>
				<th>Nama</th>
				<td><?php echo $detail->nama?></td>
			</tr>
			<tr>
				<th>Role</th>
				<td><?php echo $detail->role?></td>
			</tr>			
		</table>

		<a href="<?php echo base_url('user/index');?>"class="btn btn-primary">Kembali</a>
	</section>
</div>