<div>
	<section class="content-header">
      <h1>
        Data Simpanan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Simpanan</li>
      </ol>
    </section>

    <section class="content">
		<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Simpanan</button>
    	<div class="navbar-form navbar-right">
    		<?php echo form_open('simpanan/search')?>
    			<input type="text" name="keyword" class="form-control" placeholder="search">
    			<button type="submit" class="btn btn-success">Cari</button>
    		<?php echo form_close()?>
    	</div>
    	<table class="table">
    		<tr>
    			<th>No</th>
    			<th>ID Simpanan</th>
    			<th>ID Anggota</th>
    			<th>Nama</th>
    			<th>Jenis Simpanan</th>
    			<th>Jumlah</th>
    			<th>Tanggal Simpan</th>
    			<th colspan="2">Aksi</th>
    		</tr>
    		<?php 
    			$no = 1;
    			foreach ($simpanan as $smp) : ?>

    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $smp->id_simpanan ?></td>
    			<td><?php echo $smp->id_anggota ?></td>
    			<td><?php echo $smp->nama_anggota ?></td>
    			<td><?php echo $smp->jenis_simpanan ?></td>
    			<td><?php echo $smp->jumlah_simpanan?></td>
    			<td><?php echo $smp->tanggal_simpanan ?></td>
    			<td><?php echo anchor('simpanan/hapus/'.$smp->id_simpanan,'<div class="btn btn-danger bts-sm"><i class="fa fa-trash">delete</i></div>') ?></td>
    			<td><?php echo anchor('simpanan/edit/'.$smp->id_simpanan,'<div class="btn btn-primary bts-sm"><i class="fa fa-edit">edit</i></div>') ?></td>
    			<td><?php echo anchor('simpanan/detail/'.$smp->id_simpanan,'<div class="btn btn-success btn-sm">read<i class="fa fa-search-plus"></i></div>')?></td>
    		</tr>

    	<?php endforeach; ?>
    	</table>
    	<a class="btn btn-danger" href="<?php echo base_url('simpanan/cetak')?>"><i class="fa fa-print"></i>Print</a>

		<div class="dropdown inline">
			<button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				<i class="fa fa-download"></i> Export
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<li><a href="<?php echo base_url('simpanan/pdf')?>">PDF</a></li>
				<li><a href="<?php echo base_url('simpanan/excel')?>">EXCEL</a></li>
			</ul>
			<div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
		</div>

    </section>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA SIMPANAN</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'simpanan/tambah_aksi'; ?>">
	        	<div class="form-group">
	        		<label>ID Simpanan</label>
	        		<input type="text" name="id_simpanan" class="form-control">
	        	</div>
	        	
	        	<div class="form-group">
	        		<label>ID Anggota</label>
	        		<input type="text" name="id_anggota" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Nama</label>
	        		<input type="text" name="nama_anggota" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Jenis Simpanan</label>
	        		<input type="text" name="jenis_simpanan" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Jumlah</label>
	        		<input type="text" name="jumlah_simpanan" class="form-control">
	        	</div>

	        	<div class="form-group">
	        		<label>Tanggal Simpanan</label>
	        		<input type="date" name="tanggal_simpanan" class="form-control">
	        	</div>

	        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>

	        </form>
	      </div>
	    </div>
	  </div>
	</div>
</div>