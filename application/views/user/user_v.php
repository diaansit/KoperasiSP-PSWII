<div >
	 <section class="content-header">
      <h1>
        Data User
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data User</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah User</button>
    	<table class="table">
    		<tr>
    			<th>No</th>
                <th>ID User</th>
				<th>Username</th>
				<th>Password</th>
				<th>Nama</th>
				<th>Role</th>
                <th colspan="2">Aksi</th>
    		</tr>

    		<?php
    		$no = 1;
    		foreach ($row->result() as $key =>$data) { ?>

				<tr>
					<td><?php echo $no++?></td>
                    <td><?php echo $data->id_akun?></td>
					<td><?php echo $data->username?></td>
					<td><?php echo $data->password?></td>
					<td><?php echo $data->nama?></td>
					<td><?php echo $data->role?></td>
                    <td><?php echo anchor('user/hapus/'. $data->id_akun, '<div class="btn btn-danger btn-sm">hapus<i class="fa fa-trash"></i></div>') ?></td>
				</tr>
            <?php }?>
    		
    	</table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM DATA User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'user/tambah_aksi';?>">
        	<div class="form-group">
                <label>ID User</label>
                <input type="text" name="id_akun" class="form-control">
            </div>
        	<div class="form-group">
        		<label>Username</label>
        		<input type="text" name="username" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Password</label>
        		<input type="text" name="password" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Nama</label>
        		<input type="text" name="nama" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Role</label>
        		<input type="text" name="role" class="form-control">
        	</div>
        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

