<div>
    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA SIMPANAN</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <div class="modal-body">
   <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'simpanan/tambah_aksi_anggota'; ?>">
   	<div class="form-group">
   		<label>ID Simpanan</label>
   		<input type="text" name="id_simpanan" class="form-control">
   	</div>
   	
   	<div class="form-group">
   		<label>ID Anggota</label>
   		<input type="text" name="id_anggota" class="form-control">
   	</div>
   	<div class="form-group">    		<label>Nama</label>
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