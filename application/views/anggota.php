<div class="content-wrapper">
	 <section class="content-header">
      <h1>
        Data Anggota
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Anggota</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Anggota</button>
    	<table class="table">
    		<tr>
    			<th>No</th>
                <th>ID Anggota</th>
				<th>Nama Anggota</th>
				<th>Alamat Lengkap</th>
				<th>Tanggal Lahir</th>
				<th>Email</th>
				<th>No Telepon</th>
                <th colspan="2">Aksi</th>
    		</tr>

    		<?php
    		$no = 1;
    		foreach ($anggota as $agt) : ?>

				<tr>
					<td><?php echo $no++?></td>
                    <td><?php echo $agt->id_anggota?></td>
					<td><?php echo $agt->nama_anggota?></td>
					<td><?php echo $agt->alamat_lengkap?></td>
					<td><?php echo $agt->tanggal_lahir?></td>
					<td><?php echo $agt->email?></td>
					<td><?php echo $agt->no_telepon?></td>
                    <td><?php echo anchor('anggota/detail/'. $agt->id_anggota,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?></td>
                    <td onclick="javascript: return comfirm('Data akan dihapus secara permanen, tetap hapus?')"><?php echo anchor('anggota/hapus/'. $agt->id_anggota, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                    <td><?php echo anchor ('anggota/edit/'.$agt->id_anggota, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
				</tr>
			<?php endforeach;?>
    		
    	</table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM DATA ANGGOTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'anggota/tambah_aksi';?>">
        	<div class="form-group">
                <label>ID Anggota</label>
                <input type="text" name="id_anggota" class="form-control">
            </div>
        	<div class="form-group">
        		<label>Nama Anggota</label>
        		<input type="text" name="nama_anggota" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Alamat Lengkap</label>
        		<input type="text" name="alamat_lengkap" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Tanggal Lahir</label>
        		<input type="date" name="tanggal_lahir" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>email</label>
        		<input type="text" name="email" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>No Telepon</label>
        		<input type="text" name="no_telepon" class="form-control">
        	</div>
        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

