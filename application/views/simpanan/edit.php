<div>
	<section class="content">
		<?php foreach($simpanan as $smp){ ?>

		<form action="<?php echo base_url(). 'simpanan/update';?>" method="post">

			<div class="form-group">
				<label>ID Simpanan</label>
				<input type="text" name="id_simpanan" class="form_control" value="<?php echo $smp->id_simpanan?>">
			</div>
			<div class="form-group">
                		<label>ID Anggota</label>
                		<input type="text" name="id_anggota" class="form-control" value="<?php echo $smp->id_anggota?>">
        	        </div>
			<div class="form-group">
                		<label>Nama</label>
                		<input type="text" name="nama_anggota" class="form-control" value="<?php echo $smp->nama_anggota?>">
                	</div>
                	<div class="form-group">
                		<label>Jenis Simpanan</label>
                		<input type="text" name="jenis_simpanan" class="form-control" value="<?php echo $smp->jenis_simpanan?>">
                	</div>
                	<div class="form-group">
                		<label>Jumlah Simpanan</label>
                		<input type="text" name="jumlah_simpanan" class="form-control" value="<?php echo $smp->jumlah_simpanan?>">
                	</div>
                	<div class="form-group">
                		<label>Tanggal Simpanan</label>
                		<input type="date" name="tanggal_simpanan" class="form-control" value="<?php echo $smp->tanggal_simpanan?>">
                	</div>

                	<button type="reset" class="btn btn-danger">Reset</button>
                	<button type="submit" class="btn btn-primary">Simpan</button>
			
		</form>
		<?php }?>
	</section>
</div>