<div>
	<section class="content">
		<?php foreach($anggota as $agt){ ?>

		<form action="<?php echo base_url(). 'anggota/update';?>" method="post">

			<div class="form-group">
				<label>ID Mahasiswa</label>
				<input type="text" name="id_anggota" class="form_control" value="<?php echo $agt->id_anggota?>">
			</div>
			<div class="form-group">
        		<label>Nama Anggota</label>
        		<input type="text" name="nama_anggota" class="form-control" value="<?php echo $agt->nama_anggota?>">
        	</div>
			<div class="form-group">
        		<label>Alamat Lengkap</label>
        		<input type="text" name="alamat_lengkap" class="form-control" value="<?php echo $agt->alamat_lengkap?>">
        	</div>
        	<div class="form-group">
        		<label>Tanggal Lahir</label>
        		<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $agt->tanggal_lahir?>">
        	</div>
        	<div class="form-group">
        		<label>email</label>
        		<input type="text" name="email" class="form-control" value="<?php echo $agt->email?>">
        	</div>
        	<div class="form-group">
        		<label>No Telepon</label>
        		<input type="text" name="no_telepon" class="form-control" value="<?php echo $agt->no_telepon?>">
        	</div>

        	<button type="reset" class="btn btn-danger">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>
			
		</form>
		<?php }?>
	</section>
</div>