<div>
    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PINJAMAN</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <div class="modal-body">
   <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'pinjaman/tambah_aksi_anggota'; ?>">
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