<div>
	<section class="content">
		<?php foreach($pinjaman as $pjm){ ?>

		<form action="<?php echo base_url(). 'pinjaman/update';?>" method="post">

			<div class="form-group">
				<label>ID Pinjaman</label>
				<input type="text" name="id_pinjaman" class="form_control" value="<?php echo $pjm->id_pinjaman?>">
			</div>
			<div class="form-group">
                		<label>ID Anggota</label>
                		<input type="text" name="anggota_id" class="form-control" value="<?php echo $pjm->anggota_id?>">
        	        </div>
			<div class="form-group">
                		<label>Jumlah Pinjaman</label>
                		<input type="text" name="jumlah_pinjaman" class="form-control" value="<?php echo $pjm->jumlah_pinjaman?>">
                	</div>
                	<div class="form-group">
                		<label>Jenis Pinjaman</label>
                		<input type="text" name="jenis_pinjaman" class="form-control" value="<?php echo $pjm->jenis_pinjaman?>">
                	</div>
                	<div class="form-group">
                		<label>Asal Angsuran</label>
                		<input type="text" name="angsuran_dari" class="form-control" value="<?php echo $pjm->angsuran_dari?>">
                	</div>
                	<div class="form-group">
                		<label>Lama Angsuran</label>
                		<input type="date" name="lama_angsuran" class="form-control" value="<?php echo $pjm->lama_angsuran?>">
                	</div>

                	<button type="reset" class="btn btn-danger">Reset</button>
                	<button type="submit" class="btn btn-primary">Simpan</button>
			
		</form>
		<?php }?>
	</section>
</div>