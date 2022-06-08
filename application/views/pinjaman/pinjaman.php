<div>
	<section class="content-header">
      <h1>
        Data Pinjaman
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pinjaman</li>
      </ol>
    </section>

	<section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Pinjaman</button>
    	<table class="table">
    		<tr>
    			<th>No</th>
    			<th>ID Pinjaman</th>
    			<th>ID Anggota</th>
    			<th>Jumlah Pinjaman</th>
    			<th>Jenis Pinjaman</th>
    			<th>Asal Angsuran</th>
    			<th>Lama Angsuran</th>
    			<th colspan="2">Aksi</th>
    		</tr>
    		<?php 
    			$no = 1;
    			foreach ($pinjaman as $pjm) : ?>

    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $pjm->id_pinjaman ?></td>
    			<td><?php echo $pjm->anggota_id ?></td>
    			<td><?php echo $pjm->jumlah_pinjaman ?></td>
    			<td><?php echo $pjm->jenis_pinjaman ?></td>
    			<td><?php echo $pjm->angsuran_dari?></td>
    			<td><?php echo $pjm->lama_angsuran ?></td>
    			<td><?php echo anchor('pinjaman/hapus/'.$pjm->id_pinjaman,'<div class="btn btn-danger bts-sm"><i class="fa fa-trash">delete</i></div>') ?></td>
    			<td><?php echo anchor('pinjaman/edit/'.$pjm->id_pinjaman,'<div class="btn btn-primary bts-sm"><i class="fa fa-edit">edit</i></div>') ?></td>
    			<td><?php echo anchor('pinjaman/detail/'.$pjm->id_pinjaman,'<div class="btn btn-success btn-sm">read<i class="fa fa-search-plus"></i></div>')?></td>
    		</tr>

    	<?php endforeach; ?>
    	</table>
    	<a class="btn btn-danger" href="<?php echo base_url('pinjaman/cetak')?>"><i class="fa fa-print"></i>Print</a>
		

		<div class="dropdown inline">
		<button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		<i class="fa-fa-download"></i> Export
		<span class="caret"></span>
		</button>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<li><a href="<?php echo base_url('pinjaman/pdf')?>">PDF</a></li>
		<li><a href="<?php echo base_url('pinjaman/excel')?>">EXCEL</a></li>
		</ul>
		</div>
		</section>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PINJAMAN</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'pinjaman/tambah_aksi'; ?>">
	        	<div class="form-group">
	        		<label>ID Pinjaman</label>
	        		<input type="text" name="id_pinjaman" class="form-control">
	        	</div>
	        	
	        	<div class="form-group">
	        		<label>ID Anggota</label>
	        		<input type="text" name="anggota_id" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Jumlah Pinjaman</label>
	        		<input type="text" name="jumlah_pinjaman" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Jenis Pinjaman</label>
	        		<input type="text" name="jenis_pinjaman" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Asal Angsuran</label>
	        		<input type="text" name="angsuran_dari" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Lama Angsuran</label>
	        		<input type="date" name="lama_angsuran" class="form-control">
	        	</div>

	        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>

	        </form>
	      </div>
	    </div>
	  </div>
	</div>
</div>

</div>